<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Le Café des mots') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('webfonts/fa-solid-900.woff2') }}">

    <style>
        .zoom img {
            transition: transform 0.3s;
        }

        /* Zoom en dispositivos más grandes */
        @media (min-width: 768px) {
            .zoom:hover img {
                transform: scale(4.5);
            }
        }

        /* Zoom en dispositivos móviles */
        @media (max-width: 767px) {
            .zoom:hover img {
                transform: scale(2.5);
                /* Ajusta el valor según tus preferencias */
            }
        }

        .bg-coffe {
            --bs-bg-opacity: 1;
            background-color: #56443a;
        }

        @media (max-width: 767px) {
            .navbar-nav {
                text-align: center;
            }

            .navbar-nav .nav-item {
                text-align: center;
                display: block;
            }

            .navbar-nav .nav-item .nav-link {
                text-align: center;
            }
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="{{ url('js/all.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        const url = '{{ url(request()->path()) }}';
    </script>
    <script src="{{ url('js/info.js') }}"></script>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-coffe shadow-sm">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    {{ config('app.name', 'Le Café des mots') }}
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('postres.index') }}">Postres</a>
                            </li>
                        @endauth

                        <!-- Enlace para "Libros" -->
                        @auth
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('biblioteca.index') }}">Libros</a>
                            </li>
                        @endauth

                        <!-- Enlace para "Bebidas" -->
                        @auth
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('bebidas.index') }}">Bebidas</a>
                            </li>
                        @endauth
                        @auth
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('contacto.index') }}">Notificaciones</a>
                        </li>
                    @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Badge para Notificaciones -->
                        @auth
                            <li class="nav-item dropdown">
                                <div class="position-relative">
                                    @include('notificaciones.index')
                                     
                                </div>
                            </li>
                        @endauth

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-light"
                                        href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light"
                                        href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
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
</body>

</html>
