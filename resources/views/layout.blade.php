<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кинопоиск</title>
    <link href="https://db.onlinewebfonts.com/c/a1750a4dae8db954fdd595f313b3b34e?family=Graphik+Kinopoisk+LC+Web+SB+Regular" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/media.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    @yield('css')
</head>
<body>
    <header class="site-header">
        <div class="header-container">
          <div class="header-container__logo">
            <div class="header-container__burger flex">
              <div class="header-container__burger-block active">
                <button class="burger__btn btn-reset">
                  <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M21 7.102H3v-2.4h18v2.4Zm0 6H3v-2.4h18v2.4Zm0 6H3v-2.4h18v2.4Z" fill="#999999"></path></svg>
                </button>
                <div class="burger-block">
                  <nav class="burger-nav">
                    <ul class="list-reset">
                        <li class="nav__item">
                          <a href="{{ route('main') }}" class="{{ request()->is('main') ? 'active-route' : '' }} flex nav__link">
                            <svg class="nav__svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="m12 5.634 6.6 4.4V19.1h-4.35V13h-4.5v6.1H5.4v-9.066l6.6-4.4ZM9.75 21.5H3V8.75l9-6 9 6V21.5H9.75Z" fill="none"/></svg>
                            Главная
                          </a>
                        </li>
                        <li class="nav__item">
                          <a href="{{ route('movies') }}" class="{{ request()->routeIs(['movies', 'top.movies', 'vampire.movies']) ? 'active-route' : '' }} flex nav__link">
                            <svg class="nav__svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M19.1 7.9H4.9v9.2h14.2V7.9ZM4.9 5.5H2.5v14h19v-14H4.9Z" fill="none"/></svg>
                            Фильмы
                          </a>
                        </li>
                        <li class="nav__item">
                          <a href="{{ route('series') }}" class="{{ request()->is('series') ? 'active-route' : '' }} flex nav__link">
                            <svg class="nav__svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.9 7.9h9.7v9.2H3.9V7.9ZM1.5 5.5H16v14H1.5v-14Zm19.4 2.4h1.6V5.5h-4v14h4v-2.4h-1.6V7.9Z" fill="none"/></svg>
                            Сериалы
                          </a>
                        </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <a href="{{ route('main') }}" class="logo">
                <svg width="164" height="36" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M58.859 18c0-5.889 2.954-10.6 8.281-10.6 5.328 0 8.281 4.711 8.281 10.6 0 5.89-2.954 10.6-8.28 10.6-5.328 0-8.282-4.71-8.282-10.6Zm8.281 7.66c2.072 0 2.954-3.534 2.954-7.652 0-4.12-.889-7.652-2.954-7.652-2.065 0-2.954 3.533-2.954 7.652-.007 4.118.882 7.652 2.954 7.652ZM3.843 7.7v5.596h.294L7.98 7.7h5.32l-7.098 6.474.294.293L19.51 7.693v4.711L7.973 16.523v.292l11.537-1.028v4.419L7.973 19.178v.293l11.537 4.118v4.712L6.496 21.526l-.294.293 7.098 6.474H7.98l-3.843-5.596h-.294v5.596H0V7.686h3.843V7.7Zm19.23 0H28.1l-.294 12.363h.294L34.015 7.7h4.438v20.608h-5.026l.294-12.364h-.294L27.51 28.309h-4.438V7.7Zm23.955 0h-5.026v20.608h5.026v-9.13h4.137v9.13h5.026V7.7h-5.026v7.952h-4.137V7.7Zm45.25 0h-14.19v20.608h5.027V11.233h4.137v17.075h5.026V7.7Zm2.66 10.3c0-5.889 2.954-10.6 8.282-10.6 5.32 0 8.281 4.711 8.281 10.6 0 5.89-2.954 10.6-8.281 10.6-5.32 0-8.282-4.71-8.282-10.6Zm8.282 7.66c2.072 0 2.954-3.534 2.954-7.652 0-4.12-.889-7.652-2.954-7.652-2.072 0-2.954 3.533-2.954 7.652 0 4.118.882 7.652 2.954 7.652ZM119.187 7.7h-5.026v20.608h4.438l5.916-12.364h.294l-.294 12.364h5.026V7.7h-4.438l-5.916 12.363h-.294l.294-12.363Zm23.669 13.541 4.732.585c-.889 4.12-2.954 6.774-7.364 6.774-5.32 0-8.016-4.71-8.016-10.6 0-5.889 2.689-10.6 8.016-10.6 4.317 0 6.475 2.649 7.364 6.475l-4.732 1.177c-.294-2.063-1.155-4.71-2.632-4.71-1.771 0-2.689 3.533-2.689 7.651 0 4.09.918 7.652 2.689 7.652 1.449.015 2.33-2.341 2.632-4.404Zm11.83-13.54h-4.732v20.607h4.732v-9.13h.294l3.549 9.13H164l-5.177-10.6L163.849 7.7h-5.026l-3.843 9.13h-.294V7.7Z" fill="#fff"/></svg>
              </a>
            </div>
          </div>
          <div class="header-actions">
            <div class="header-actions__find-block-1">
              <div class="header-actions__find-block-2">
                <form class="header-actions__form" action="{{ route('search') }}" method="GET">
                  <div class="header-actions__form-block">
                      <input type="text" name="kp_query" class="header-actions__form-input" placeholder="Фильмы, сериалы, персоны" required="">
                      <button type="submit" class="header-actions__form-block__button">
                        <svg class="header-actions__form-block__svg" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M13.6667 8.74984C13.6667 11.4652 11.4654 13.6665 8.75002 13.6665C6.03462 13.6665 3.83335 11.4652 3.83335 8.74984C3.83335 6.03444 6.03462 3.83317 8.75002 3.83317C11.4654 3.83317 13.6667 6.03444 13.6667 8.74984ZM12.7965 14.5643C11.6494 15.3641 10.2545 15.8332 8.75002 15.8332C4.838 15.8332 1.66669 12.6619 1.66669 8.74984C1.66669 4.83782 4.838 1.6665 8.75002 1.6665C12.662 1.6665 15.8334 4.83782 15.8334 8.74984C15.8334 10.2544 15.3643 11.6494 14.5643 12.7966L17.9672 16.1994L16.1994 17.9672L12.7965 14.5643Z" fill="none"></path></svg>
                        Найти
                      </button>
                  </div>
                </form>
              </div>
            </div>
            @auth
              <a href="{{ route('watch-later') }}" class="header-actions__watch-later"></a>
              <button class="header-actions__profile dropdown">
                <div class="header-actions__profile-block">
                  <span class="header-actions__picture"></span>
                </div>
              </button>
              <div class="auth">
                <div class="auth__top">
                  @if(isset($loggedInUser))
                    <div class="auth__info">
                      <p class="auth__name">{{ $loggedInUser->name }}</p>
                      <p class="auth__mail">{{ $loggedInUser->email }}</p>
                    </div>
                  @endif
                  <button class="header-actions__profile">
                    <div class="header-actions__profile-block">
                      <span class="header-actions__picture"></span>
                    </div>
                  </button>
                </div>
                <ul class="auth__list">
                  <li class="auth__item">
                    <a href="{{ route('movies') }}" class="auth__link">
                      Фильмы
                    </a>
                  </li>
                  <li class="auth__item">
                    <a href="{{ route('series') }}" class="auth__link">
                      Сериалы
                    </a>
                  </li>
                  <li class="auth__item">
                    <form action="{{ route('logout') }}" method="POST">
                      @csrf
                      <button type="submit" class="auth__link btn-reset">Выйти</button>
                    </form>
                  </li>
                </ul>
              </div>
            @endauth

            @guest
              <a href="{{ route('login') }}" class="login-button">Войти</a>
            @endguest
          </div>
        </div>
    </header>

    <main>
      <section class="main-section">
        <div class="content-container">
          <aside class="{{ !request()->is('main') ? 'burger-route' : '' }} navigation">
              <nav>
                  <ul class="list-reset">
                      <li class="nav__item">
                        <a href="{{ route('main') }}" class="{{ request()->is('main') ? 'active-route' : '' }} flex nav__link">
                          <svg class="nav__svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="m12 5.634 6.6 4.4V19.1h-4.35V13h-4.5v6.1H5.4v-9.066l6.6-4.4ZM9.75 21.5H3V8.75l9-6 9 6V21.5H9.75Z" fill="none"/></svg>
                          Главная
                        </a>
                      </li>
                      <li class="nav__item">
                        <a href="{{ route('movies') }}" class="flex nav__link">
                          <svg class="nav__svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M19.1 7.9H4.9v9.2h14.2V7.9ZM4.9 5.5H2.5v14h19v-14H4.9Z" fill="none"/></svg>
                          Фильмы
                        </a>
                      </li>
                      <li class="nav__item">
                        <a href="{{ route('series') }}" class="flex nav__link">
                          <svg class="nav__svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.9 7.9h9.7v9.2H3.9V7.9ZM1.5 5.5H16v14H1.5v-14Zm19.4 2.4h1.6V5.5h-4v14h4v-2.4h-1.6V7.9Z" fill="none"/></svg>
                          Сериалы
                        </a>
                      </li>
                  </ul>
              </nav>
          </aside>
          <div class="content">
            @yield('content')
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="footer__main">
        <div class="footer__logo">
          <span class="footer__year">© 2003 — 2024,</span>
          <a href="" class="footer__text">Кинопоиск</a>
          <span class="footer__text age">18+</span>
        </div>
        <div class="footer__social">
          <a href="https://t.me/lazynx" class="footer__link">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="24px" height="24px" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M12.59 16.594l-2.593 2.423s-.203.157-.425.059l.497-4.5.017.013.01-.092s7.272-6.697 7.57-6.982c.298-.285.198-.346.198-.346.02-.346-.536 0-.536 0l-9.636 6.27-4.013-1.384s-.616-.224-.676-.713c-.06-.488.696-.753.696-.753l15.953-6.412s1.312-.59 1.312.387L18.123 19.24s-.398 1.018-1.49.53l-4.043-3.176z"/>
            </svg>
          </a>
          <a href="https://www.linkedin.com/in/lazynx/" class="footer__link">
            <svg width="24px" height="24px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#fff">
              <path fill="#fff" d="M12.225 12.225h-1.778V9.44c0-.664-.012-1.519-.925-1.519-.926 0-1.068.724-1.068 1.47v2.834H6.676V6.498h1.707v.783h.024c.348-.594.996-.95 1.684-.925 1.802 0 2.135 1.185 2.135 2.728l-.001 3.14zM4.67 5.715a1.037 1.037 0 01-1.032-1.031c0-.566.466-1.032 1.032-1.032.566 0 1.031.466 1.032 1.032 0 .566-.466 1.032-1.032 1.032zm.889 6.51h-1.78V6.498h1.78v5.727zM13.11 2H2.885A.88.88 0 002 2.866v10.268a.88.88 0 00.885.866h10.226a.882.882 0 00.889-.866V2.865a.88.88 0 00-.889-.864z"/>
            </svg>
          </a>
          <a href="https://github.com/Lazynx" class="footer__link">
            <svg width="24px" height="24px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                <title>github [#142]</title>
                <desc>Created with Sketch.</desc>
                <defs>

            </defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)" fill="#fff">
                        <g id="icons" transform="translate(56.000000, 160.000000)">
                            <path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]">

                    </path>
                        </g>
                    </g>
                </g>
            </svg>
          </a>
        </div>
        <div class="footer__me">
          Проект by Владислав
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="module" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
