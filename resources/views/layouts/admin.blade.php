<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/respi.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

<div onclick="MenuToggle()" id="menu-toggle" class="closed" data-title="Menu">
    <svg class="fa-menu" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.71689 5.72315C6.71581 6.18996 6.2827 7.37992 6.74951 8.381C7.21632 9.38208 8.40628 9.81519 9.40736 9.34838L20.2831 4.27696C21.2841 3.81015 21.7172 2.62019 21.2504 1.61911C20.7836 0.618028 19.5937 0.184918 18.5926 0.651729L7.71689 5.72315Z" fill="currentColor" /><path d="M4.74951 15.381C4.2827 14.3799 4.71581 13.19 5.71689 12.7231L16.5926 7.65173C17.5937 7.18492 18.7836 7.61803 19.2504 8.61911C19.7172 9.62019 19.2841 10.8101 18.2831 11.277L7.40736 16.3484C6.40628 16.8152 5.21632 16.3821 4.74951 15.381Z" fill="currentColor" /><path d="M2.74951 22.381C2.2827 21.3799 2.71581 20.19 3.71689 19.7231L14.5926 14.6517C15.5937 14.1849 16.7836 14.618 17.2504 15.6191C17.7172 16.6202 17.2841 17.8101 16.2831 18.277L5.40736 23.3484C4.40628 23.8152 3.21632 23.3821 2.74951 22.381Z" fill="currentColor" /></svg>
    <svg style="transform: rotate(-105deg);" class="fa-close" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.71689 5.72315C6.71581 6.18996 6.2827 7.37992 6.74951 8.381C7.21632 9.38208 8.40628 9.81519 9.40736 9.34838L20.2831 4.27696C21.2841 3.81015 21.7172 2.62019 21.2504 1.61911C20.7836 0.618028 19.5937 0.184918 18.5926 0.651729L7.71689 5.72315Z" fill="currentColor" /><path d="M4.74951 15.381C4.2827 14.3799 4.71581 13.19 5.71689 12.7231L16.5926 7.65173C17.5937 7.18492 18.7836 7.61803 19.2504 8.61911C19.7172 9.62019 19.2841 10.8101 18.2831 11.277L7.40736 16.3484C6.40628 16.8152 5.21632 16.3821 4.74951 15.381Z" fill="currentColor" /><path d="M2.74951 22.381C2.2827 21.3799 2.71581 20.19 3.71689 19.7231L14.5926 14.6517C15.5937 14.1849 16.7836 14.618 17.2504 15.6191C17.7172 16.6202 17.2841 17.8101 16.2831 18.277L5.40736 23.3484C4.40628 23.8152 3.21632 23.3821 2.74951 22.381Z" fill="currentColor" /></svg>
