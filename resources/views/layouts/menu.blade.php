
    <nav class="navbar dark-mode" role="navigation">
        <div class="navbar__logo"><a href=""></a>
        </div>
        <ul class="navbar__links">
            <li class="navbar__link"><a href="{{ route('home') }}">Accueil</a></li>
            <li class="navbar__link"><a href="category.html">Services</a></li>
            <li class="navbar__link"><a href="#">Missions</a></li>
            <li class="navbar__link"><a href="#">Portfolio</a></li>
            @if (Auth::user())
                @if (Auth::user()->role === 'ADMIN')
                    <li class="navbarmark">
                        <a href="{{ route('admin.index') }}">Admin</a>
                    </li>
                @endif

                <li class="navbarmark">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn">Deconnexion</button>
                    </form>
                </li>
            @else

                <li class="navbarmark">
                    <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                    <a class="nav-link" href="{{ route('register') }}">inscription</a>

                </li>

            @endif
            <li class="navbarmark"><a href="#">Contact</a></li>
        </ul>
        <div class="burger">
            <span class="bar"></span>
        </div>
    </nav>



