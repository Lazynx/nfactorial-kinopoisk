<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
  public function search(Request $request) {
    $page = $request->get('page', 1);

    $query = $request->input('kp_query');

    $response = Http::withHeaders([
      'accept' => 'application/json',
      'X-API-KEY' => env('KINOPOISK_API_KEY')
    ])->get('https://kinopoiskapiunofficial.tech/api/v2.1/films/search-by-keyword', [
        'keyword' => $query,
        'page' => $page
    ]);

    $data = $response->json();
    $movies = $data['films'] ?? [];
    $totalPages = $data['pagesCount'] ?? 0;
    $totalPages = min($totalPages, 20);

    $collectionInfo = [
      'title' => 'Результаты поиска по запросу ' . '"' . $query . '":',
      'description' => null,
      'image' => null,
    ];

    return view('movies-collections', compact('movies', 'page', 'totalPages', 'collectionInfo'));
  }
}
