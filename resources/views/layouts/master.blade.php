<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('meta_title') - Addis</title>
    <meta name="description" content="@yield('meta_description')" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600;800&display=swap" rel="stylesheet">
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="stylesheet" href="{{ asset('css/respi.css') }}">
    <script type="text/javascript" src="{{ asset('js/min.js') }}"></script>



    @yield('includes')
</head>
<body>


        <div class="container-all" style="    box-shadow: 0 2px 40px rgb(0 0 0 / 8%);
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1;
    background-color: #fff;">

            <div class="row">
                <div class="navbar-header">
                    <div class="col-10-m">
                            <div class="logo" style="width:10rem;">
                                <a href="{{ route('home') }}">
                                    <img src="\img\addis.svg" alt="tt">

                                </a>
                            </div>
                    </div>
                    <div class="col-2-m">
                    @include('layouts.menu')
                    </div>
                </div>
            </div>

        </div>
    @yield('content')
    @yield('js')
</body>

<footer>
    <script>
        function toggleMenu() {
            const navbar = document.querySelector('.navbar');
            const burger = document.querySelector('.burger');
            burger.addEventListener('click', (e) => {
                navbar.classList.toggle('show-nav');
            });
        }
        toggleMenu();
    </script>

    <div class="container-all" id="footer">
        <div class="row">

          <div class="container fp">
              <div class="row">
                  <div class="col-2 col-3-t col-4-m fp">
                      <div class="left-footer">
                          <img src="/img/logo-white.png" alt="">
                      </div>
                  </div>
                  <div class="col-6 col-6-t col-4-m fp">
                      <div class="center-footer">
                      </div>
                  </div>
                  <div class="col-4 col-3-t col-4-m fp">
                      <div class="right-footer">
                            <ul>
                                <li><a href="#">Contact</a></li>
                                <li><a href="{{ route('login') }}">Connexion</a></li>
                                <li><a href="{{ route('register') }}">Inscription</a></li>
                                <li><a href="#">CGV</a></li>
                                <li><a href="#">CGU</a></li>
                                <li><a href="#">Mentions légales</a></li>
                            </ul>
                      </div>
                  </div>

              </div>
          </div>

            </div>
        <div class="copyright fp">
            <p>Copyright 2021 © All rights Reserved. Réalisation <a href="">Alexandre Solymos</a>
            </p>
        </div>

    </div>
</footer>
</html>
