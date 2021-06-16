<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('meta_title')</title>
    <meta name="description" content="@yield('meta_description')" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600;800&display=swap" rel="stylesheet">
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="stylesheet" href="{{ asset('css/respi.css') }}">
    <script type="text/javascript" src="{{ asset('js/min.js') }}"></script>



    @yield('includes')
</head>
<body>


        <div class="container-all">

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
</html>
