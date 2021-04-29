<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('meta_title')</title>
    <meta name="description" content="@yield('meta_description')" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600;700&display=swap"
          as="style" onload="this.rel='stylesheet'">
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="stylesheet" href="{{ asset('css/respi.css') }}">
    <script type="text/javascript" src="{{ asset('js/min.js') }}"></script>



    @yield('includes')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

<div class="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar w/ text</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            @include('layouts.menu')
            <span class="navbar-text">
      Navbar text with an inline element
    </span>
        </div>
    </nav>
    @yield('content')
    @yield('js')
</div>
</body>
</html>
