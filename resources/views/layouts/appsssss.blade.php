<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('public')}}/frontend/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <title style="color:black">{{ config('appsssss.name', 'CLUB MANAGER') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{asset('public')}}/frontend/css/stylessssss.css" rel="stylesheet" />
    
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body id="page-top">
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav"  >
            <div class="container" style="color:black">
                <a class="navbar-brand js-scroll-trigger" href="{{ url('/home') }}">
                    {{ config('appsssss.name', 'CLUB MANAGER') }}
                </a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <!-- Left Side Of Navbar -->
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link1" href="{{ route('login') }}" style="color:black;margin-right:10px">{{ __('Login') }}</a>
                                </li>
                                
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link1" href="{{ route('register') }}" style="color:black;margin-left:10px">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            
                            @if (Route::has('login'))
                                @auth
                                <li class="nav-item mx-0 mx-lg-1"><a href="{{ url('/home') }}" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger">Home</a></li>
                                @else
                                <li class="nav-item mx-0 mx-lg-1"><a href="{{ route('login') }}" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger">Log in</a></li>
                                @if (Route::has('register'))
                                <li class="nav-item mx-0 mx-lg-1"><a href="{{ route('register') }}" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger">Register</a></li>
                                        @endif
                                     @endauth
                            @endif
                            <!-- <li class="nav-item mx-0 mx-lg-1">
                                <a id="navbarDropdown" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('admin.users.index') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                </li> -->

                                <li class="nav-item mx-0 mx-lg-1">
                                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    </li>

                                    @can('manager-users')
                                    <li class="nav-item mx-0 mx-lg-1">
                                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('admin.users.index') }}">
                                    {{ Auth::user()->name }}{{ __('Manager') }}
                                    </a>
                                    </li>
                                    @endcan
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main >
        <div>
            @include('partials.alerts')
            @yield('content')
        </div>
        </main>
    </div>
</body>
</html>
