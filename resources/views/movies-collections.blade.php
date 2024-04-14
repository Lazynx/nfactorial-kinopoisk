@extends('layout')

@section('css')
  <link href="{{ asset('css/other.css') }}" rel="stylesheet">
  <link href="{{ asset('css/collections.css') }}" rel="stylesheet">
  <link href="{{ asset('css/media-collections.css') }}" rel="stylesheet">
@endsection

@section('content')
@if (session('success'))
    <div id="flash-alert" class="alert flash">
      <div class="flash__inner">
        <div class="flash__picture"></div>
        <div class="flash__content">
          {{ session('success') }}
        </div>
      </div>
    </div>
@endif
  <section class="lists">
    <div class="lists__top">
      <a href="{{ route('movies') }}" class="collections__link">
        Все списки
      </a>
      <ul class="list-reset lists__list">
        <li>
          <a href="{{ route('top.movies') }}" class="list__link">
            Топ 250 фильмов
          </a>
        </li>
        <li>
          <a href="{{ route('top.series') }}" class="list__link">
            Топ 250 сериалов
          </a>
        </li>
        <li>
          <a href="{{ route('expected.movies') }}" class="list__link">
            Ожидаемые
          </a>
        </li>
      </ul>
    </div>

    @if($collectionInfo)
      <div class="collection-info">
        <div class="collection-info__block-1">
          <h1 class="collection-info__title">{{ $collectionInfo['title'] }}</h1>
          <p class="collection-info__subtitle">{{ $collectionInfo['description'] }}</p>
        </div>
        @if (isset($collectionInfo['image']))
            <div class="collection-info__block-2">
              <img class="collection-info__img" src="{{ asset($collectionInfo['image']) }}" alt="{{ $collectionInfo['title'] }}">
            </div>
        @endif
      </div>
    @endif

    @php
      $offset = ($page - 1) * 20;
    @endphp
    @foreach ($movies as $index => $movie)
      @php
          $isAdded = \App\Models\WatchLater::where('user_id', Auth::id())
                      ->where('movie_id', $movie['kinopoiskId'] ?? $movie['filmId'])
                      ->exists();
      @endphp
      <div class="movie-card">
        <div class="movie-card__number-block">
          <span class="movie-card__number-text">{{ $offset + $index + 1 }}</span>
        </div>
        <a href="{{ route('movies.show', ['kinopoiskId' => $movie['kinopoiskId'] ?? $movie['filmId'] ?? $movie->movie_id]) }}" class="movie-card__link">
          <img class="movie-card__img" src="{{ $movie['posterUrlPreview'] ?? $movie->poster_url_preview }}" alt="Постер">
        </a>
        <div class="movie-card__text-block-1">
          <div class="movie-card__text-block-2">
            <a href="{{ route('movies.show', ['kinopoiskId' => $movie['kinopoiskId'] ?? $movie['filmId'] ?? $movie->movie_id]) }}">
              @if(isset($movie['nameRu']))
                <h3 class="movie-card__title">{{ $movie['nameRu'] }}</h3>
              @elseif(isset($movie->name_ru))
                <h3 class="movie-card__title">{{ $movie->name_ru }}</h3>
              @endif
              <div class="flex">
                @if(!empty($movie['nameOriginal']))
                  <p class="movie-card__subtitle">{{ $movie['nameOriginal'] }},&nbsp;</p>
                @elseif(!empty($movie->name_original))
                  <p class="movie-card__subtitle">{{ $movie->name_original }},&nbsp;</p>
                @elseif(!empty($movie['nameEn']))
                  <p class="movie-card__subtitle">{{ $movie['nameEn'] }},&nbsp;</p>
                @else
                  <p></p>
                @endif
                @if (!empty($movie['year']))
                  <p class="movie-card__subtitle">{{ $movie['year'] }}</p>
                @elseif(!empty($movie->year))
                  <p class="movie-card__subtitle">{{ $movie->year }}</p>
                @endif
              </div>
              <div class="flex">
                @if (isset($movie['countries'][0]["country"] ))
                  <p class="movie-card__info">{{ $movie['countries'][0]["country"] }} •&nbsp;</p>
                @elseif(isset($movie->country))
                  <p class="movie-card__info">{{ $movie->country }} •&nbsp;</p>
                @endif
                @if (isset($movie['genres'][0]["genre"]))
                  <p class="movie-card__info"> {{ $movie['genres'][0]["genre"] }}</p>
                @elseif(isset($movie->genre))
                  <p class="movie-card__info"> {{ $movie->genre }}</p>
                @endif
              </div>
            </a>
          </div>
        </div>

        @php
          $rating = $movie['ratingKinopoisk'] ?? $movie['rating'] ?? $movie->rating_kinopoisk ?? null;
          $ratingClass = '';
          $useGradient = false;

          if ($rating !== null && is_numeric($rating)) {
              if ($rating > 8) {
                  $ratingClass = 'movie-card__rating--high';
                  $useGradient = true;
              } elseif ($rating >= 7 && $rating <= 8) {
                  $ratingClass = 'movie-card__rating--medium';
              } elseif ($rating >= 5 && $rating < 7) {
                  $ratingClass = 'movie-card__rating--average';
              } elseif ($rating < 5) {
                  $ratingClass = 'movie-card__rating--low';
              }
          }
        @endphp

        <div class="movie-card__right">
            @if ($rating !== "null")
              <div class="movie-card__rating-block">
                @if ($useGradient)
                  <span class="movie-card__rating-img-1"></span>
                @endif
                <div><span class="movie-card__rating {{ $ratingClass }}">{{ $rating }}</span></div>
                @if ($useGradient)
                  <span class="movie-card__rating-img-2"></span>
                @endif
              </div>
            @else
              <div class="movie-card__rating-block">
                <span class="movie-card__rating"></span>
              </div>
            @endif

            @auth
              @if (request()->is('watch-later'))
                <form action="{{ route('watch-later.destroy', $movie->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn-reset movie-card__btn-later {{ $isAdded ? 'added-style' : '' }}">
                    <span class="movie-card__btn-icon added"></span>
                    Удалить из избранного
                  </button>
                </form>
              @else
                <form action="{{ route('watch-later.toggle') }}" method="POST">
                  @csrf
                  <input type="hidden" name="movie_id" value="{{ $movie['kinopoiskId'] ?? $movie['filmId'] }}">
                  <input type="hidden" name="name_ru" value="{{ $movie['nameRu'] ?? '' }}">
                  <input type="hidden" name="name_original" value="{{ $movie['nameOriginal'] ?? $movie['nameEn'] ?? '' }}">
                  <input type="hidden" name="country" value="{{ $movie['countries'][0]["country"] ?? '' }}">
                  <input type="hidden" name="genre" value="{{ $movie['genres'][0]["genre"] ?? '' }}">
                  <input type="hidden" name="year" value="{{ $movie['year'] ?? '' }}">
                  <input type="hidden" name="rating_kinopoisk" value="{{ $movie['ratingKinopoisk'] ?? '' }}">
                  <input type="hidden" name="poster_url_preview" value="{{ $movie['posterUrlPreview'] ?? '' }}">
                  <button type="submit" class="btn-reset movie-card__btn-later">
                    @if ($isAdded)
                      <span class="movie-card__btn-icon added"></span>
                    @else
                      <span class="movie-card__btn-icon "></span>
                    @endif
                    Буду смотреть
                  </button>
                </form>
              @endif
            @endauth
        </div>
      </div>
    @endforeach

    <div class="pagination">
      @if ($page > 1)
        <a href="{{ request()->fullUrlWithQuery(['page' => $page - 1]) }}" class="pagination__link first"></a>
      @endif

      @for ($i = 1; $i <= $totalPages; $i++)
        @if ($i == $page)
          <a href="{{ request()->fullUrlWithQuery(['page' => $i]) }}" class="pagination__link active">{{ $i }}</a>
        @elseif ($i == 1 || $i == $totalPages || ($i >= $page - 2 && $i <= $page + 2))
          <a href="{{ request()->fullUrlWithQuery(['page' => $i]) }}" class="pagination__link">{{ $i }}</a>
        @elseif ($i == 2 && $page > 4)
          <span class="pagination__link">...</span>
        @elseif ($i == $totalPages - 1 && $page < $totalPages - 3)
          <span class="pagination__link">...</span>
        @endif
      @endfor

      @if ($page < $totalPages)
        <a href="{{ request()->fullUrlWithQuery(['page' => $page + 1]) }}" class="pagination__link last"></a>
      @endif
    </div>

  </section>
@endsection
