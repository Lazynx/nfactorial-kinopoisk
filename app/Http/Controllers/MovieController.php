<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class MovieController extends Controller
{
  private $collectionInfo = [
    'TOP_250_MOVIES' => [
        'title' => '250 лучших фильмов',
        'description' => 'Рейтинг составлен по результатам голосования посетителей сайта. Любой желающий может принять в нем участие, проголосовав за свой любимый фильм.',
        'image' => 'images/top-250.jpg',
    ],
    'VAMPIRE_THEME' => [
        'title' => 'Фильмы про вампиров',
        'description' => 'Лучшие леденящие кровь вампирские истории, собранные на основании оценок и рецензий пользователей Кинопоиска.',
        'image' => 'images/vampire-movies.jpg',
    ],
    'CATASTROPHE_THEME' => [
      'title' => 'Фильмы-катастрофы',
      'description' => 'Лучшие фильмы-катастрофы мирового кинематографа, собранные на основании оценок и рецензий пользователей Кинопоиска.',
      'image' => 'images/catastrophic-movies.jpg',
    ],
    'ZOMBIE_THEME' => [
      'title' => 'Фильмы про зомби: список лучших фильмов про живых мертвецов',
      'description' => 'Лучшие фильмы мирового кинематографа про живых мертвецов, собранные на основе оценок и рецензий пользователей Кинопоиска.',
      'image' => 'images/zombies-movies.jpg',
    ],
    'KIDS_ANIMATION_THEME' => [
      'title' => 'Мультфильмы для самых маленьких',
      'description' => 'Лучшие анимационные фильмы для детей всех возрастов. Рейтинг составлен на основании оценок и рецензий пользователей Кинопоиска.',
      'image' => 'images/kids-movies.jpg',
    ],
    'COMICS_THEME' => [
      'title' => 'Лучшие фильмы, основанные на комиксах',
      'description' => 'Рейтинг лучших фильмов, снятых по комиксам: от DC Comics и Marvel до манги и графических романов.',
      'image' => 'images/comics-movies.jpg',
    ],
    'LOVE_THEME' => [
      'title' => 'Фильмы про любовь и страсть: список лучших романтических фильмов',
      'description' => 'Самые красивые и трогательные истории любви мирового кинематографа, собранные на основе оценок и рецензий пользователей Кинопоиска.',
      'image' => 'images/love-movies.jpg',
    ],
    'TOP_250_TV_SHOWS' => [
      'title' => '250 лучших сериалов',
      'description' => 'Рейтинг составлен по результатам голосования посетителей сайта. Любой желающий может принять в нем участие, проголосовав за свой любимый сериал.',
      'image' => 'images/top-series.jpg',
    ],
    'TOP_POPULAR_ALL' => [
      'title' => 'Популярные сериалы и фильмы',
      'description' => 'Рейтинг составлен на основе посещаемости страниц сериалов, а также запросов к поисковой системе сайта. Список обновляется один раз в сутки.',
      'image' => 'images/popular-series.jpg',
    ]
  ];

  public function index() {
    return view('movies');
  }

  public function expectedMovies(Request $request) {
    $now = Carbon::now();
    $year = $now->year;
    $month = strtoupper($now->format('F'));
    $page = $request->get('page', 1);

    $response = Http::withHeaders([
      'accept' => 'application/json',
      'X-API-KEY' => env('KINOPOISK_API_KEY')
    ])->get("https://kinopoiskapiunofficial.tech/api/v2.2/films/premieres", [
        'year' => $year,
        'month' => $month
    ]);
    $data = $response->json();
    $moviesData = $this->getTopPremieres($data);

    $perPage = 20;
    $offset = ($page - 1) * $perPage;

    $perPage = 20;
    $offset = ($page - 1) * $perPage;
    $totalItems = count($moviesData);
    $totalPages = ceil($totalItems / $perPage);

    $movies = array_slice($moviesData, $offset, $perPage);

    $collectionInfo = [
      'title' => 'Ожидаемые фильмы',
      'description' => 'Фильмы, которые выходят в этом месяце в России.'
    ];

    return view('movies-collections', compact('movies', 'page', 'totalPages', 'collectionInfo'));
  }

  public function main() {
    $now = Carbon::now();
    $year = $now->year;
    $month = strtoupper($now->format('F'));

    $response = Http::withHeaders([
      'accept' => 'application/json',
      'X-API-KEY' => env('KINOPOISK_API_KEY')
    ])->get("https://kinopoiskapiunofficial.tech/api/v2.2/films/premieres", [
        'year' => $year,
        'month' => $month
    ]);
    $data = $response->json();
    $movies = $this->getTopPremieres($data, 10);

    return view('index', compact('movies'));
  }

  public function getTopPremieres($movies, $limit = null) {
    usort($movies['items'], function ($a, $b) {
        $dateA = Carbon::parse($a['premiereRu']);
        $dateB = Carbon::parse($b['premiereRu']);
        return $dateA->diffInDays(Carbon::now()) <=> $dateB->diffInDays(Carbon::now());
    });

    if ($limit !== null) {
        $movies['items'] = array_slice($movies['items'], 0, $limit);
    }

    return $movies['items'];
  }

  public function series() {
    return view('movies');
  }

  public function topSeries(Request $request)
  {
    return $this->fetchMovies('TOP_250_TV_SHOWS', $request);
  }

  public function popularSeries(Request $request)
  {
    return $this->fetchMovies('TOP_POPULAR_ALL', $request, true);
  }

  public function topMovies(Request $request)
  {
    return $this->fetchMovies('TOP_250_MOVIES', $request);
  }

  public function vampireMovies(Request $request)
  {
    return $this->fetchMovies('VAMPIRE_THEME', $request);
  }

  public function catastrophicMovies(Request $request)
  {
    return $this->fetchMovies('CATASTROPHE_THEME', $request);
  }

  public function zombiesMovies(Request $request)
  {
    return $this->fetchMovies('ZOMBIE_THEME', $request);
  }

  public function kidsMovies(Request $request)
  {
    return $this->fetchMovies('KIDS_ANIMATION_THEME', $request);
  }

  public function comicsMovies(Request $request)
  {
    return $this->fetchMovies('COMICS_THEME', $request);
  }

  public function loveMovies(Request $request)
  {
    return $this->fetchMovies('LOVE_THEME', $request);
  }

  private function fetchMovies($type, Request $request)
  {
    $page = $request->get('page', 1);

    $response = Http::withHeaders([
        'accept' => 'application/json',
        'X-API-KEY' => env('KINOPOISK_API_KEY')
    ])->get('https://kinopoiskapiunofficial.tech/api/v2.2/films/collections', [
        'type' => $type,
        'page' => $page
    ]);

    $data = $response->json();
    $movies = $data['items'] ?? [];
    $totalPages = $data['totalPages'] ?? 0;

    $collectionInfo = $this->collectionInfo[$type] ?? null;

    return view('movies-collections', compact('movies', 'page', 'totalPages', 'collectionInfo'));
  }

  public function show($kinopoiskId)
  {
    $response1 = Http::withHeaders([
      'accept' => 'application/json',
      'X-API-KEY' => env('KINOPOISK_API_KEY')
    ])->get("https://kinopoiskapiunofficial.tech/api/v2.2/films/{$kinopoiskId}");

    if ($response1->successful()) {
      $movie = $response1->json();
      $movie['ratingAgeLimits'] = preg_replace('/\D/', '', $movie['ratingAgeLimits']);
    } else {
      return redirect()->route('movies')->withErrors('Фильм не найден.');
    }

    $response2 = Http::withHeaders([
      'accept' => 'application/json',
      'X-API-KEY' => env('KINOPOISK_API_KEY')
    ])->get("https://kinopoiskapiunofficial.tech/api/v1/staff?filmId=$kinopoiskId");

    $staff = $response2->json();
    $staffCollection = collect($staff);

    $desiredProfessions = [
      'Режиссеры',
      'Сценаристы',
      'Продюсеры',
      'Операторы',
      'Композиторы',
      'Художники',
      'Монтаж'
    ];

    $filteredStaff = $staffCollection->whereIn('professionText', $desiredProfessions)
    ->groupBy('professionText')
    ->mapWithKeys(function ($group, $key) {
        return [$key => $group->pluck('nameRu')->filter()->unique()->implode(', ')];
    });

    $response3 = Http::withHeaders([
      'accept' => 'application/json',
      'X-API-KEY' => env('KINOPOISK_API_KEY')
    ])->get("https://kinopoiskapiunofficial.tech/api/v2.2/films/{$kinopoiskId}/box_office");

    $finances = $response3->json();

    $financesCollection = collect($finances['items']);

    $usGross = $financesCollection->firstWhere('type', 'USA')['amount'] ?? null;
    $worldGross = $financesCollection->firstWhere('type', 'WORLD')['amount'] ?? null;
    $totalGross = $usGross + ($worldGross ?? 0);
    $budget = $financesCollection->firstWhere('type', 'BUDGET')['amount'] ?? null;
    $marketing = $financesCollection->firstWhere('type', 'MARKETING')['amount'] ?? null;

    $response4 = Http::withHeaders([
      'accept' => 'application/json',
      'X-API-KEY' => env('KINOPOISK_API_KEY')
    ])->get("https://kinopoiskapiunofficial.tech/api/v2.2/films/{$kinopoiskId}/distributions");


    $releases = collect($response4->json()['items']);

    $premiereRu = $releases->firstWhere('country.country', 'Россия') ?? null;
    $worldPremiere = $releases->firstWhere('type', 'WORLD_PREMIER') ?? null;
    $releaseDvd = $releases->firstWhere('subType', 'DVD') ?? null;

    return view('movies-show', compact('movie', 'filteredStaff', 'usGross', 'worldGross', 'totalGross', 'budget', 'marketing', 'premiereRu', 'worldPremiere', 'releaseDvd'));
  }
}
