@extends('layout')

@section('css')
  <link href="{{ asset('css/other.css') }}" rel="stylesheet">
  <link href="{{ asset('css/media-collections.css') }}" rel="stylesheet">
@endsection

@section('content')
  <section class="lists">
    <h2 class="lists__title">
      Списки
    </h2>
    <nav class="nav-2">
      <ul class="list-reset nav-2__links">
        <li>
          <a href="{{ route('movies') }}" class="{{ request()->is('movies') ? 'active' : '' }} nav-2__link">
              Фильмы
          </a>
        </li>
        <li>
          <a href="{{ route('series') }}" class="{{ request()->is('series') ? 'active' : '' }} nav-2__link">
              Сериалы
          </a>
        </li>
      </ul>
    </nav>
    <div class="lists__films">
      <p class="lists__subtitle">Список</p>
      <div>
        <div class="{{ request()->is('series') ? 'lists__series' : '' }}">
          @if (request()->is('movies'))
            <a href="{{ route('top.movies') }}" class="lists__link">
              <div class="lists__img">
                <img src="{{ asset('images/top-250.jpg') }}" alt="">
              </div>
              <div class="lists__texts">
                <span class="lists__text-1">250 лучших фильмов</span>
                <span class="lists__text-2">250 фильмов</span>
              </div>
            </a>
            <a href="{{ route('vampire.movies') }}" class="lists__link">
              <div class="lists__img">
                <img src="{{ asset('images/vampire-movies.jpg') }}" alt="">
              </div>
              <div class="lists__texts">
                <span class="lists__text-1">Фильмы про вампиров</span>
                <span class="lists__text-2">30 фильмов</span>
              </div>
            </a>
            <a href="{{ route('zombies.movies') }}" class="lists__link">
              <div class="lists__img">
                <img src="{{ asset('images/zombies-movies.jpg') }}" alt="">
              </div>
              <div class="lists__texts">
                <span class="lists__text-1">Фильмы про зомби: список лучших фильмов про живых мертвецов </span>
                <span class="lists__text-2">31 фильм</span>
              </div>
            </a>
            <a href="{{ route('kids.movies') }}" class="lists__link">
              <div class="lists__img">
                <img src="{{ asset('images/kids-movies.jpg') }}" alt="">
              </div>
              <div class="lists__texts">
                <span class="lists__text-1">Мультфильмы для самых маленьких</span>
                <span class="lists__text-2">30 фильмов</span>
              </div>
            </a>
            <a href="{{ route('catastrophic.movies') }}" class="lists__link">
              <div class="lists__img">
                <img src="{{ asset('images/catastrophic-movies.jpg') }}" alt="">
              </div>
              <div class="lists__texts">
                <span class="lists__text-1">Фильмы-катастрофы</span>
                <span class="lists__text-2">30 фильмов</span>
              </div>
            </a>
            <a href="{{ route('comics.movies') }}" class="lists__link">
              <div class="lists__img">
                <img src="{{ asset('images/comics-movies.jpg') }}" alt="">
              </div>
              <div class="lists__texts">
                <span class="lists__text-1">Лучшие фильмы, основанные на комиксах</span>
                <span class="lists__text-2">100 фильмов</span>
              </div>
            </a>
            <a href="{{ route('love.movies') }}" class="lists__link">
              <div class="lists__img">
                <img src="{{ asset('images/love-movies.jpg') }}" alt="">
              </div>
              <div class="lists__texts">
                <span class="lists__text-1">Фильмы про любовь и страсть: список лучших романтических фильмов </span>
                <span class="lists__text-2">70 фильмов</span>
              </div>
            </a>
          @elseif (request()->is('series'))
            <a href="{{ route('top.series') }}" class="lists__link ">
              <div class="lists__img">
                <img src="{{ asset('images/top-series.jpg') }}" alt="">
              </div>
              <div class="lists__texts">
                <span class="lists__text-1">250 лучших сериалов</span>
                <span class="lists__text-2">250 сериалов</span>
              </div>
            </a>
            <a href="{{ route('popular.series') }}" class="lists__link">
              <div class="lists__img">
                <img src="{{ asset('images/popular-series.jpg') }}" alt="">
              </div>
              <div class="lists__texts">
                <span class="lists__text-1">Популярные сериалы</span>
                <span class="lists__text-2">700 сериалов</span>
              </div>
            </a>
          @endif
        </div>
      </div>
    </div>
  </section>
@endsection
