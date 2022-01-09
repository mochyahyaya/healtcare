<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../shine/assets/img/favicon.png" type="image/png">

    <link rel="stylesheet" href="{!! asset('css/app.css') !!}">

    <title>Garden Petshop</title>

    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="../shine/assets/css/LineIcons.2.0.css">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="../shine/assets/css/animate.css">
    <!-- Tiny Slider  -->
    <link rel="stylesheet" type="text/css" href="../shine/assets/css/tiny-slider.css">
    <!-- Tailwind css -->
    <link rel="stylesheet" type="text/css" href="../shine/assets/css/tailwind.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    @livewireStyles
  </head>
  <body>

{{--  <header id="header-wrap" class="relative">--}}
{{--      <!-- Navbar Start -->--}}
{{--      <div class="navigation fixed top-0 left-0 w-full z-30 duration-300">--}}
{{--          <div class="container">--}}
{{--              <nav class="navbar py-2 navbar-expand-lg flex justify-between items-center relative duration-300">--}}
{{--                  <a class="navbar-brand" href="{{ route('user/dashboard')}}">--}}
{{--                      <img src="../shine/assets/img/logo.svg" alt="Logo">--}}
{{--                  </a>--}}
{{--              </nav>--}}
{{--          </div>--}}
{{--      </div>--}}
{{--      <!-- Navbar End -->--}}
{{--  </header>--}}

    <div>
        @yield('main')
    </div>

    <!-- Header Area wrapper End -->
    	  <!-- Footer Section Start -->
          <footer id="footer" class="bg-gray-800 py-16">
            <div class="container">
              <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.2s">
                  <div class="mx-3 mb-8">
                    <div class="footer-logo mb-3">
                      <img src="../shine/assets/img/logo.svg" alt="">
                    </div>
                    <p class="text-gray-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam excepturi quasi, ipsam
                      voluptatem.</p>
                  </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.4s">
                  <div class="mx-3 mb-8">
                    <h3 class="font-bold text-xl text-white mb-5">Jam buka</h3>
                    <ul>
                      <li><a href="#" class="footer-links">Senin-Jumat</a></li><span>08.00- 20.00</span>
                      <li><a href="#" class="footer-links">Sabtu-Minggu</a></li><span>09.00 - 20.30</span>
                    </ul>
                  </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.6s">
                  <div class="mx-3 mb-8">
                    <h3 class="font-bold text-xl text-white mb-5">About</h3>
                    <ul>
                      <li><a href="#" class="footer-links">Career</a></li>
                      <li><a href="#" class="footer-links">Team</a></li>
                      <li><a href="#" class="footer-links">Clients</a></li>
                    </ul>
                  </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.8s">
                  <div class="mx-3 mb-8">
                    <h3 class="font-bold text-xl text-white mb-5">Find us on</h3>

                    <ul class="social-icons flex justify-start">
                      <li class="mx-2">
                        <a href="#"
                          class="footer-icon hover:bg-indigo-500">
                          <i class="lni lni-facebook-original" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="mx-2">
                        <a href="#"
                          class="footer-icon hover:bg-red-500">
                          <i class="lni lni-instagram-original" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </footer>
          <!-- Footer Section End -->

          <section class="bg-gray-800 py-6 border-t-2 border-gray-700 border-dotted">
            <div class="container">
              <div class="flex flex-wrap">
                <div class="w-full text-center">
                  <p class="text-white">Designed and Developed by <a class="text-white duration-300 hover:text-blue-600" href="https://graygrids.com" rel="nofollow">TailwindTemplates</a> and <a class="text-white duration-300 hover:text-blue-600" href="https://uideck.com" rel="nofollow">UIdeck</a></p>
                </div>
              </div>
            </div>
          </section>

          <!-- Go to Top Link -->
          <a href="#" class="back-to-top w-10 h-10 fixed bottom-0 right-0 mb-5 mr-5 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg z-20 duration-300 hover:bg-blue-400">
            <i class="lni lni-arrow-up"></i>
          </a>

          <!-- Preloader -->
      <!--     <div id="preloader">
            <div class="loader" id="loader-1"></div>
          </div> -->
          <!-- End Preloader -->

          <!-- All js Here -->
          <script src="{{ mix('js/app.js') }}" defer></script>
          <script src="../shine/assets/js/wow.js"></script>
          <script src="../shine/assets/js/tiny-slider.js"></script>
          <script src="../shine/assets/js/contact-form.js"></script>
          <script src="../shine/assets/js/main.js"></script>
          <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
          <script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
          <script src="https://npmcdn.com/flatpickr/dist/l10n/id.js"></script>
        </body>
        @livewireScripts
        @yield('scripts')
