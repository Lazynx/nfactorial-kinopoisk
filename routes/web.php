<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WatchLaterController;

Route::get('/main', [MovieController::class, 'main'])->name('main');

Route::get('/movies', [MovieController::class, 'index'])->name('movies');
Route::get('/top-movies', [MovieController::class, 'topMovies'])->name('top.movies');
Route::get('/vampire-movies', [MovieController::class, 'vampireMovies'])->name('vampire.movies');
Route::get('/kids-movies', [MovieController::class, 'kidsMovies'])->name('kids.movies');
Route::get('/catastrophic-movies', [MovieController::class, 'catastrophicMovies'])->name('catastrophic.movies');
Route::get('/zombies-movies', [MovieController::class, 'zombiesMovies'])->name('zombies.movies');
Route::get('/comics-movies', [MovieController::class, 'comicsMovies'])->name('comics.movies');
Route::get('/love-movies', [MovieController::class, 'loveMovies'])->name('love.movies');
Route::get('/expected-movies', [MovieController::class, 'expectedMovies'])->name('expected.movies');

Route::get('/movies/{kinopoiskId}', [MovieController::class, 'show'])->name('movies.show');

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/series', [MovieController::class, 'series'])->name('series');
Route::get('/top-series', [MovieController::class, 'topSeries'])->name('top.series');
Route::get('/popular-series', [MovieController::class, 'popularSeries'])->name('popular.series');

Route::get('/login', function () {
  return view('auth');
})->name('login');

Route::get('/register', function () {
  return view('auth');
})->name('register');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
  Route::get('/watch-later', [WatchLaterController::class, 'index'])->name('watch-later');
  Route::post('/watch-later', [WatchLaterController::class, 'store'])->name('watch-later.store');
  Route::post('/watch-later/toggle', [WatchLaterController::class, 'toggle'])->name('watch-later.toggle');
  Route::delete('/watch-later/{watchLater}', [WatchLaterController::class, 'destroy'])->name('watch-later.destroy');
});
