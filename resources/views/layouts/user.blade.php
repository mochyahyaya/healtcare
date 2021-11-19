<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{!! asset('css/app.css') !!}">

        <title>E-Health Care</title>
        
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     
        <link rel="stylesheet" href="{!! asset('temp/css/animate.css') !!}">
        
        <link rel="stylesheet" href="{!! asset('temp/css/owl.carousel.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('temp/css/owl.theme.default.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('temp/css/magnific-popup.css') !!}">
    
    
        <link rel="stylesheet" href="{!! asset('temp/css/bootstrap-datepicker.css') !!}">
        <link rel="stylesheet" href="{!! asset('temp/css/jquery.timepicker.css') !!}">
    
        <link rel="stylesheet" href="{!! asset('temp/css/flaticon.css') !!}">
        <link rel="stylesheet" href="{!! asset('temp/css/style.css') !!}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
    
                        </ul>
    
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
    
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
    
        @yield('scripts')
        <script src="{!! asset('temp/js/jquery.min.js') !!}"></script>
        <script src="{!! asset('temp/js/jquery-migrate-3.0.1.min.js') !!}"></script>
        <script src="{!! asset('temp/js/popper.min.js') !!}"></script>
        <script src="{!! asset('temp/js/bootstrap.min.js') !!}"></script>
        <script src="{!! asset('temp/js/jquery.easing.1.3.js') !!}"></script>
        <script src="{!! asset('temp/js/jquery.waypoints.min.js') !!}"></script>
        <script src="{!! asset('temp/js/jquery.stellar.min.js') !!}"></script>
        <script src="{!! asset('temp/js/jquery.animateNumber.min.js') !!}"></script>
        <script src="{!! asset('temp/js/bootstrap-datepicker.js') !!}"></script>
        <script src="{!! asset('temp/js/jquery.timepicker.min.js') !!}"></script>
        <script src="{!! asset('temp/js/owl.carousel.min.js') !!}"></script>
        <script src="{!! asset('temp/js/jquery.magnific-popup.min.js') !!}"></script>
        <script src="{!! asset('temp/js/scrollax.min.js') !!}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="{!! asset('temp/js/google-map.js') !!}"></script>
        <script src="{!! asset('temp/js/main.js') !!}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        
        @livewireScripts
    </body>   
</html>