</html>
{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../shine/assets/img/favicon.png" type="image/png">

    <link rel="stylesheet" href="{!! asset('css/app.css') !!}">

    <title>Garden Petshop</title>

    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="../shine/assets/css/LineIcons.2.0.css">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="../shine/assets/css/animate.css">
    <!-- Tiny Slider  -->
    <link rel="stylesheet" type="text/css" href="../shine/assets/css/tiny-slider.css">
    <!-- Tailwind css -->
    <link rel="stylesheet" type="text/css" href="../shine/assets/css/tailwind.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    @livewireStyles
  </head>
  <body>

{{--  <header id="header-wrap" class="relative">--}}
{{--      <!-- Navbar Start -->--}}
{{--      <div class="navigation fixed top-0 left-0 w-full z-30 duration-300">--}}
{{--          <div class="container">--}}
{{--              <nav class="navbar py-2 navbar-expand-lg flex justify-between items-center relative duration-300">--}}
{{--                  <a class="navbar-brand" href="{{ route('user/dashboard')}}">--}}
{{--                      <img src="../shine/assets/img/logo.svg" alt="Logo">--}}
{{--                  </a>--}}
{{--              </nav>--}}
{{--          </div>--}}
{{--      </div>--}}
{{--      <!-- Navbar End -->--}}
{{--  </header>--}}

    <div>
        @yield('main')
    </div>

    <!-- Header Area wrapper End -->
    	  <!-- Footer Section Start -->
          <footer id="footer" class="bg-gray-800 py-16">
            <div class="container">
              <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.2s">
                  <div class="mx-3 mb-8">
                    <div class="footer-logo mb-3">
                      <img src="../shine/assets/img/logo.svg" alt="">
                    </div>
                    <p class="text-gray-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam excepturi quasi, ipsam
                      voluptatem.</p>
                  </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.4s">
                  <div class="mx-3 mb-8">
                    <h3 class="font-bold text-xl text-white mb-5">Jam buka</h3>
                    <ul>
                      <li><a href="#" class="footer-links">Senin-Jumat</a></li><span>08.00- 20.00</span>
                      <li><a href="#" class="footer-links">Sabtu-Minggu</a></li><span>09.00 - 20.30</span>
                    </ul>
                  </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.6s">
                  <div class="mx-3 mb-8">
                    <h3 class="font-bold text-xl text-white mb-5">About</h3>
                    <ul>
                      <li><a href="#" class="footer-links">Career</a></li>
                      <li><a href="#" class="footer-links">Team</a></li>
                      <li><a href="#" class="footer-links">Clients</a></li>
                    </ul>
                  </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.8s">
                  <div class="mx-3 mb-8">
                    <h3 class="font-bold text-xl text-white mb-5">Find us on</h3>

                    <ul class="social-icons flex justify-start">
                      <li class="mx-2">
                        <a href="#"
                          class="footer-icon hover:bg-indigo-500">
                          <i class="lni lni-facebook-original" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="mx-2">
                        <a href="#"
                          class="footer-icon hover:bg-red-500">
                          <i class="lni lni-instagram-original" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </footer>
          <!-- Footer Section End -->

          <section class="bg-gray-800 py-6 border-t-2 border-gray-700 border-dotted">
            <div class="container">
              <div class="flex flex-wrap">
                <div class="w-full text-center">
                  <p class="text-white">Designed and Developed by <a class="text-white duration-300 hover:text-blue-600" href="https://graygrids.com" rel="nofollow">TailwindTemplates</a> and <a class="text-white duration-300 hover:text-blue-600" href="https://uideck.com" rel="nofollow">UIdeck</a></p>
                </div>
              </div>
            </div>
          </section>

          <!-- Go to Top Link -->
          <a href="#" class="back-to-top w-10 h-10 fixed bottom-0 right-0 mb-5 mr-5 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg z-20 duration-300 hover:bg-blue-400">
            <i class="lni lni-arrow-up"></i>
          </a>

          <!-- Preloader -->
      <!--     <div id="preloader">
            <div class="loader" id="loader-1"></div>
          </div> -->
          <!-- End Preloader -->

          <!-- All js Here -->
          <script src="{{ mix('js/app.js') }}" defer></script>
          <script src="../shine/assets/js/wow.js"></script>
          <script src="../shine/assets/js/tiny-slider.js"></script>
          <script src="../shine/assets/js/contact-form.js"></script>
          <script src="../shine/assets/js/main.js"></script>
          <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
          <script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
          <script src="https://npmcdn.com/flatpickr/dist/l10n/id.js"></script>
        </body>
        @livewireScripts
        @yield('scripts')
</html>
{{-- <!DOCTYPE html>
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
        {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
    {{-- </head> --}}
    {{-- <body>
        <div>
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
        {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

        @livewireScripts
    </body>
</html> --}}
