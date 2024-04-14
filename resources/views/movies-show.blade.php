@extends('layout')

@section('css')
  <link href="{{ asset('css/collections.css') }}" rel="stylesheet">
  <link href="{{ asset('css/other.css') }}" rel="stylesheet">
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
@php
          $isAdded = \App\Models\WatchLater::where('user_id', Auth::id())
                      ->where('movie_id', $movie['kinopoiskId'] ?? $movie['filmId'])
                      ->exists();
      @endphp
  <div class="movie-detail">
    <div class="movie-detail__block">
      <a href="">
        <img src="{{ $movie['posterUrl'] }}" alt="Постер фильма: {{ $movie['nameRu'] ?? $movie['nameOriginal'] }}" class="movie-detail__img">
      </a>
    </div>
    <div class="movie-detail__info">
      <div class="movie-detail__info-inner">
        <div class="movie-detail__info-inner-2">
          <h1 class="movie-detail__title">
            {{ $movie['nameRu'] }}
            @if (isset($movie['year']))
              ({{ $movie['year'] }})
            @endif
          </h1>
          @if (isset($movie['nameOriginal']))
            <p class="movie-detail__subtitle">
              {{ $movie['nameOriginal'] }}
              @if (isset($movie['ratingMpaa']))
                {{ $movie['ratingAgeLimits'] }}+
              @endif
            </p>
          @endif
          @auth
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
            <button type="submit" class="btn-reset movie-card__btn-later {{ $isAdded ? 'added-style' : '' }}">
              @if ($isAdded)
                <span class="movie-card__btn-icon added"></span>
              @else
                <span class="movie-card__btn-icon "></span>
              @endif
              Буду смотреть
            </button>
          </form>
          @endauth
        </div>
        <div class="movie-detail__rating">
          <span class="movie-detail__rating-1">{{ $movie['ratingKinopoisk'] }}</span>
          <span class="movie-detail__rating-2">{{ $movie['ratingKinopoiskVoteCount'] }} оценок</span>
        </div>
      </div>
      <div>
        <h2 class="movie-detail__title2">О фильме</h2>
        <div>
          <div class="movie-detail__block-info">
            <p class="movie-detail__block-left">Год производства</p>
            <p class="movie-detail__block-right">{{ $movie['year'] }}</p>
          </div>
          <div class="movie-detail__block-info">
            <p class="movie-detail__block-left">Страна</p>
            <p class="movie-detail__block-right">{{ $movie['countries'][0]['country'] ?? 'Не указано' }}</p>
          </div>
          <div class="movie-detail__block-info">
            <p class="movie-detail__block-left">Жанр</p>
            <p class="movie-detail__block-right">{{ implode(', ', array_map(function ($genre) { return $genre['genre']; }, $movie['genres'])) }}</p>
          </div>
          <div class="movie-detail__block-info">
            <p class="movie-detail__block-left">Слоган</p>
            <p class="movie-detail__block-right">{{ !empty($movie['slogan']) ? '"' . $movie['slogan'] . '"' : '—' }}</p>
          </div>
          @foreach($filteredStaff as $professionKey => $names)
            @if (!empty($names))
                <div class="movie-detail__block-info">
                    <p class="movie-detail__block-left">{{ $professionKey }}</p>
                    <p class="movie-detail__block-right">{{ $names }}</p>
                </div>
            @endif
          @endforeach
          @if($budget)
            <div class="movie-detail__block-info">
              <p class="movie-detail__block-left">Бюджет</p>
              <p class="movie-detail__block-right">${{ number_format($budget, 0, '.', ' ') }}</p>
            </div>
          @endif

          @if($marketing)
            <div class="movie-detail__block-info">
              <p class="movie-detail__block-left">Маркетинг</p>
              <p class="movie-detail__block-right">${{ number_format($marketing, 0, '.', ' ') }}</p>
            </div>
          @endif

          @if($usGross)
            <div class="movie-detail__block-info">
              <p class="movie-detail__block-left">Сборы в США</p>
              <p class="movie-detail__block-right">${{ number_format($usGross, 0, '.', ' ') }}</p>
            </div>
          @endif

          @if ($worldGross)
            <div class="movie-detail__block-info">
              <p class="movie-detail__block-left">Сборы в мире</p>
              <p class="movie-detail__block-right">
                + ${{ number_format($worldGross - $usGross, 0, '.', ' ') }} = ${{ number_format($totalGross, 0, '.', ' ') }}
              </p>
            </div>
          @endif

          @if ($premiereRu)
            <div class="movie-detail__block-info">
                <p class="movie-detail__block-left">Премьера в России</p>
                <p class="movie-detail__block-right">
                    {{ \Carbon\Carbon::parse($premiereRu['date'])->locale('ru')->isoFormat('D MMMM YYYY') }},
                    @if (!empty($premiereRu['companies']))
                      «{{ $premiereRu['companies'][0]['name'] }}»
                    @endif
                </p>
            </div>
          @endif

          @if($worldPremiere)
            <div class="movie-detail__block-info">
              <p class="movie-detail__block-left">Премьера в мире</p>
              <p class="movie-detail__block-right">
                {{ \Carbon\Carbon::parse($worldPremiere['date'])->locale('ru')->isoFormat('D MMMM YYYY') }},
                @if (!empty($worldPremiere['companies']))
                  «{{ $premiereRu['companies'][0]['name'] }}»
                @endif
              </p>
            </div>
          @endif

          @if($releaseDvd)
            <div class="movie-detail__block-info">
              <p class="movie-detail__block-left">Релиз на DVD</p>
              <p class="movie-detail__block-right">
                {{ \Carbon\Carbon::parse($releaseDvd['date'])->locale('ru')->isoFormat('D MMMM YYYY') }},
                @if (!empty($releaseDvd['companies']))
                  «{{ $releaseDvd['companies'][0]['name'] }}»
                @endif
              </p>
            </div>
          @endif

          @if (isset($movie['ratingMpaa']))
            <div class="movie-detail__block-info">
              <p class="movie-detail__block-left">Возраст</p>
              <span class="movie-detail__block-right extra-rating">{{ $movie['ratingAgeLimits'] }}+</span>
            </div>
          @endif
          @if(!empty($movie['ratingMpaa']))
            <div class="movie-detail__block-info">
              <p class="movie-detail__block-left">Рейтинг MPAA</p>
              <span class="movie-detail__block-right extra-rating">{{ $movie['ratingMpaa'] }}</span>
            </div>
          @endif
          <div class="movie-detail__block-info">
            <p class="movie-detail__block-left">Время</p>
            <p class="movie-detail__block-right">
                @php
                    $hours = intdiv($movie['filmLength'], 60);
                    $minutes = $movie['filmLength'] % 60;
                @endphp
                {{ $movie['filmLength'] }} мин. / {{ sprintf("%02d:%02d", $hours, $minutes) }}
            </p>
        </div>
        </div>
      </div>
    </div>
  </div>
@endsection
