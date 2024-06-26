@extends('layout')

@section('css')
  <link href="{{ asset('css/collections.css') }}" rel="stylesheet">
  <link href="{{ asset('css/index.css') }}" rel="stylesheet">
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
  <section class="focus flex">
    <h2 class="swiper-title">В фокусе</h2>
    <div class="swiper focus__swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide focus-slider__slide">
          <a href="https://www.kinopoisk.ru/media/article/4009298/">
            <img class="swiper-slide__img" src="{{ asset('images/swiper-1.jpg') }}" width="229" height="294" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide focus-slider__slide">
          <a href="https://www.kinopoisk.ru/media/article/4009288/">
            <img class="swiper-slide__img" src="{{ asset('images/swiper-2.jpg') }}" width="229" height="294" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide focus-slider__slide">
          <a href="https://www.kinopoisk.ru/media/article/4009269/">
            <img class="swiper-slide__img" src="{{ asset('images/swiper-3.jpg') }}" width="229" height="294" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide focus-slider__slide">
          <a href="https://www.kinopoisk.ru/media/article/4009291/">
            <img class="swiper-slide__img" src="{{ asset('images/swiper-4.jpg') }}" width="229" height="294" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide focus-slider__slide">
          <a href="https://www.kinopoisk.ru/media/article/4009267/">
            <img class="swiper-slide__img" src="{{ asset('images/swiper-5.jpg') }}" width="229" height="294" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
      </div>
    </div>
    <button aria-label="Переключение слайдера вперед" class="swiper-button-next focus__swiper-button-next swiper-nav-btn btn-reset">
      <svg width="50" height="50" viewbox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="path-1" d="M25 2.72191e-06C38.8071 2.11838e-06 50 11.1929 50 25C50 38.8071 38.8071 50 25 50C11.1929 50 -4.89256e-07 38.8071 -1.09278e-06 25C-1.69631e-06 11.1929 11.1929 3.32544e-06 25 2.72191e-06Z" fill="none"/>
        <path d="M25 2.72191e-06C38.8071 2.11838e-06 50 11.1929 50 25C50 38.8071 38.8071 50 25 50C11.1929 50 -4.89256e-07 38.8071 -1.09278e-06 25C-1.69631e-06 11.1929 11.1929 3.32544e-06 25 2.72191e-06Z" stroke="none"/>
        <path class="path-2" d="M23.3333 16.6667L31.6667 25L23.3333 33.3333" stroke="none"/>
      </svg>
    </button>
    <button aria-label="Переключение слайдера назад" class="swiper-button-prev focus__swiper-button-prev swiper-nav-btn btn-reset">
      <svg width="50" height="50" viewbox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="path-1" d="M15 30C6.71573 30 8.89561e-07 23.2843 1.25168e-06 15C1.61379e-06 6.71573 6.71573 -1.01779e-06 15 -6.55671e-07C23.2843 -2.93554e-07 30 6.71573 30 15C30 23.2843 23.2843 30 15 30Z" fill="none"/>
        <path d="M15 30C6.71573 30 8.89561e-07 23.2843 1.25168e-06 15C1.61379e-06 6.71573 6.71573 -1.01779e-06 15 -6.55671e-07C23.2843 -2.93554e-07 30 6.71573 30 15C30 23.2843 23.2843 30 15 30Z" stroke="none"/>
        <path class="path-2" d="M16 20L11 15L16 10" stroke="none"/>
      </svg>
    </button>
  </section>
  <section class="watching-now flex">
    <h2 class="swiper-title-2">
        Смотрят сейчас
    </h2>
    <div class="swiper watching-now__swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide watching-now__swiper-slide">
          <a href="{{ route('movies.show', ['kinopoiskId' => 1355059]) }}">
            <img class="swiper-slide__img" src="{{ asset('images/watching-now-1.jpg') }}" width="229" height="344" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide watching-now__swiper-slide">
          <a href="{{ route('movies.show', ['kinopoiskId' => 1311129]) }}">
            <img class="swiper-slide__img" src="{{ asset('images/watching-now-2.jpg') }}" width="229" height="344" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide watching-now__swiper-slide">
          <a href="{{ route('movies.show', ['kinopoiskId' => 4635111]) }}">
            <img class="swiper-slide__img" src="{{ asset('images/watching-now-3.jpg') }}" width="229" height="344" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide watching-now__swiper-slide">
          <a href="{{ route('movies.show', ['kinopoiskId' => 5047468]) }}">
            <img class="swiper-slide__img" src="{{ asset('images/watching-now-4.jpg') }}" width="229" height="344" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide watching-now__swiper-slide">
          <a href="{{ route('movies.show', ['kinopoiskId' => 1392743]) }}">
            <img class="swiper-slide__img" src="{{ asset('images/watching-now-5.jpg') }}" width="229" height="344" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide watching-now__swiper-slide">
          <a href="{{ route('movies.show', ['kinopoiskId' => 1100777]) }}">
            <img class="swiper-slide__img" src="{{ asset('images/watching-now-6.jpg') }}" width="229" height="344" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide watching-now__swiper-slide">
          <a href="{{ route('movies.show', ['kinopoiskId' => 4540940]) }}">
            <img class="swiper-slide__img" src="{{ asset('images/watching-now-7.jpg') }}" width="229" height="344" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide watching-now__swiper-slide">
          <a href="{{ route('movies.show', ['kinopoiskId' => 4443734]) }}">
            <img class="swiper-slide__img" src="{{ asset('images/watching-now-8.jpg') }}" width="229" height="344" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide watching-now__swiper-slide">
          <a href="{{ route('movies.show', ['kinopoiskId' => 4489198]) }}">
            <img class="swiper-slide__img" src="{{ asset('images/watching-now-9.jpg') }}" width="229" height="344" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide watching-now__swiper-slide">
          <a href="{{ route('movies.show', ['kinopoiskId' => 5277148]) }}">
            <img class="swiper-slide__img" src="{{ asset('images/watching-now-10.jpg') }}" width="229" height="344" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide watching-now__swiper-slide">
          <a href="{{ route('movies.show', ['kinopoiskId' => 5321393]) }}">
            <img class="swiper-slide__img" src="{{ asset('images/watching-now-11.jpg') }}" width="229" height="344" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide watching-now__swiper-slide">
          <a href="{{ route('movies.show', ['kinopoiskId' => 1143242]) }}">
            <img class="swiper-slide__img" src="{{ asset('images/watching-now-12.jpg') }}" width="229" height="344" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide watching-now__swiper-slide">
          <a href="{{ route('movies.show', ['kinopoiskId' => 5283168]) }}">
            <img class="swiper-slide__img" src="{{ asset('images/watching-now-13.jpg') }}" width="229" height="344" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide watching-now__swiper-slide">
          <a href="{{ route('movies.show', ['kinopoiskId' => 1346482]) }}">
            <img class="swiper-slide__img" src="{{ asset('images/watching-now-14.jpg') }}" width="229" height="344" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide watching-now__swiper-slide">
          <a href="{{ route('movies.show', ['kinopoiskId' => 749374]) }}">
            <img class="swiper-slide__img" src="{{ asset('images/watching-now-15.jpg') }}" width="229" height="344" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide watching-now__swiper-slide">
          <a href="{{ route('movies.show', ['kinopoiskId' => 4959134]) }}">
            <img class="swiper-slide__img" src="{{ asset('images/watching-now-16.jpg') }}" width="229" height="344" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide watching-now__swiper-slide">
          <a href="{{ route('movies.show', ['kinopoiskId' => 4384109]) }}">
            <img class="swiper-slide__img" src="{{ asset('images/watching-now-17.jpg') }}" width="229" height="344" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide watching-now__swiper-slide">
          <a href="{{ route('movies.show', ['kinopoiskId' => 5058451]) }}">
            <img class="swiper-slide__img" src="{{ asset('images/watching-now-18.jpg') }}" width="229" height="344" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide watching-now__swiper-slide">
          <a href="{{ route('movies.show', ['kinopoiskId' => 4527915]) }}">
            <img class="swiper-slide__img" src="{{ asset('images/watching-now-19.jpg') }}" width="229" height="344" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
        <div class="swiper-slide watching-now__swiper-slide">
          <a href="{{ route('movies.show', ['kinopoiskId' => 4947994]) }}">
            <img class="swiper-slide__img" src="{{ asset('images/watching-now-20.jpg') }}" width="229" height="344" alt="">
            <div class="swiper-slide__div"></div>
          </a>
        </div>
      </div>
    </div>
    <button aria-label="Переключение слайдера вперед" class="swiper-button-next watching-now__swiper-button-next swiper-nav-btn btn-reset">
      <svg width="50" height="50" viewbox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="path-1" d="M25 2.72191e-06C38.8071 2.11838e-06 50 11.1929 50 25C50 38.8071 38.8071 50 25 50C11.1929 50 -4.89256e-07 38.8071 -1.09278e-06 25C-1.69631e-06 11.1929 11.1929 3.32544e-06 25 2.72191e-06Z" fill="none"/>
        <path d="M25 2.72191e-06C38.8071 2.11838e-06 50 11.1929 50 25C50 38.8071 38.8071 50 25 50C11.1929 50 -4.89256e-07 38.8071 -1.09278e-06 25C-1.69631e-06 11.1929 11.1929 3.32544e-06 25 2.72191e-06Z" stroke="none"/>
        <path class="path-2" d="M23.3333 16.6667L31.6667 25L23.3333 33.3333" stroke="none"/>
      </svg>
    </button>
    <button aria-label="Переключение слайдера назад" class="swiper-button-prev watching-now__swiper-button-prev swiper-nav-btn btn-reset">
      <svg width="50" height="50" viewbox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="path-1" d="M15 30C6.71573 30 8.89561e-07 23.2843 1.25168e-06 15C1.61379e-06 6.71573 6.71573 -1.01779e-06 15 -6.55671e-07C23.2843 -2.93554e-07 30 6.71573 30 15C30 23.2843 23.2843 30 15 30Z" fill="none"/>
        <path d="M15 30C6.71573 30 8.89561e-07 23.2843 1.25168e-06 15C1.61379e-06 6.71573 6.71573 -1.01779e-06 15 -6.55671e-07C23.2843 -2.93554e-07 30 6.71573 30 15C30 23.2843 23.2843 30 15 30Z" stroke="none"/>
        <path class="path-2" d="M16 20L11 15L16 10" stroke="none"/>
      </svg>
    </button>
  </section>
  <section class="top-10 flex">
    <h2 class="swiper-title-3">
      <div class="swiper-title-3__img"></div>
      Топ-10 за месяц
    </h2>
    <div class="swiper top-10__swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide top-10__swiper-slide">
          <div class="top-10__swiper-slide__block">
            <a class="top-10__swiper-slide__link-1" href="{{ route('movies.show', ['kinopoiskId' => 5047468]) }}">
              <div class="top-10__swiper-slide__link-1__block">
                <svg viewBox="0 0 280 196" class="top-10__swiper-slide__link-1__svg"><defs><linearGradient id="active-gradient-id" x1="0.8" x2="0" y1="1.2" y2="0"><stop offset="1.68%" stop-color="#000000"></stop><stop offset="19.76%" stop-color="#2F2C30"></stop><stop offset="26.99%" stop-color="#423C43"></stop><stop offset="34.32%" stop-color="#5D595F"></stop><stop offset="46.44%" stop-color="#9C9C9C"></stop><stop offset="53.66%" stop-color="#D2C9D4"></stop><stop offset="59.74%" stop-color="#E6E6E6"></stop><stop offset="64.98%" stop-color="#DBDBDB"></stop><stop offset="73.35%" stop-color="#BDB8BA"></stop><stop offset="77.09%" stop-color="#B9B2B5"></stop><stop offset="87.31%" stop-color="#D6CCD6"></stop><stop offset="92.69%" stop-color="#E2DBE1"></stop><stop offset="98.15%" stop-color="#D0C4C8"></stop></linearGradient><linearGradient id="hover-gradient-id" x1="0.8" x2="0" y1="1.2" y2="0"><stop offset="-1.21%" stop-color="#858CF0"></stop><stop offset="6.32%" stop-color="#75C3F0"></stop><stop offset="11.63%" stop-color="#6EDBF0"></stop><stop offset="18.09%" stop-color="#7BACF0"></stop><stop offset="24.2%" stop-color="#848CF0"></stop><stop offset="33.17%" stop-color="#C28DF8"></stop><stop offset="39.59%" stop-color="#BAA5BE"></stop><stop offset="46.58%" stop-color="#C6BAC9"></stop><stop offset="54.28%" stop-color="#EBE7EC"></stop><stop offset="60.78%" stop-color="#FFFFFF"></stop><stop offset="66.37%" stop-color="#EAEAEA"></stop><stop offset="75.3%" stop-color="#BDB8BA"></stop><stop offset="79.29%" stop-color="#B9B2B5"></stop><stop offset="90.2%" stop-color="#F2DFF2"></stop><stop offset="95.95%" stop-color="#E6D6E4"></stop><stop offset="101.78%" stop-color="#D0C4C8"></stop></linearGradient></defs><g id="num_1-masks_group" mask="url(#num_1-masks)"><path id="num_1-shape" d="M126.146000,48L163.350000,48L128.011000,148L41.796600,148L32,176L239.406000,176L248.980000,148L157.708000,148L202.941000,20L126.146000,20L126.146000,48Z" fill="url(#active-gradient-id)" stroke="none" stroke-width="1"></path><mask id="num_1-masks" mask-type="luminance"><path id="num_1-mask_1" d="M126.146000,34L183.146000,34L136.146000,167" fill="none" stroke="rgb(255,255,255)" stroke-width="28" stroke-dashoffset="594.18" stroke-dasharray="198.06" class="styles_num1Mask1__8W4HB"></path><path id="num_1-mask_2" d="M31.645300,162L249.645000,162" fill="none" stroke="rgb(255,255,255)" stroke-width="28" stroke-dashoffset="654" stroke-dasharray="218" class="styles_num1Mask2__IkHZs"></path></mask></g><g><path d="M126.146000,48L163.350000,48L128.011000,148L41.796600,148L32,176L239.406000,176L248.980000,148L157.708000,148L202.941000,20L126.146000,20L126.146000,48Z" fill="url(#hover-gradient-id)" stroke="none" stroke-width="1" class="styles_hoveredIcon__utVeP"></path></g></svg>
              </div>
            </a>
            <div class="top-10__swiper-slide__block-inner-1">
              <div class="top-10__swiper-slide__block-inner-2">
                <a href="{{ route('movies.show', ['kinopoiskId' => 5047468]) }}" class="top-10__swiper-slide__link-2">
                  <img class="top-10__swiper-slide__img" src="{{ asset('images/top-10__swiper-slide__img-1.jpg') }}" alt="">
                </a>
                <div class="top-10__swiper-slide__block-inner-3"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide top-10__swiper-slide">
          <div class="top-10__swiper-slide__block">
            <a class="top-10__swiper-slide__link-1" href="{{ route('movies.show', ['kinopoiskId' => 1355059]) }}">
              <div class="top-10__swiper-slide__link-1__block">
                <svg viewBox="0 0 280 196" class="top-10__swiper-slide__link-1__svg"><g id="num_2-masks_group" mask="url(#num_2-masks)"><path id="num_2-shape" d="M28.100000,176L38.500000,146.300000C43.200000,145.600000,48,145,53.100000,144.300000L53.100000,144.300000C84.500000,140,121.600000,134.900000,154,125.800000C175.200000,119.900000,193,112.600000,205.300000,103.700000C217.300000,95,222.500000,85.900000,222.500000,75.500000C222.500000,66.600000,216.700000,58.100000,201.400000,51.300000C186.300000,44.500000,165,41.200000,142.900000,41.800000C120.800000,42.400000,99.400000,47,84.100000,54.500000C68.400000,62.200000,62.500000,71.100000,62.500000,79.500000L34.500000,79.500000C34.500000,55.400000,52.100000,39.100000,71.700000,29.400000C91.600000,19.600000,117.300000,14.500000,142.100000,13.800000C166.900000,13.100000,192.700000,16.700000,212.800000,25.700000C232.800000,34.600000,250.500000,50.700000,250.500000,75.500000C250.500000,97.700000,238.200000,114.400000,221.700000,126.400000C209.300000,135.400000,193.700000,142.400000,177,148L256,148L246.400000,176L28.100000,176Z" fill="url(#active-gradient-id)" stroke="none" stroke-width="1"></path><mask id="num_2-masks" mask-type="luminance"><path id="num_2-mask_1" d="M48.500000,79.500000C48.500000,14.500000,236.500000,8,236.500000,75.500000C236.500000,140.700000,96,151.500000,28,162L257.100000,162" fill="none" stroke="rgb(255,255,255)" stroke-width="28" stroke-dashoffset="2108.34" stroke-dasharray="702.780000" class="styles_num2Mask1__MxB_v"></path></mask></g><g><path d="M28.100000,176L38.500000,146.300000C43.200000,145.600000,48,145,53.100000,144.300000L53.100000,144.300000C84.500000,140,121.600000,134.900000,154,125.800000C175.200000,119.900000,193,112.600000,205.300000,103.700000C217.300000,95,222.500000,85.900000,222.500000,75.500000C222.500000,66.600000,216.700000,58.100000,201.400000,51.300000C186.300000,44.500000,165,41.200000,142.900000,41.800000C120.800000,42.400000,99.400000,47,84.100000,54.500000C68.400000,62.200000,62.500000,71.100000,62.500000,79.500000L34.500000,79.500000C34.500000,55.400000,52.100000,39.100000,71.700000,29.400000C91.600000,19.600000,117.300000,14.500000,142.100000,13.800000C166.900000,13.100000,192.700000,16.700000,212.800000,25.700000C232.800000,34.600000,250.500000,50.700000,250.500000,75.500000C250.500000,97.700000,238.200000,114.400000,221.700000,126.400000C209.300000,135.400000,193.700000,142.400000,177,148L256,148L246.400000,176L28.100000,176Z" fill="url(#hover-gradient-id)" stroke="none" stroke-width="1" class="styles_hoveredIcon__utVeP"></path></g></svg>
              </div>
            </a>
            <div class="top-10__swiper-slide__block-inner-1">
              <div class="top-10__swiper-slide__block-inner-2">
                <a href="{{ route('movies.show', ['kinopoiskId' => 1355059]) }}" class="top-10__swiper-slide__link-2">
                  <img class="top-10__swiper-slide__img" src="{{ asset('images/top-10__swiper-slide__img-2.jpg') }}" alt="">
                </a>
                <div class="top-10__swiper-slide__block-inner-3"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide top-10__swiper-slide">
          <div class="top-10__swiper-slide__block">
            <a class="top-10__swiper-slide__link-1" href="{{ route('movies.show', ['kinopoiskId' => 4635111]) }}">
              <div class="top-10__swiper-slide__link-1__block">
                <svg viewBox="0 0 280 196" class="top-10__swiper-slide__link-1__svg"><g id="num_3-masks_group" mask="url(#num_3-masks)"><path id="num_3-shape" d="M33.999900,48L43.796500,20L254.145000,20L254.145000,58.408800L228.718000,64.818500C232.096000,65.923100,235.333000,67.251600,238.388000,68.838300C245.936000,72.758700,252.592000,78.369600,257.277000,86.151600C261.955000,93.921000,264.145000,102.985000,264.145000,113C264.145000,141.151000,243.645000,158.855000,220.136000,168.611000C196.451000,178.439000,166.001000,182.124000,136.571000,181.180000C107.080000,180.234000,76.994000,174.587000,53.831300,164.421000C31.892300,154.792000,10.255500,138.222000,10.646800,112.785000L38.643500,113.215000C38.534900,120.278000,44.835500,129.895000,65.084100,138.782000C84.108800,147.132000,110.460000,152.328000,137.469000,153.195000C164.539000,154.063000,190.652000,150.530000,209.404000,142.749000C228.332000,134.895000,236.145000,124.599000,236.145000,113C236.145000,107.115000,234.888000,103.249000,233.289000,100.594000C231.699000,97.951200,229.249000,95.643300,225.482000,93.686700C217.406000,89.491900,204.619000,87.602300,187.541000,88.020800C170.845000,88.429900,151.987000,90.959600,132.966000,93.977100C127.173000,94.896100,121.315000,95.869700,115.515000,96.833900L115.511000,96.834400C102.692000,98.965100,90.151800,101.049000,79.209300,102.395000L74.078200,74.924700L180.887000,48L33.999900,48Z" fill="url(#active-gradient-id)" stroke="none" stroke-width="1"></path><mask id="num_3-masks" mask-type="luminance"><path id="num_3-mask_1" d="M33.645100,34L240.145000,34L240.145000,47.500000L77.500200,88.500000C139.834000,80.833300,250.145000,49.400000,250.145000,113C250.145000,192.500000,23.645100,178,24.645100,113" fill="none" stroke="rgb(255,255,255)" stroke-width="28" stroke-dashoffset="2567.4" stroke-dasharray="855.800000" class="styles_num3Mask1__vWtKh"></path></mask></g><g><path d="M33.999900,48L43.796500,20L254.145000,20L254.145000,58.408800L228.718000,64.818500C232.096000,65.923100,235.333000,67.251600,238.388000,68.838300C245.936000,72.758700,252.592000,78.369600,257.277000,86.151600C261.955000,93.921000,264.145000,102.985000,264.145000,113C264.145000,141.151000,243.645000,158.855000,220.136000,168.611000C196.451000,178.439000,166.001000,182.124000,136.571000,181.180000C107.080000,180.234000,76.994000,174.587000,53.831300,164.421000C31.892300,154.792000,10.255500,138.222000,10.646800,112.785000L38.643500,113.215000C38.534900,120.278000,44.835500,129.895000,65.084100,138.782000C84.108800,147.132000,110.460000,152.328000,137.469000,153.195000C164.539000,154.063000,190.652000,150.530000,209.404000,142.749000C228.332000,134.895000,236.145000,124.599000,236.145000,113C236.145000,107.115000,234.888000,103.249000,233.289000,100.594000C231.699000,97.951200,229.249000,95.643300,225.482000,93.686700C217.406000,89.491900,204.619000,87.602300,187.541000,88.020800C170.845000,88.429900,151.987000,90.959600,132.966000,93.977100C127.173000,94.896100,121.315000,95.869700,115.515000,96.833900L115.511000,96.834400C102.692000,98.965100,90.151800,101.049000,79.209300,102.395000L74.078200,74.924700L180.887000,48L33.999900,48Z" fill="url(#hover-gradient-id)" stroke="none" stroke-width="1" class="styles_hoveredIcon__utVeP"></path></g></svg>
              </div>
            </a>
            <div class="top-10__swiper-slide__block-inner-1">
              <div class="top-10__swiper-slide__block-inner-2">
                <a href="{{ route('movies.show', ['kinopoiskId' => 4635111]) }}" class="top-10__swiper-slide__link-2">
                  <img class="top-10__swiper-slide__img" src="{{ asset('images/top-10__swiper-slide__img-3.jpg') }}" alt="">
                </a>
                <div class="top-10__swiper-slide__block-inner-3"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide top-10__swiper-slide">
          <div class="top-10__swiper-slide__block">
            <a class="top-10__swiper-slide__link-1" href="{{ route('movies.show', ['kinopoiskId' => 4489198]) }}">
              <div class="top-10__swiper-slide__link-1__block">
                <svg viewBox="0 0 280 196" class="top-10__swiper-slide__link-1__svg"><g id="num_4-masks_group" mask="url(#num_4-masks)"><path id="num_4-shape" d="M48.200000,20L77.900000,20L59.200000,73.500000L200.300000,73.500000L218.900000,20L248.500000,20L229.900000,73.500000L270.200000,73.500000L260.600000,101.500000L220.100000,101.500000L194.300000,176L164.700000,176L190.600000,101.500000L19.800000,101.500000L48.200000,20Z" fill="url(#active-gradient-id)" stroke="none" stroke-width="1"></path><mask id="num_4-masks" mask-type="luminance"><path id="num_4-mask_1" d="M66,11.500000L39.500000,87.500000L271,87.500000" fill="none" stroke="rgb(255,255,255)" stroke-width="28" stroke-dashoffset="935.97" stroke-dasharray="311.990000" class="styles_num4Mask1__P0F9x"></path><path id="num_4-mask_2" d="M236.500000,12L176.500000,184.500000" fill="none" stroke="rgb(255,255,255)" stroke-width="28" stroke-dashoffset="547.92" stroke-dasharray="182.640000" class="styles_num4Mask2__Lqfbl"></path></mask></g><g><path d="M48.200000,20L77.900000,20L59.200000,73.500000L200.300000,73.500000L218.900000,20L248.500000,20L229.900000,73.500000L270.200000,73.500000L260.600000,101.500000L220.100000,101.500000L194.300000,176L164.700000,176L190.600000,101.500000L19.800000,101.500000L48.200000,20Z" fill="url(#hover-gradient-id)" stroke="none" stroke-width="1" class="styles_hoveredIcon__utVeP"></path></g></svg>
              </div>
            </a>
            <div class="top-10__swiper-slide__block-inner-1">
              <div class="top-10__swiper-slide__block-inner-2">
                <a href="{{ route('movies.show', ['kinopoiskId' => 4489198]) }}" class="top-10__swiper-slide__link-2">
                  <img class="top-10__swiper-slide__img" src="{{ asset('images/top-10__swiper-slide__img-4.jpg') }}" alt="">
                </a>
                <div class="top-10__swiper-slide__block-inner-3"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide top-10__swiper-slide">
          <div class="top-10__swiper-slide__block">
            <a class="top-10__swiper-slide__link-1" href="{{ route('movies.show', ['kinopoiskId' => 5321393]) }}">
              <div class="top-10__swiper-slide__link-1__block">
                <svg viewBox="0 0 280 196" class="top-10__swiper-slide__link-1__svg"><g id="num_5-masks_group" mask="url(#num_5-masks)"><path id="num_5-shape" d="M188.271000,20L178.697000,48L96.299800,48L89.675800,66.181800C118.265000,62.487900,153.826000,58.222100,184.601000,58.941300C204.321000,59.402200,223.933000,61.901300,239.068000,69.053100C246.812000,72.712700,253.951000,77.853800,259.150000,85.096100C264.456000,92.486500,267.149000,101.249000,267.149000,111C267.149000,139.151000,246.649000,156.855000,223.139000,166.611000C199.454000,176.439000,169.005000,180.124000,139.575000,179.180000C110.084000,178.234000,79.997400,172.587000,56.834700,162.421000C34.895800,152.792000,13.258900,136.222000,13.650200,110.785000L41.646900,111.215000C41.538300,118.278000,47.838900,127.895000,68.087500,136.782000C87.112300,145.132000,113.463000,150.328000,140.472000,151.195000C167.542000,152.063000,193.655000,148.530000,212.408000,140.749000C231.336000,132.895000,239.149000,122.599000,239.149000,111C239.149000,106.626000,238.024000,103.680000,236.405000,101.425000C234.680000,99.022500,231.787000,96.581600,227.105000,94.368800C217.385000,89.775800,202.560000,87.368700,183.947000,86.933700C152.982000,86.210100,116.673000,90.921200,86.929800,94.780300C81.126300,95.533300,75.572600,96.253900,70.357600,96.895300L47.669600,99.685800L76.700300,20L188.271000,20Z" fill="url(#active-gradient-id)" stroke="none" stroke-width="1"></path><mask id="num_5-masks" mask-type="luminance"><path id="num_5-mask_1" d="M189,34L86.500000,34L68.648600,83C130.982000,75.333300,253.149000,54.500000,253.149000,111C253.149000,190.500000,26.648600,176,27.648600,111" fill="none" stroke="rgb(255,255,255)" stroke-width="28" stroke-dashoffset="1893.99" stroke-dasharray="631.330000" class="styles_num5Mask1__ARrDU"></path></mask></g><g><path d="M188.271000,20L178.697000,48L96.299800,48L89.675800,66.181800C118.265000,62.487900,153.826000,58.222100,184.601000,58.941300C204.321000,59.402200,223.933000,61.901300,239.068000,69.053100C246.812000,72.712700,253.951000,77.853800,259.150000,85.096100C264.456000,92.486500,267.149000,101.249000,267.149000,111C267.149000,139.151000,246.649000,156.855000,223.139000,166.611000C199.454000,176.439000,169.005000,180.124000,139.575000,179.180000C110.084000,178.234000,79.997400,172.587000,56.834700,162.421000C34.895800,152.792000,13.258900,136.222000,13.650200,110.785000L41.646900,111.215000C41.538300,118.278000,47.838900,127.895000,68.087500,136.782000C87.112300,145.132000,113.463000,150.328000,140.472000,151.195000C167.542000,152.063000,193.655000,148.530000,212.408000,140.749000C231.336000,132.895000,239.149000,122.599000,239.149000,111C239.149000,106.626000,238.024000,103.680000,236.405000,101.425000C234.680000,99.022500,231.787000,96.581600,227.105000,94.368800C217.385000,89.775800,202.560000,87.368700,183.947000,86.933700C152.982000,86.210100,116.673000,90.921200,86.929800,94.780300C81.126300,95.533300,75.572600,96.253900,70.357600,96.895300L47.669600,99.685800L76.700300,20L188.271000,20Z" fill="url(#hover-gradient-id)" stroke="none" stroke-width="1" class="styles_hoveredIcon__utVeP"></path></g></svg>
              </div>
            </a>
            <div class="top-10__swiper-slide__block-inner-1">
              <div class="top-10__swiper-slide__block-inner-2">
                <a href="{{ route('movies.show', ['kinopoiskId' => 5321393]) }}" class="top-10__swiper-slide__link-2">
                  <img class="top-10__swiper-slide__img" src="{{ asset('images/top-10__swiper-slide__img-5.jpg') }}" alt="">
                </a>
                <div class="top-10__swiper-slide__block-inner-3"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide top-10__swiper-slide">
          <div class="top-10__swiper-slide__block">
            <a class="top-10__swiper-slide__link-1" href="{{ route('movies.show', ['kinopoiskId' => 4370148]) }}">
              <div class="top-10__swiper-slide__link-1__block">
                <svg viewBox="0 0 280 196" class="top-10__swiper-slide__link-1__svg"><g id="num_6-masks_group" mask="url(#num_6-masks)"><path id="num_6-shape" d="M170.406000,14.514200C170.411000,14.514000,170.415000,14.513800,171,28.501600C171.585000,42.489300,171.589000,42.489200,171.591000,42.489100L171.566000,42.490200C171.533000,42.491700,171.476000,42.494400,171.394000,42.498600C171.230000,42.506800,170.968000,42.520700,170.613000,42.541800C169.902000,42.583800,168.822000,42.654300,167.415000,42.765000C164.600000,42.986500,160.489000,43.367900,155.434000,44.001900C145.292000,45.273700,131.501000,47.542900,116.811000,51.515600C102.357000,55.424300,87.949400,60.738100,75.373200,67.806100C103.937000,62.827100,137.022000,58.429500,167.265000,57.717900C191.938000,57.137400,216.262000,58.948700,234.927000,65.882600C244.378000,69.394000,253.237000,74.529700,259.802000,82.148600C266.597000,90.034500,270.250000,99.806800,270.250000,111.002000C270.250000,140.317000,245.411000,157.969000,219.662000,167.364000C192.847000,177.149000,158.550000,180.774000,126.289000,178.916000C94.273600,177.072000,61.931000,169.691000,39.922300,155.451000C28.781100,148.242000,19.261700,138.596000,14.712000,126.007000C10.030500,113.053000,11.351500,99.040400,18.132700,84.935400L18.332600,84.519700L18.559400,84.118100C37.878200,49.903800,77.884600,33.036600,109.502000,24.486500C125.780000,20.084300,140.911000,17.603800,151.949000,16.219500C157.484000,15.525500,162.027000,15.102400,165.219000,14.851300C166.816000,14.725700,168.077000,14.642900,168.957000,14.590700C169.397000,14.564700,169.743000,14.546200,169.987000,14.533900C170.110000,14.527800,170.207000,14.523100,170.278000,14.519800L170.366000,14.515900L170.406000,14.514200ZM41.027100,103.065000C73.604200,95.983400,124.369000,86.735000,167.923000,85.710200C191.594000,85.153200,211.598000,87.085700,225.176000,92.129900C231.845000,94.607500,236.086000,97.519500,238.590000,100.426000C240.865000,103.066000,242.250000,106.296000,242.250000,111.002000C242.250000,121.437000,233.434000,132.534000,210.065000,141.061000C187.763000,149.198000,157.481000,152.666000,127.899000,150.962000C98.070400,149.244000,71.303600,142.406000,55.132700,131.943000C47.184000,126.800000,42.846100,121.473000,41.045200,116.490000C39.790700,113.019000,39.386100,108.678000,41.027100,103.065000Z" fill="url(#active-gradient-id)" fill-rule="evenodd" stroke="none" stroke-width="1"></path><mask id="num_6-masks" mask-type="luminance"><path id="num_6-mask_1" d="M171,28.501500C171,28.501500,63.500200,33,30.750200,91.001500C-13.000100,182.001000,256.250000,190.501000,256.250000,111.001000C256.250000,47.647400,96.244800,76.277800,31.500000,90.832600" fill="none" stroke="rgb(255,255,255)" stroke-width="28" stroke-dashoffset="2106.33" stroke-dasharray="702.110000" class="styles_num6Mask1__BlC3t"></path></mask></g><g><path d="M170.406000,14.514200C170.411000,14.514000,170.415000,14.513800,171,28.501600C171.585000,42.489300,171.589000,42.489200,171.591000,42.489100L171.566000,42.490200C171.533000,42.491700,171.476000,42.494400,171.394000,42.498600C171.230000,42.506800,170.968000,42.520700,170.613000,42.541800C169.902000,42.583800,168.822000,42.654300,167.415000,42.765000C164.600000,42.986500,160.489000,43.367900,155.434000,44.001900C145.292000,45.273700,131.501000,47.542900,116.811000,51.515600C102.357000,55.424300,87.949400,60.738100,75.373200,67.806100C103.937000,62.827100,137.022000,58.429500,167.265000,57.717900C191.938000,57.137400,216.262000,58.948700,234.927000,65.882600C244.378000,69.394000,253.237000,74.529700,259.802000,82.148600C266.597000,90.034500,270.250000,99.806800,270.250000,111.002000C270.250000,140.317000,245.411000,157.969000,219.662000,167.364000C192.847000,177.149000,158.550000,180.774000,126.289000,178.916000C94.273600,177.072000,61.931000,169.691000,39.922300,155.451000C28.781100,148.242000,19.261700,138.596000,14.712000,126.007000C10.030500,113.053000,11.351500,99.040400,18.132700,84.935400L18.332600,84.519700L18.559400,84.118100C37.878200,49.903800,77.884600,33.036600,109.502000,24.486500C125.780000,20.084300,140.911000,17.603800,151.949000,16.219500C157.484000,15.525500,162.027000,15.102400,165.219000,14.851300C166.816000,14.725700,168.077000,14.642900,168.957000,14.590700C169.397000,14.564700,169.743000,14.546200,169.987000,14.533900C170.110000,14.527800,170.207000,14.523100,170.278000,14.519800L170.366000,14.515900L170.406000,14.514200ZM41.027100,103.065000C73.604200,95.983400,124.369000,86.735000,167.923000,85.710200C191.594000,85.153200,211.598000,87.085700,225.176000,92.129900C231.845000,94.607500,236.086000,97.519500,238.590000,100.426000C240.865000,103.066000,242.250000,106.296000,242.250000,111.002000C242.250000,121.437000,233.434000,132.534000,210.065000,141.061000C187.763000,149.198000,157.481000,152.666000,127.899000,150.962000C98.070400,149.244000,71.303600,142.406000,55.132700,131.943000C47.184000,126.800000,42.846100,121.473000,41.045200,116.490000C39.790700,113.019000,39.386100,108.678000,41.027100,103.065000Z" fill="url(#hover-gradient-id)" fill-rule="evenodd" stroke="none" stroke-width="1" class="styles_hoveredIcon__utVeP"></path></g></svg>
              </div>
            </a>
            <div class="top-10__swiper-slide__block-inner-1">
              <div class="top-10__swiper-slide__block-inner-2">
                <a href="{{ route('movies.show', ['kinopoiskId' => 4370148]) }}" class="top-10__swiper-slide__link-2">
                  <img class="top-10__swiper-slide__img" src="{{ asset('images/top-10__swiper-slide__img-6.jpg') }}" alt="">
                </a>
                <div class="top-10__swiper-slide__block-inner-3"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide top-10__swiper-slide">
          <div class="top-10__swiper-slide__block">
            <a class="top-10__swiper-slide__link-1" href="{{ route('movies.show', ['kinopoiskId' => 1311129]) }}">
              <div class="top-10__swiper-slide__link-1__block">
                <svg viewBox="0 0 280 196" class="top-10__swiper-slide__link-1__svg"><g id="num_7-masks_group" mask="url(#num_7-masks)"><path id="num_7-shape" d="M29.300000,48L39.096700,20L263.788000,20L239.267000,89.475800L230.508000,90.418600L230.505000,90.418900L230.498000,90.419600L230.458000,90.424100C230.410000,90.429500,230.329000,90.438800,230.215000,90.452100C229.986000,90.478800,229.628000,90.521900,229.148000,90.582900C228.187000,90.704900,226.742000,90.898700,224.880000,91.176600C221.154000,91.732900,215.779000,92.624200,209.310000,93.949500C196.313000,96.612000,179.174000,100.971000,162.192000,107.752000C126.769000,121.896000,99.000100,143.524000,99.000100,176L71.000100,176C71.000100,124.476000,115.231000,96.353900,151.808000,81.748200C170.826000,74.154200,189.687000,69.388000,203.690000,66.519200C209.601000,65.308400,214.695000,64.425700,218.634000,63.807100L224.213000,48L29.300000,48Z" fill="url(#active-gradient-id)" fill-rule="evenodd" stroke="none" stroke-width="1"></path><mask id="num_7-masks" mask-type="luminance"><path id="num_7-mask_1" d="M24.000100,34L244,34L229,76.500000C229,76.500000,85.000200,92,85.000200,176" fill="none" stroke="rgb(255,255,255)" stroke-width="28" stroke-dashoffset="1365.72" stroke-dasharray="455.240000" class="styles_num7Mask1__XfDtr"></path></mask></g><g><path d="M29.300000,48L39.096700,20L263.788000,20L239.267000,89.475800L230.508000,90.418600L230.505000,90.418900L230.498000,90.419600L230.458000,90.424100C230.410000,90.429500,230.329000,90.438800,230.215000,90.452100C229.986000,90.478800,229.628000,90.521900,229.148000,90.582900C228.187000,90.704900,226.742000,90.898700,224.880000,91.176600C221.154000,91.732900,215.779000,92.624200,209.310000,93.949500C196.313000,96.612000,179.174000,100.971000,162.192000,107.752000C126.769000,121.896000,99.000100,143.524000,99.000100,176L71.000100,176C71.000100,124.476000,115.231000,96.353900,151.808000,81.748200C170.826000,74.154200,189.687000,69.388000,203.690000,66.519200C209.601000,65.308400,214.695000,64.425700,218.634000,63.807100L224.213000,48L29.300000,48Z" fill="url(#hover-gradient-id)" fill-rule="evenodd" stroke="none" stroke-width="1" class="styles_hoveredIcon__utVeP"></path></g></svg>
              </div>
            </a>
            <div class="top-10__swiper-slide__block-inner-1">
              <div class="top-10__swiper-slide__block-inner-2">
                <a href="{{ route('movies.show', ['kinopoiskId' => 1311129]) }}" class="top-10__swiper-slide__link-2">
                  <img class="top-10__swiper-slide__img" src="{{ asset('images/top-10__swiper-slide__img-7.jpg') }}" alt="">
                </a>
                <div class="top-10__swiper-slide__block-inner-3"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide top-10__swiper-slide">
          <div class="top-10__swiper-slide__block">
            <a class="top-10__swiper-slide__link-1" href="{{ route('movies.show', ['kinopoiskId' => 4965334]) }}">
              <div class="top-10__swiper-slide__link-1__block">
                <svg viewBox="0 0 280 196" class="top-10__swiper-slide__link-1__svg"><g id="num_8-masks_group" mask="url(#num_8-masks)"><path id="num_8-shape" d="M110.900000,26C125.900000,19.200000,144.900000,15,164.500000,14.300000C184.100000,13.500000,202,16.300000,215,22C221.500000,24.800000,227.400000,28.600000,231.500000,33.600000C235.700000,38.700000,238.500000,45.600000,237.200000,54C235.900000,62.500000,230.800000,69.700000,224.900000,75.100000C222.900000,76.900000,220.800000,78.600000,218.600000,80.200000C221.200000,81,223.800000,81.800000,226.200000,82.700000C236,86.400000,244.600000,91.200000,250.600000,97.400000C256.600000,103.600000,260.900000,112.200000,259.200000,123C257.500000,133.800000,250.500000,142.800000,242.400000,149.600000C234.300000,156.400000,224.100000,161.900000,213,166.400000C190.700000,175.400000,161.900000,181.300000,131.600000,182.500000C101.300000,183.700000,74,180,54.300000,172.600000C44.500000,168.900000,35.900000,164.100000,29.900000,157.900000C23.900000,151.700000,19.600000,143.100000,21.300000,132.300000C23,121.500000,30,112.500000,38.100000,105.700000C46.200000,98.900000,56.400000,93.400000,67.500000,88.900000C73.200000,86.600000,79.300000,84.500000,85.700000,82.600000C85,81.900000,84.400000,81.300000,83.800000,80.500000C79.600000,75.400000,76.800000,68.500000,78.100000,60.100000C79.400000,51.600000,84.500000,44.400000,90.400000,39C96.200000,33.700000,103.400000,29.400000,110.900000,26ZM153,72.700000C151.600000,72.700000,150.300000,72.800000,148.900000,72.800000C148.700000,72.800000,148.500000,72.800000,148.300000,72.800000C123,73.300000,104.300000,68,105.400000,60.200000C106.600000,51.600000,130.900000,43.300000,159.900000,41.500000C188.800000,39.700000,211.300000,45.200000,210.100000,53.800000C208.900000,62.400000,184.600000,70.700000,155.600000,72.500000C154.700000,72.700000,153.900000,72.700000,153,72.700000ZM231.900000,123.200000C229.700000,138.300000,186.800000,152.500000,136.200000,155C85.600000,157.500000,46.400000,147.300000,48.600000,132.200000C50.800000,117.100000,93.700000,102.900000,144.300000,100.400000C194.900000,97.900000,234.100000,108.100000,231.900000,123.200000Z" fill="url(#active-gradient-id)" fill-rule="evenodd" stroke="none" stroke-width="1"></path><mask id="num_8-masks" mask-type="luminance"><path id="num_8-mask_1" d="M162.300000,28.100000C126.100000,29.400000,94.700000,45.700000,92.200000,61.700000C89.700000,77.700000,119.600000,87.900000,155.800000,86.500000L155.800000,86.500000C209,86.100000,248.600000,100.200000,245.200000,121.600000C241.600000,144.200000,191.700000,166.400000,133.700000,168.700000C75.700000,171,31.600000,156.500000,35.200000,133.800000C38.800000,111.200000,88.700000,88.900000,146.700000,86.700000L146.700000,86.700000C182.900000,85.300000,220.900000,69.800000,223.200000,52.500000C225.900000,35.600000,198.200000,26.800000,162.300000,28.100000Z" fill="none" stroke="rgb(255,255,255)" stroke-width="28" stroke-dashoffset="2370.78" stroke-dasharray="790.260000" class="styles_num8Mask1__zr8c8"></path></mask></g><g><path d="M110.900000,26C125.900000,19.200000,144.900000,15,164.500000,14.300000C184.100000,13.500000,202,16.300000,215,22C221.500000,24.800000,227.400000,28.600000,231.500000,33.600000C235.700000,38.700000,238.500000,45.600000,237.200000,54C235.900000,62.500000,230.800000,69.700000,224.900000,75.100000C222.900000,76.900000,220.800000,78.600000,218.600000,80.200000C221.200000,81,223.800000,81.800000,226.200000,82.700000C236,86.400000,244.600000,91.200000,250.600000,97.400000C256.600000,103.600000,260.900000,112.200000,259.200000,123C257.500000,133.800000,250.500000,142.800000,242.400000,149.600000C234.300000,156.400000,224.100000,161.900000,213,166.400000C190.700000,175.400000,161.900000,181.300000,131.600000,182.500000C101.300000,183.700000,74,180,54.300000,172.600000C44.500000,168.900000,35.900000,164.100000,29.900000,157.900000C23.900000,151.700000,19.600000,143.100000,21.300000,132.300000C23,121.500000,30,112.500000,38.100000,105.700000C46.200000,98.900000,56.400000,93.400000,67.500000,88.900000C73.200000,86.600000,79.300000,84.500000,85.700000,82.600000C85,81.900000,84.400000,81.300000,83.800000,80.500000C79.600000,75.400000,76.800000,68.500000,78.100000,60.100000C79.400000,51.600000,84.500000,44.400000,90.400000,39C96.200000,33.700000,103.400000,29.400000,110.900000,26ZM153,72.700000C151.600000,72.700000,150.300000,72.800000,148.900000,72.800000C148.700000,72.800000,148.500000,72.800000,148.300000,72.800000C123,73.300000,104.300000,68,105.400000,60.200000C106.600000,51.600000,130.900000,43.300000,159.900000,41.500000C188.800000,39.700000,211.300000,45.200000,210.100000,53.800000C208.900000,62.400000,184.600000,70.700000,155.600000,72.500000C154.700000,72.700000,153.900000,72.700000,153,72.700000ZM231.900000,123.200000C229.700000,138.300000,186.800000,152.500000,136.200000,155C85.600000,157.500000,46.400000,147.300000,48.600000,132.200000C50.800000,117.100000,93.700000,102.900000,144.300000,100.400000C194.900000,97.900000,234.100000,108.100000,231.900000,123.200000Z" fill="url(#hover-gradient-id)" fill-rule="evenodd" stroke="none" stroke-width="1" class="styles_hoveredIcon__utVeP"></path></g></svg>
              </div>
            </a>
            <div class="top-10__swiper-slide__block-inner-1">
              <div class="top-10__swiper-slide__block-inner-2">
                <a href="{{ route('movies.show', ['kinopoiskId' => 4965334]) }}" class="top-10__swiper-slide__link-2">
                  <img class="top-10__swiper-slide__img" src="{{ asset('images/top-10__swiper-slide__img-8.jpg') }}" alt="">
                </a>
                <div class="top-10__swiper-slide__block-inner-3"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide top-10__swiper-slide">
          <div class="top-10__swiper-slide__block">
            <a class="top-10__swiper-slide__link-1" href="{{ route('movies.show', ['kinopoiskId' => 4527915]) }}">
              <div class="top-10__swiper-slide__link-1__block">
                <svg viewBox="0 0 280 196" class="top-10__swiper-slide__link-1__svg"><g id="num_9-masks_group" mask="url(#num_9-masks)"><path id="num_9-shape" d="M249.800000,116.100000L203,195.100000L179,180.900000L206.400000,134.600000C178.600000,141.900000,144.200000,147.200000,112.700000,147.900000C88.500000,148.400000,64.400000,146.100000,45.800000,138.800000C36.400000,135.100000,27.600000,129.700000,21.100000,122C14.400000,114.100000,10.700000,104.300000,10.700000,93C10.700000,64.400000,34.400000,45.100000,59.800000,33.500000C86.200000,21.500000,120,14.900000,152.100000,14.100000C183.900000,13.200000,216.200000,17.900000,238.700000,30.400000C250.100000,36.800000,260,45.800000,265,58.200000C270.100000,70.900000,269.200000,85,263.100000,99.400000L237.300000,88.500000C241.200000,79.200000,240.800000,73,239,68.600000C237.100000,64,232.900000,59.200000,225,54.800000C208.900000,45.800000,182.400000,41.200000,152.800000,42C123.500000,42.800000,93.500000,48.800000,71.300000,58.900000C48.200000,69.600000,38.700000,81.900000,38.700000,93C38.700000,97.700000,40.100000,101.100000,42.500000,103.900000C45.100000,107,49.400000,110.100000,56.100000,112.700000C69.600000,118,89.300000,120.300000,112.100000,119.900000C157.700000,119,208.800000,107.300000,231.700000,96.400000L249.800000,116.100000Z" fill="url(#active-gradient-id)" fill-rule="evenodd" stroke="none" stroke-width="1"></path><mask id="num_9-masks" mask-type="luminance"><path id="num_9-mask_1" d="M250.200000,94C290.200000,-1,24.700000,13.500000,24.700000,93C24.700000,156.600000,187.500000,133,237.700000,109L191,188" fill="none" stroke="rgb(255,255,255)" stroke-width="28" stroke-linejoin="bevel" stroke-dashoffset="1875.06" stroke-dasharray="625.020000" class="styles_num9Mask1__r0m0d"></path></mask></g><g><path d="M249.800000,116.100000L203,195.100000L179,180.900000L206.400000,134.600000C178.600000,141.900000,144.200000,147.200000,112.700000,147.900000C88.500000,148.400000,64.400000,146.100000,45.800000,138.800000C36.400000,135.100000,27.600000,129.700000,21.100000,122C14.400000,114.100000,10.700000,104.300000,10.700000,93C10.700000,64.400000,34.400000,45.100000,59.800000,33.500000C86.200000,21.500000,120,14.900000,152.100000,14.100000C183.900000,13.200000,216.200000,17.900000,238.700000,30.400000C250.100000,36.800000,260,45.800000,265,58.200000C270.100000,70.900000,269.200000,85,263.100000,99.400000L237.300000,88.500000C241.200000,79.200000,240.800000,73,239,68.600000C237.100000,64,232.900000,59.200000,225,54.800000C208.900000,45.800000,182.400000,41.200000,152.800000,42C123.500000,42.800000,93.500000,48.800000,71.300000,58.900000C48.200000,69.600000,38.700000,81.900000,38.700000,93C38.700000,97.700000,40.100000,101.100000,42.500000,103.900000C45.100000,107,49.400000,110.100000,56.100000,112.700000C69.600000,118,89.300000,120.300000,112.100000,119.900000C157.700000,119,208.800000,107.300000,231.700000,96.400000L249.800000,116.100000Z" fill="url(#hover-gradient-id)" fill-rule="evenodd" stroke="none" stroke-width="1" class="styles_hoveredIcon__utVeP"></path></g></svg>
              </div>
            </a>
            <div class="top-10__swiper-slide__block-inner-1">
              <div class="top-10__swiper-slide__block-inner-2">
                <a href="{{ route('movies.show', ['kinopoiskId' => 4527915]) }}" class="top-10__swiper-slide__link-2">
                  <img class="top-10__swiper-slide__img" src="{{ asset('images/top-10__swiper-slide__img-9.jpg') }}" alt="">
                </a>
                <div class="top-10__swiper-slide__block-inner-3"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide top-10__swiper-slide">
          <div class="top-10__swiper-slide__block">
            <a class="top-10__swiper-slide__link-1" href="{{ route('movies.show', ['kinopoiskId' => 1392743]) }}">
              <div class="top-10__swiper-slide__link-1__block">
                <svg viewBox="0 0 187 122" class="top-10__swiper-slide__link-1__svg extra" data-tid="92f378ba"><g><path d="M129.685 0.146476C94.0171 1.54002 59.5378 29.2437 54.0776 63.5248C48.6174 97.8059 74.6481 123.145 110.316 121.752C145.984 120.358 180.463 92.6546 185.923 58.3736C191.384 24.0925 165.353 -1.24707 129.685 0.146476ZM74.4619 62.7284C77.9364 40.9142 100.603 21.194 126.494 20.1824C152.384 19.1709 169.014 37.3558 165.539 59.17C162.065 80.9842 139.398 100.704 113.507 101.716C87.6167 102.727 70.9874 84.5426 74.4619 62.7284Z" fill="url(#active-gradient-id)" fill-rule="evenodd" stroke="none" stroke-width="1"></path><path d="M32.5688 24.7755H19.9768V4.48979H61.2992L21.6155 117.51H0.0078125L32.5688 24.7755Z" fill="url(#active-gradient-id)" fill-rule="evenodd" stroke="none" stroke-width="1"></path></g><g><path d="M129.685 0.146476C94.0171 1.54002 59.5378 29.2437 54.0776 63.5248C48.6174 97.8059 74.6481 123.145 110.316 121.752C145.984 120.358 180.463 92.6546 185.923 58.3736C191.384 24.0925 165.353 -1.24707 129.685 0.146476ZM74.4619 62.7284C77.9364 40.9142 100.603 21.194 126.494 20.1824C152.384 19.1709 169.014 37.3558 165.539 59.17C162.065 80.9842 139.398 100.704 113.507 101.716C87.6167 102.727 70.9874 84.5426 74.4619 62.7284Z" fill="url(#hover-gradient-id)" fill-rule="evenodd" stroke="none" stroke-width="1" class="styles_hoveredIcon__utVeP"></path><path d="M32.5688 24.7755H19.9768V4.48979H61.2992L21.6155 117.51H0.0078125L32.5688 24.7755Z" fill="url(#hover-gradient-id)" fill-rule="evenodd" stroke="none" stroke-width="1" class="styles_hoveredIcon__utVeP"></path></g></svg>
              </div>
            </a>
            <div class="top-10__swiper-slide__block-inner-1">
              <div class="top-10__swiper-slide__block-inner-2">
                <a href="{{ route('movies.show', ['kinopoiskId' => 1392743]) }}" class="top-10__swiper-slide__link-2">
                  <img class="top-10__swiper-slide__img" src="{{ asset('images/top-10__swiper-slide__img-10.jpg') }}" alt="">
                </a>
                <div class="top-10__swiper-slide__block-inner-3"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button aria-label="Переключение слайдера вперед" class="swiper-button-next top-10__swiper-button-next swiper-nav-btn btn-reset">
      <svg width="50" height="50" viewbox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="path-1" d="M25 2.72191e-06C38.8071 2.11838e-06 50 11.1929 50 25C50 38.8071 38.8071 50 25 50C11.1929 50 -4.89256e-07 38.8071 -1.09278e-06 25C-1.69631e-06 11.1929 11.1929 3.32544e-06 25 2.72191e-06Z" fill="none"/>
        <path d="M25 2.72191e-06C38.8071 2.11838e-06 50 11.1929 50 25C50 38.8071 38.8071 50 25 50C11.1929 50 -4.89256e-07 38.8071 -1.09278e-06 25C-1.69631e-06 11.1929 11.1929 3.32544e-06 25 2.72191e-06Z" stroke="none"/>
        <path class="path-2" d="M23.3333 16.6667L31.6667 25L23.3333 33.3333" stroke="none"/>
      </svg>
    </button>
    <button aria-label="Переключение слайдера назад" class="swiper-button-prev top-10__swiper-button-prev swiper-nav-btn btn-reset">
      <svg width="50" height="50" viewbox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="path-1" d="M15 30C6.71573 30 8.89561e-07 23.2843 1.25168e-06 15C1.61379e-06 6.71573 6.71573 -1.01779e-06 15 -6.55671e-07C23.2843 -2.93554e-07 30 6.71573 30 15C30 23.2843 23.2843 30 15 30Z" fill="none"/>
        <path d="M15 30C6.71573 30 8.89561e-07 23.2843 1.25168e-06 15C1.61379e-06 6.71573 6.71573 -1.01779e-06 15 -6.55671e-07C23.2843 -2.93554e-07 30 6.71573 30 15C30 23.2843 23.2843 30 15 30Z" stroke="none"/>
        <path class="path-2" d="M16 20L11 15L16 10" stroke="none"/>
      </svg>
    </button>
  </section>
  <section class="releases">
    <h2 class="releases__title">Календарь релизов</h2>
    <h3 class="releases__subtitle">
      <a href="{{ route('expected.movies') }}" class="releases__link">
        Скоро в кино
      </a>
    </h3>
    <div class="movies-layout">
      <div class="movies-column">
          @foreach ($movies as $index => $movie)
              @if ($index < 5)
                 @php
                    $isAdded = \App\Models\WatchLater::where('user_id', Auth::id())
                      ->where('movie_id', $movie['kinopoiskId'] ?? $movie['filmId'])
                      ->exists();
                  @endphp
                  <div class="movie-item">
                      <div class="movie-rank">{{ $index + 1 }}.</div>
                      <a href="{{ route('movies.show', ['kinopoiskId' => $movie['kinopoiskId'] ?? $movie['filmId'] ?? $movie->movie_id]) }}" class="movie-image">
                        <img src="{{ $movie['posterUrlPreview'] }}" alt="Poster">
                      </a>
                      <a href="{{ route('movies.show', ['kinopoiskId' => $movie['kinopoiskId'] ?? $movie['filmId'] ?? $movie->movie_id]) }}" class="movie-text">
                        <span class="movie-title">{{ $movie['nameRu'] }}</span>
                        @if (isset($movie['nameEn']))
                          <span class="movie-subtitle">
                            {{ $movie['nameEn'] }}
                          </span>
                        @endif
                      </a>
                      <div class="movie-date">
                        <span class="movie-date__num">
                          {{ \Carbon\Carbon::parse($movie['premiereRu'])->locale('ru')->isoFormat('D') }}
                        </span>
                        <span class="movie-date__month">
                          {{ \Carbon\Carbon::parse($movie['premiereRu'])->locale('ru')->isoFormat('MMMM') }}
                        </span>
                      </div>
                      @auth
                        <div>
                          <form action="{{ route('watch-later.toggle') }}" method="POST">
                            @csrf
                            <input type="hidden" name="movie_id" value="{{ $movie['kinopoiskId'] ?? $movie['filmId'] }}">
                            <input type="hidden" name="name_ru" value="{{ $movie['nameRu'] ?? '' }}">
                            <input type="hidden" name="name_original" value="{{ $movie['nameOriginal'] ?? $movie['nameEn'] ?? '' }}">
                            <input type="hidden" name="country" value="{{ $movie['countries'][0]["country"] ?? '' }}">
                            <input type="hidden" name="genre" value="{{ $movie['genres'][0]["genre"] ?? '' }}">
                            <input type="hidden" name="year" value="{{ \Carbon\Carbon::parse($movie['premiereRu'])->locale('ru')->isoFormat('YYYY') ?? '' }}">
                            <input type="hidden" name="rating_kinopoisk" value="{{ $movie['ratingKinopoisk'] ?? '' }}">
                            <input type="hidden" name="poster_url_preview" value="{{ $movie['posterUrlPreview'] ?? '' }}">
                            <button type="submit" class="btn-reset movie-card__btn-later {{ $isAdded ? 'added-style' : '' }}">
                              @if ($isAdded)
                                <span class="movie-card__btn-icon added"></span>
                              @else
                                <span class="movie-card__btn-icon "></span>
                              @endif
                            </button>
                          </form>
                        </div>
                      @endauth
                  </div>
              @endif
          @endforeach
      </div>
      <div class="movies-column">
          @foreach ($movies as $index => $movie)
              @if ($index >= 5 && $index < 10)
                  @php
                    $isAdded = \App\Models\WatchLater::where('user_id', Auth::id())
                      ->where('movie_id', $movie['kinopoiskId'] ?? $movie['filmId'])
                      ->exists();
                  @endphp
                  <div class="movie-item">
                      <div class="movie-rank">{{ $index + 1 }}.</div>
                      <a href="{{ route('movies.show', ['kinopoiskId' => $movie['kinopoiskId'] ?? $movie['filmId'] ?? $movie->movie_id]) }}" class="movie-image">
                          <img src="{{ $movie['posterUrlPreview'] }}" alt="Poster">
                      </a>
                      <a href="{{ route('movies.show', ['kinopoiskId' => $movie['kinopoiskId'] ?? $movie['filmId'] ?? $movie->movie_id]) }}" class="movie-text">
                        <span class="movie-title">{{ $movie['nameRu'] }}</span>
                        @if (isset($movie['nameEn']))
                          <span class="movie-subtitle">
                            {{ $movie['nameEn'] }}
                          </span>
                        @endif
                      </a>
                      <div class="movie-date">
                        <span class="movie-date__num">
                          {{ \Carbon\Carbon::parse($movie['premiereRu'])->locale('ru')->isoFormat('D') }}
                        </span>
                        <span class="movie-date__month">
                          {{ \Carbon\Carbon::parse($movie['premiereRu'])->locale('ru')->isoFormat('MMMM') }}
                        </span>
                      </div>
                      @auth
                        <div>
                          <form action="{{ route('watch-later.toggle') }}" method="POST">
                            @csrf
                            <input type="hidden" name="movie_id" value="{{ $movie['kinopoiskId'] }}">
                            <input type="hidden" name="name_ru" value="{{ $movie['nameRu'] ?? '' }}">
                            <input type="hidden" name="name_original" value="{{ $movie['nameOriginal'] ?? $movie['nameEn'] ?? '' }}">
                            <input type="hidden" name="country" value="{{ $movie['countries'][0]["country"] ?? '' }}">
                            <input type="hidden" name="genre" value="{{ $movie['genres'][0]["genre"] ?? '' }}">
                            <input type="hidden" name="year" value="{{ \Carbon\Carbon::parse($movie['premiereRu'])->locale('ru')->isoFormat('YYYY') ?? '' }}">
                            <input type="hidden" name="rating_kinopoisk" value="{{ $movie['ratingKinopoisk'] ?? '' }}">
                            <input type="hidden" name="poster_url_preview" value="{{ $movie['posterUrlPreview'] ?? '' }}">
                            <button type="submit" class="btn-reset movie-card__btn-later {{ $isAdded ? 'added' : '' }}">
                              @if ($isAdded)
                                <span class="movie-card__btn-icon added"></span>
                              @else
                                <span class="movie-card__btn-icon "></span>
                              @endif
                            </button>
                          </form>
                        </div>
                      @endauth
                  </div>
              @endif
          @endforeach
      </div>
    </div>
  </section>
@endsection
