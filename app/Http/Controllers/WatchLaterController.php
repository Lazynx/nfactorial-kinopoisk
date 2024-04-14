<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WatchLater;
use Illuminate\Support\Facades\Auth;

class WatchLaterController extends Controller
{
  public function index(Request $request) {
    $user = Auth::user();
    $page = $request->get('page', 1);

    $moviesQuery = WatchLater::where('user_id', $user->id);

    $perPage = 20;
    $offset = ($page - 1) * $perPage;
    $movies = $moviesQuery->offset($offset)->limit($perPage)->get();

    $totalItems = $moviesQuery->count();
    $totalPages = ceil($totalItems / $perPage);

    $collectionInfo = [
      'title' => 'Смотреть позже',
      'description' => 'Фильмы, которые вы добавили для последующего просмотра.'
    ];

    return view('movies-collections', compact('movies', 'page', 'totalPages', 'collectionInfo'));
  }

  public function store(Request $request)
  {
    $request->validate([
      'movie_id' => 'required|numeric',
      'name_ru' => 'nullable|string',
      'name_original' => 'nullable|string',
      'country' => 'nullable|string',
      'genre' => 'nullable|string',
      'year' => 'nullable|digits:4',
      'rating_kinopoisk' => 'nullable|numeric',
      'poster_url_preview' => 'nullable|string'
    ]);

    $existingMovie = WatchLater::where('user_id', Auth::id())
      ->where('movie_id', $request->movie_id)
      ->first();

    if ($existingMovie) {
        return back()->with('error', 'Этот фильм уже добавлен в ваш список "Смотреть позже".');
    }

    WatchLater::create(array_merge(
      ['user_id' => Auth::id()],
      $request->only('movie_id', 'name_ru', 'name_original', 'country', 'genre', 'year', 'rating_kinopoisk', 'poster_url_preview')
    ));

    return back()->with('success', 'Фильм добавлен в список "Смотреть позже".');
  }

  public function toggle(Request $request)
  {
    $request->validate([
      'movie_id' => 'required|numeric',
    ]);

    $movie = WatchLater::where('user_id', Auth::id())
      ->where('movie_id', $request->movie_id)
      ->first();

    if ($movie) {
      $movie->delete();
      return back()->with('success', 'Фильм удалён из папки «Буду смотреть»');
    } else {
      WatchLater::create([
        'user_id' => Auth::id(),
        'movie_id' => $request->movie_id,
        'name_ru' => $request->name_ru,
        'name_original' => $request->name_original,
        'country' => $request->country,
        'genre' => $request->genre,
        'year' => $request->year,
        'rating_kinopoisk' => $request->rating_kinopoisk,
        'poster_url_preview' => $request->poster_url_preview
      ]);
      return back()->with('success', 'Фильм добавлен в папку «Буду смотреть»');
    }
  }

  public function destroy(WatchLater $watchLater)
  {
    $watchLater->delete();

    return back()->with('success', 'Фильм удален из списка "Смотреть позже".');
  }
}