</div>
<header id="main-header">
    <div class="header_logo">
        <div class="logo" style="width:10rem;">
            <img src="img\addis.svg" alt="tt">
        </div>
    </div>

    <nav id="sidenav">




        <div class="sidenav-actions">
            @if (Auth::user())
                @if (Auth::user()->role === 'ADMIN')
                    <a href="{{ route('admin.index') }}" data-title="Admin"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8.77217L14.0208 1.79299C12.8492 0.621414 10.9497 0.621413 9.77817 1.79299L3 8.57116V23.0858H10V17.0858C10 15.9812 10.8954 15.0858 12 15.0858C13.1046 15.0858 14 15.9812 14 17.0858V23.0858H21V8.77217ZM11.1924 3.2072L5 9.39959V21.0858H8V17.0858C8 14.8767 9.79086 13.0858 12 13.0858C14.2091 13.0858 16 14.8767 16 17.0858V21.0858H19V9.6006L12.6066 3.2072C12.2161 2.81668 11.5829 2.81668 11.1924 3.2072Z" fill="currentColor" /></svg>
                    </a>
                @endif

                <a href="#" id="messages" data-title="Messages" data-newmessages="1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7ZM14 7C14 8.10457 13.1046 9 12 9C10.8954 9 10 8.10457 10 7C10 5.89543 10.8954 5 12 5C13.1046 5 14 5.89543 14 7Z" fill="currentColor" /><path d="M16 15C16 14.4477 15.5523 14 15 14H9C8.44772 14 8 14.4477 8 15V21H6V15C6 13.3431 7.34315 12 9 12H15C16.6569 12 18 13.3431 18 15V21H16V15Z" fill="currentColor" /></svg>
                </a>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn">Deconnexion</button>

                    <a href="#" data-title="Deconnexion">
                        <svg width="24"height="24" viewBox="0 0 24 24" fill="none"xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 4.00894C13.0002 3.45665 12.5527 3.00876 12.0004 3.00854C11.4481 3.00833 11.0002 3.45587 11 4.00815L10.9968 12.0116C10.9966 12.5639 11.4442 13.0118 11.9965 13.012C12.5487 13.0122 12.9966 12.5647 12.9968 12.0124L13 4.00894Z" fill="currentColor"/>
                            <path d="M4 12.9917C4 10.7826 4.89541 8.7826 6.34308 7.33488L7.7573 8.7491C6.67155 9.83488 6 11.3349 6 12.9917C6 16.3054 8.68629 18.9917 12 18.9917C15.3137 18.9917 18 16.3054 18 12.9917C18 11.3348 17.3284 9.83482 16.2426 8.74903L17.6568 7.33481C19.1046 8.78253 20 10.7825 20 12.9917C20 17.41 16.4183 20.9917 12 20.9917C7.58172 20.9917 4 17.41 4 12.9917Z" fill="currentColor"/>
                        </svg>
                    </a>
                </form>
            @endif


        </div>


        <div class="sidenav-head">
            <img src="https://i.ibb.co/jL7hGkw/Avatar-Maker.png"/>
            <a href="#" id="profile-link">Alexandre Solymos</a>
        </div>


        <ul onclick="Active(event)" id="main-nav">
            <li>
                <a class="active" href="{{ route('admin.index') }}">
                    <svg class="fa" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 8V16H9L9 19H19L19 5L9 5V8H16Z" fill="currentColor" fill-opacity="0.3" />
                        <path d="M7 5L7 19H4L4 5L7 5Z" fill="currentColor" /></svg>
                    Dashboard
                </a>
            </li>

            <li>
                <a href="{{ route('admin.product.index') }}">
                    <svg class="fa" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5 4H19C19.5523 4 20 4.44771 20 5V19C20 19.5523 19.5523 20 19 20H5C4.44772 20 4 19.5523 4 19V5C4 4.44772 4.44771 4 5 4ZM2 5C2 3.34315 3.34315 2 5 2H19C20.6569 2 22 3.34315 22 5V19C22 20.6569 20.6569 22 19 22H5C3.34315 22 2 20.6569 2 19V5ZM12 12C9.23858 12 7 9.31371 7 6H9C9 8.56606 10.6691 10 12 10C13.3309 10 15 8.56606 15 6H17C17 9.31371 14.7614 12 12 12Z" fill="currentColor" /></svg>
                    Produits
                </a>
            </li>

            <li>
                <a href="{{ route('admin.category.index') }}">
                    <svg class="fa" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 19C2 20.6569 3.34315 22 5 22H19C20.6569 22 22 20.6569 22 19V5C22 3.34315 20.6569 2 19 2H5C3.34315 2 2 3.34315 2 5V19ZM20 19C20 19.5523 19.5523 20 19 20H5C4.44772 20 4 19.5523 4 19V5C4 4.44772 4.44772 4 5 4H10V12.0111L12.395 12.0112L14.0001 9.86419L15.6051 12.0112H18.0001L18 4H19C19.5523 4 20 4.44772 20 5V19ZM16 4H12V9.33585L14.0001 6.66046L16 9.33571V4Z" fill="currentColor" /></svg>
                    Categories
                </a>
            </li>

            <li>
                <a href="#">
                    <svg class="fa" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.364 13.1214C15.2876 14.045 15.4831 15.4211 14.9504 16.5362L16.4853 18.0711C16.8758 18.4616 16.8758 19.0948 16.4853 19.4853C16.0948 19.8758 15.4616 19.8758 15.0711 19.4853L13.5361 17.9504C12.421 18.4831 11.045 18.2876 10.1213 17.364C8.94975 16.1924 8.94975 14.2929 10.1213 13.1214C11.2929 11.9498 13.1924 11.9498 14.364 13.1214ZM12.9497 15.9498C13.3403 15.5593 13.3403 14.9261 12.9497 14.5356C12.5592 14.145 11.9261 14.145 11.5355 14.5356C11.145 14.9261 11.145 15.5593 11.5355 15.9498C11.9261 16.3403 12.5592 16.3403 12.9497 15.9498Z" fill="currentColor" /><path d="M8 5H16V7H8V5Z" fill="currentColor" /><path d="M16 9H8V11H16V9Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M4 4C4 2.34315 5.34315 1 7 1H17C18.6569 1 20 2.34315 20 4V20C20 21.6569 18.6569 23 17 23H7C5.34315 23 4 21.6569 4 20V4ZM7 3H17C17.5523 3 18 3.44772 18 4V20C18 20.5523 17.5523 21 17 21H7C6.44772 21 6 20.5523 6 20V4C6 3.44772 6.44771 3 7 3Z" fill="currentColor" /></svg>
                    Commandes
                </a>
            </li>

            <li>
                <a href="#">
                    <svg class="fa" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 11C10.2091 11 12 9.20914 12 7C12 4.79086 10.2091 3 8 3C5.79086 3 4 4.79086 4 7C4 9.20914 5.79086 11 8 11ZM8 9C9.10457 9 10 8.10457 10 7C10 5.89543 9.10457 5 8 5C6.89543 5 6 5.89543 6 7C6 8.10457 6.89543 9 8 9Z" fill="currentColor" /><path d="M11 14C11.5523 14 12 14.4477 12 15V21H14V15C14 13.3431 12.6569 12 11 12H5C3.34315 12 2 13.3431 2 15V21H4V15C4 14.4477 4.44772 14 5 14H11Z" fill="currentColor" /><path d="M22 11H16V13H22V11Z" fill="currentColor" /><path d="M16 15H22V17H16V15Z" fill="currentColor" /><path d="M22 7H16V9H22V7Z" fill="currentColor" /></svg>
                    Utilisateurs
                </a>
            </li>

            <li>
                <a href="#">
                    <svg class="fa" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 6H2V16C2 17.1046 2.89543 18 4 18H20C21.1046 18 22 17.1046 22 16V6H20V16H4V6Z" fill="currentColor" /><path d="M6 12H18V14H6V12Z" fill="currentColor" /><path d="M18 8H6V10H18V8Z" fill="currentColor" /></svg>
                    Avis
                </a>
            </li>

            <li>
                <a href="{{ route('admin.payment.index') }}">
                    <svg class="fa" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 9C4 8.44772 4.44772 8 5 8H9C9.55228 8 10 8.44772 10 9C10 9.55228 9.55228 10 9 10H5C4.44772 10 4 9.55228 4 9Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M4 3C1.79086 3 0 4.79086 0 7V17C0 19.2091 1.79086 21 4 21H20C22.2091 21 24 19.2091 24 17V7C24 4.79086 22.2091 3 20 3H4ZM20 5H4C2.89543 5 2 5.89543 2 7V14H22V7C22 5.89543 21.1046 5 20 5ZM22 16H2V17C2 18.1046 2.89543 19 4 19H20C21.1046 19 22 18.1046 22 17V16Z" fill="currentColor" /></svg>
                    Paiements
                </a>
            </li>

            <li>
                <a href="#">
                    <svg class="fa" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.20348 2.00378C9.46407 2.00378 10.5067 3.10742 10.6786 4.54241L19.1622 13.0259L11.384 20.8041C10.2124 21.9757 8.31291 21.9757 7.14134 20.8041L2.8987 16.5615C1.72713 15.3899 1.72713 13.4904 2.8987 12.3188L5.70348 9.51404V4.96099C5.70348 3.32777 6.82277 2.00378 8.20348 2.00378ZM8.70348 4.96099V6.51404L7.70348 7.51404V4.96099C7.70348 4.63435 7.92734 4.36955 8.20348 4.36955C8.47963 4.36955 8.70348 4.63435 8.70348 4.96099ZM8.70348 10.8754V9.34247L4.31291 13.733C3.92239 14.1236 3.92239 14.7567 4.31291 15.1473L8.55555 19.3899C8.94608 19.7804 9.57924 19.7804 9.96977 19.3899L16.3337 13.0259L10.7035 7.39569V10.8754C10.7035 10.9184 10.7027 10.9612 10.7012 11.0038H8.69168C8.69941 10.9625 8.70348 10.9195 8.70348 10.8754Z" fill="currentColor" /><path d="M16.8586 16.8749C15.687 18.0465 15.687 19.946 16.8586 21.1175C18.0302 22.2891 19.9297 22.2891 21.1013 21.1175C22.2728 19.946 22.2728 18.0465 21.1013 16.8749L18.9799 14.7536L16.8586 16.8749Z" fill="currentColor" /></svg>
                    Parametres
                </a>
            </li>

        </ul>

        <div class="nav-footer">
            <p>By Alexandre solymos</p>
        </div>
    </nav>

</header>
<section id="content">
    @include('layouts.flash')

    @yield('content')

</section>


    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
