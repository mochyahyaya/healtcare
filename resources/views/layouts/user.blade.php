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
