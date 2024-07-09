<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <style>
        .circle {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 5rem; /* Ajusta el tamaño del círculo */
            height: 3rem; /* Ajusta el tamaño del círculo */
            border-radius: 50%; /* Hace que el div sea un círculo */
            background-color: #007bff; /* Color de fondo del círculo */
            color: black; /* Color del texto dentro del círculo (negro) */
            font-size: 0.8rem; /* Tamaño de fuente del texto */
            font-weight: bold; /* Texto en negrita */
            position: relative; /* Para posicionar correctamente */
            left: 0.5cm; /* Ajusta la posición del círculo */
            line-height: 1; /* Ajusta el espaciado entre líneas */
            padding: 0.5rem; /* Ajusta el relleno dentro del círculo */
            white-space: nowrap; /* Evita el salto de línea */
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <!-- Enlace "Inicio" redirigido a "recepcion" -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('recepcion') }}">{{ __('Inicio') }}</a>
                        </li>
                        <!-- Enlace "Generar reserva" redirigido a "reservas" -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reservas.index') }}">{{ __('Generar reserva') }}</a>
                        </li>
                        <!-- Nuevo enlace "Ver disponibilidad" -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('todas_reservas') }}">{{ __('Ver disponibilidad') }}</a>
                        </li>
                    </ul>

                    <!-- Número dentro del círculo -->
                    <div class="circle">
                        925 869 884
                    </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</body>
</html>
