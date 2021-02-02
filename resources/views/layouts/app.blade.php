<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/b1ccc03917.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </link>
    <link href="css/loginreg.css" rel="stylesheet">
    </link>

</head>

<body>
    <div class="containerLoginRegister">
    @guest
        @if (Route::has('login'))
            <a href="{{ route('login') }}">            
            <button class="LogRegbutton" href="{{ route('login') }}">
            {{ __('Login') }}
            </button>
            </a>

                        
        @endif

        @if (Route::has('register'))
                            
            <a href="{{ route('register') }}">
            <button class="LogRegbutton">
            {{ __('Register') }}
            </button>
            </a>
        @endif
        @else
            <a href="#" role="button">
                {{ Auth::user()->name }}
            </a>

                                
            <button class="createButton" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
            </button>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
    @endguest
    </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

<footer>

    <p class="copyRight">Design with <span class="heart"> ❤ </span> by echoteam</p>

    <nav class="mainMenu">
        <ul class="iconMenu">
            <a href="{{ route('home') }}"> 
                <li class="liMainMenu">
                    <i class="fas fa-home iconNav"></i>
                    <p class="iconText">Inicio</p>
                </li>
            </a>

            <a href="{{ route('profile') }}">   
                <li class="liMainMenu">
                    <i class="fas fa-user iconNav"></i>
                    <p class="iconText">Perfil</p>
                </li>
            </a>
        </ul>
    </nav> 
</footer>
</body>

</html>