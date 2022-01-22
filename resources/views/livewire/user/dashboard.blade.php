<div>
  <style>
  .hover-trigger .hover-target {
      display: none;
  }
  
  .hover-trigger:hover .hover-target {
      display: block;
  }

  .dropdown:hover .dropdown-menu {
  display: block;
}

  </style>
<!-- Header Area wrapper Starts -->

   <header id="header-wrap" class="relative">
    <!-- Navbar Start -->      
    <div class="navigation fixed top-0 left-0 w-full z-30 duration-300">
        <div class="container">
            <nav class="navbar py-2 navbar-expand-lg flex justify-between items-center relative duration-300">
                <a class="navbar-brand" href="{{ route('user/dashboard')}}">
                  <img src="../shine/assets/img/Logo.png" alt="Logo" class="h-12 w-12 rounded-full object-cover" >
                </a>
                <a  href="{{ route('user/dashboard')}}"><span class="inline font-mono font-semibold text-blue-500">Garden Petshop</span></a>
                <button class="navbar-toggler focus:outline-none block lg:hidden" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse hidden lg:block duration-300 shadow absolute top-100 left-0 mt-full bg-white z-20 px-5 py-3 w-full lg:static lg:bg-transparent lg:shadow-none" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto justify-center items-center lg:flex">
                        <li class="nav-item">
                          <a class="page-scroll active" href="#hero-area">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="page-scroll" href="#grooming">Grooming</a>
                        </li>
                        <li class="nav-item">
                          <a class="page-scroll" href="#boarding">Boarding</a>
                        </li>
                        <li class="nav-item">
                          <a class="page-scroll" href="#breeding">Breeding</a>
                        </li>
                        {{-- <li class="nav-item">
                          <a class="page-scroll" href="#testimonial">Testimoni</a>
                        </li> --}}
                        <li class="nav-item">
                          <a class="page-scroll" href="#feature">Tentang Kami</a>
                        </li>
                        {{-- <li class="nav-item">
                          <a class="page-scroll" href="#contact">Kontak</a>
                        </li> --}}
                    </ul>
                </div>
                @if (auth()->user()->role_id == 3)
                <div class="relative inline-block text-left">
                  <div>
                  <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition relative" id="menu-button" aria-expanded="true" aria-haspopup="true">
                    <img class="h-12 w-12 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                  </button>

                  <div class="collapse navbar-collapse hidden lg:block duration-300 shadow absolute top-100 left-0 mt-full bg-white z-20 px-5 py-3 w-full lg:static lg:bg-transparent lg:shadow-none" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto justify-center items-center lg:flex">
                          <li class="nav-item">
                            <a class="page-scroll active" href="#hero-area">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="page-scroll" href="#grooming">Grooming</a>
                          </li>
                          <li class="nav-item">
                            <a class="page-scroll" href="#boarding">Boarding</a>
                          </li>
                          <li class="nav-item">
                            <a class="page-scroll" href="#breeding">Breeding</a>
                          </li>
                          <li class="nav-item">
                            <a class="page-scroll" href="#testimonial">Testimoni</a>
                          </li>
                          <li class="nav-item">
                            <a class="page-scroll" href="#feature">Tentang Kami</a>
                          </li>
                          <li class="nav-item">
                            <a class="page-scroll" href="#contact">Kontak</a>
                          </li>
                      </ul>
                  </div>
                  @if (auth()->user()->role_id == 3)
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <div class="header-btn hidden sm:block sm:absolute sm:right-0 sm:mr-16 lg:static lg:mr-0">
                      <a class="text-blue-600 border border-blue-600 px-10 py-3 rounded-full duration-300 hover:bg-blue-600 hover:text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                      this.closest('form').submit();"> Logout</a>
                    </div>
                </form>
                  @else
                    <div class="header-btn hidden sm:block sm:absolute sm:right-0 sm:mr-16 lg:static lg:mr-0">
                      <a class="text-blue-600 border border-blue-600 px-10 py-3 rounded-full duration-300 hover:bg-blue-600 hover:text-white" href="{{route('user/logins')}}">Masuk</a>
                    </div>
                  @endif

                  <div class="header-btn hidden sm:block sm:absolute sm:right-0 sm:mr-16 lg:static lg:mr-0">
                    <a class="text-blue-600 border border-blue-600 px-10 py-3 rounded-full duration-300 hover:bg-blue-600 hover:text-white" href="{{route('user/logins')}}">Masuk</a>
                  </div>
              </nav>
          </div>
      </div>
      <!-- Navbar End -->
    </header>
                </div>
                  <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                      {{-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" --}}
                      <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>
                      <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Support</a>
                      <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">License</a>
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <a class= "text-gray-700 block px-4 py-2 text-sm" href="{{ route('logout') }}" onclick="event.preventDefault();
                      this.closest('form').submit();"> Logout</a>
                    </form>
                   </div>
                </div>
                @else
                  <div class="header-btn hidden sm:block sm:absolute sm:right-0 sm:mr-16 lg:static lg:mr-0">
                    <a class="text-blue-600 border border-blue-600 px-10 py-3 rounded-full duration-300 hover:bg-blue-600 hover:text-white" href="{{route('user/logins')}}">Masuk</a>
                  </div>
                @endif
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
  </header> 

  <!-- Hero Area Start -->
  <section id="hero-area" class="pt-48 pb-10">
    <div class="container">
      <div class="flex justify-between">
        <div class="w-full text-center">
          <h2 class="text-4xl font-bold leading-snug text-gray-700 mb-10 wow fadeInUp" data-wow-delay="1s">Bersama Kami 
            <br class="hidden lg:block"> Selalu Menyanyangi</h2>
          <div class="text-center wow fadeInUp" data-wow-delay="1.6s">
            <img class="img-fluid mx-auto" src="../shine/assets/img/about-6.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Area End -->

  <!-- Services Section Start -->
  <section id="services" class="bg-white py-24">
    <div class="container">
      <div class="text-center">
        <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Pelayanan Kami</h2>
      </div>
      <div class="flex flex-wrap">
        <!-- Services item -->
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="m-4 wow fadeInRight" data-wow-delay="0.3s">
            <div class="icon text-5xl">
              <i class="lni lni-cog"></i>
            </div>
            <div>
              <h3 class="service-title">Grooming Pet</h3>
              <p class="text-gray-600">Membersihkan dan merawat hewan peliharaan Anda dari kutu dan jamur</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="m-4 wow fadeInRight" data-wow-delay="0.6s">
            <div class="icon text-5xl">
              <i class="lni lni-bar-chart"></i>
            </div>
            <div>
              <h3 class="service-title">Hotel Pet</h3>
              <p class="text-gray-600">Tempat yang aman dan nyaman untuk jasa penitipan hewan kesayangan Anda</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="m-4 wow fadeInRight" data-wow-delay="0.9s">
            <div class="icon text-5xl">
              <i class="lni lni-briefcase"></i>
            </div>
            <div>
              <h3 class="service-title">Breeding Pet</h3>
              <p class="text-gray-600">Perkawinan hewan dengan jantan yang memiliki ras bagus</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->
    
    <!-- Boarding Section Start -->
    <section id="boarding" class="text-center py-20 bg-blue-100">
      <div class="container">
        <div class="flex justify-center mx-3">
          <div class="w-full sm:w-3/4 md:w-2/3 lg:w-1/2">
            <h4 class="mb-3 section-heading wow fadeInUp" data-wow-delay="0.3s">Pet Hotel</h4>
            <p class="mb-4 text-gray-600 leading-loose text-sm wow fadeInUp" data-wow-delay="0.6s">Tempat penitipan hewan yang aman dan nyaman. <br> Titipkan hewan anda sekarang.</p>
              <div class="wow fadeInDown" data-wow-delay="0.3s">
                {{-- <input type="Email" class="w-full mb-5 bg-white border border-blue-300 rounded-full px-5 py-3 duration-300 focus:border-blue-600 outline-none" name="email" placeholder="Nama Hewan peliharaan"> --}}
                <a href="{{ route('user/hotels')}}">
                  <button class="border-0 bg-blue-600 text-white rounded-full w-12 h-12 duration-300 hover:opacity-75"><i class="lni lni-arrow-right"></i></button>
                </a>
              </div>
            <form for="">
              <div class="wow fadeInDown" data-wow-delay="0.3s">
                {{-- <input type="Email" class="w-full mb-5 bg-white border border-blue-300 rounded-full px-5 py-3 duration-300 focus:border-blue-600 outline-none" name="email" placeholder="Nama Hewan peliharaan"> --}}
                <a href="{{ route('user/hotels')}}">
                  <button class="border-0 bg-blue-600 text-white rounded-full w-12 h-12 duration-300 hover:opacity-75"><i class="lni lni-arrow-right"></i></button>
                </a>
              </div>
            </form>
          </div>
        </div>
        <!-- Services item -->
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="m-4 wow fadeInRight" data-wow-delay="1.2s">
            <div class="icon text-5xl">
              <i class="lni lni-pencil-alt"></i>
            </div>
            <div>
              <h3 class="service-title">Vaksin</h3>
              <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia
                incidunt laborum aspernatur...</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="m-4 wow fadeInRight" data-wow-delay="1.5s">
            <div class="icon text-5xl">
              <i class="lni lni-mobile"></i>
            </div>
            <div>
              <h3 class="service-title">Konsultasi Dokter</h3>
              <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia
                incidunt laborum aspernatur...</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        {{-- <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="m-4 wow fadeInRight" data-wow-delay="1.8s">
            <div class="icon text-5xl">
              <i class="lni lni-layers"></i>
            </div>
            <div>
              <h3 class="service-title">Digital Marketing</h3>
              <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia
                incidunt laborum aspernatur...</p>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>
  <!-- Services Section End -->
  
  <!-- Boarding Section Start -->
  <section id="boarding" class="text-center py-20">
    <div class="container">
      <div class="flex justify-center mx-3">
        <div class="w-full sm:w-3/4 md:w-2/3 lg:w-1/2">
          <h4 class="mb-3 section-heading wow fadeInUp" data-wow-delay="0.3s">Pet Hotel</h4>
          <p class="mb-4 text-gray-600 leading-loose text-sm wow fadeInUp" data-wow-delay="0.6s">Tempat penitipan hewan yang aman dan nyaman. <br> Titipkan hewan anda sekarang.</p>
            <div class="wow fadeInDown" data-wow-delay="0.3s">
              {{-- <input type="Email" class="w-full mb-5 bg-white border border-blue-300 rounded-full px-5 py-3 duration-300 focus:border-blue-600 outline-none" name="email" placeholder="Nama Hewan peliharaan"> --}}
              <a href="{{ route('user/hotels')}}">
                <button class="border-0 bg-blue-600 text-white rounded-full w-12 h-12 duration-300 hover:opacity-75"><i class="lni lni-arrow-right"></i></button>
              </a>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Boarding Section End -->

    <!-- Team Section Start -->
    <section id="team" class="py-24 text-center">
      <div class="container">
        <div class="text-center">
          <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Tim Kami</h2>
        </div>
        <div class="flex flex-wrap justify-center">
          <!-- Team Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="team-img relative">
                <img class="img-fluid" src="../shine/assets/img/team/img1.jpg" alt="">
                <div class="team-overlay">
                  <ul class="flex justify-center">
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-indigo-500">
                        <i class="lni lni-facebook-original" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-blue-400">
                        <i class="lni lni-twitter-original" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-red-500">
                        <i class="lni lni-instagram-original" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="text-center px-5 py-3">
                <h3 class="team-name">dr. Muhammad Dzaky</h3>
                <p>Veterinarian</p>
              </div>
            </div>
          </div>
          <!-- Team Item Ends -->
          <!-- Team Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="team-img relative">
                <img class="img-fluid" src="../shine/assets/img/team/img2.jpg" alt="">
                <div
                  class="team-overlay">
                  <ul class="flex justify-center">
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-indigo-500">
                        <i class="lni lni-facebook-original" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-blue-400">
                        <i class="lni lni-twitter-original" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-red-500">
                        <i class="lni lni-instagram-original" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="text-center px-5 py-3">
                <h3 class="team-name">dr. Vera Zura</h3>
                <p>Veterinarian</p>
              </div>
            </div>
          </div>
          <!-- Team Item Ends -->
          <!-- Team Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="team-img relative">
                <img class="img-fluid" src="../shine/assets/img/team/img3.jpg" alt="">
                <div class="team-overlay">
                  <ul class="flex justify-center">
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-indigo-500">
                        <i class="lni lni-facebook-original" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-blue-400">
                        <i class="lni lni-twitter-original" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-red-500">
                        <i class="lni lni-instagram-original" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="text-center px-5 py-3">
                <h3 class="team-name">Muhammad Ghifa</h3>
                <p>Caretaker</p>
              </div>
            </div>
  <!-- Grooming section Start --> 
  <section id="grooming" class="bg-white py-24">
    <div class="container">
      <div class="text-center">
        <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Grooming</h2>
      </div>
      <div class="flex flex-wrap justify-center md:justify-start">
        <!-- single pricing table starts -->
        <div class="w-3/4 sm:w-2/3 md:w-1/2 lg:w-1/3">
          <div class="pricing-box wow fadeInLeft" data-wow-delay="1.2s">
            <div class="mb-3">
              <h3 class="package-name">Kutu</h3>
            </div>
            <div class="mb-5">
              <p class="text-gray-700">
                <span class="font-medium text-sm">Rp.</span>
                <span class="font-bold text-2xl">30.000</span>
              </p>
            </div>
            <ul class="mb-16">
              <li class="text-gray-500 leading-9">Nail Triming </li>
              <li class="text-gray-500 leading-9">Hair Cut / Hair Shave</li>
              <li class="text-gray-500 leading-9">Anti Tick Shampoo</li>
              <li class="text-gray-500 leading-9">Tick Treatment</li>
            </ul>
            <a href="{{ route('user/groomings')}}" class="btn">Get It</a>
          </div>
        </div>
        <!-- single pricing table ends -->
        <!-- single pricing table starts -->
        <div class="w-3/4 sm:w-2/3 md:w-1/2 lg:w-1/3">
          <div class="pricing-box bg-blue-100 wow fadeInLeft" data-wow-delay="1.2s">
            <div class="mb-3">
              <h3 class="package-name">Jamur</h3>
            </div>
            <div class="mb-5">
              <p class="text-gray-700">
                <span class="font-medium text-sm">Rp.</span>
                <span class="font-bold text-2xl">35.000</span>
              </p>
            </div>
            <ul class="mb-16">
              <li class="text-gray-500 leading-9">Nail Triming </li>
              <li class="text-gray-500 leading-9">Hair Cut / Hair Shave</li>
              <li class="text-gray-500 leading-9">Anti Mold Shampoo</li>
              <li class="text-gray-500 leading-9">Anti Mold Powder</li>
              <li class="text-gray-500 leading-9">Mold Treatment</li>
            </ul>
            <a href="{{ route('user/groomings')}}" class="btn">Get It</a>
          </div>
        </div>
        <!-- single pricing table ends -->
        <!-- single pricing table starts -->
        <div class="w-3/4 sm:w-2/3 md:w-1/2 lg:w-1/3">
          <div class="pricing-box">
            <div class="mb-3">
              <h3 class="package-name">Kombinasi</h3>
            </div>
            <div class="mb-5">
              <p class="text-gray-700">
                <span class="font-medium text-sm">Rp.</span>
                <span class="font-bold text-2xl">50.000</span>
              </p>
            </div>
            <ul class="mb-16">
              <li class="text-gray-500 leading-9">Nail Triming </li>
              <li class="text-gray-500 leading-9">Hair Cut / Hair Shave</li>
              <li class="text-gray-500 leading-9">Anti Mold & Tick Shampoo</li>
              <li class="text-gray-500 leading-9">Anti Mold Powder</li>
              <li class="text-gray-500 leading-9">Tick Treatment</li>
              <li class="text-gray-500 leading-9">Mold Treatment</li>
            </ul>
            <a href="{{ route('user/groomings')}}" class="btn">Get It</a>
          </div>
        </div>
        <!-- single pricing table ends -->
      </div>
    </div>
  </section>
  <!-- Grooming Table Section End -->

  <!-- Breeding Section Start -->
  <section id ="breeding" class="carousel-area bg-gray-800 py-32">
    <div class="container">
      <div class="text-center">
        <h2 class="mb-12 text-white section-heading wow fadeInDown" data-wow-delay="0.3s">Breeding</h2>
      </div>
      <div class="flex">
        <div class="w-full relative">
          <div class="portfolio-carousel">
            <div id="carouselExampleControls" class="carousel slide relative" data-bs-ride="carousel">
              <div class="carousel-inner relative w-full overflow-hidden">
                <div class="carousel-item active relative float-left w-full">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp"
                    class="block w-full"
                    alt="Wild Landscape"
                  />
                </div>
                <div class="carousel-item relative float-left w-full">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp"
                    class="block w-full"
                    alt="Camera"
                  />
                </div>
                <div class="carousel-item relative float-left w-full">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp"
                    class="block w-full"
                    alt="Exotic Fruits"
                  />
                </div>
              </div>
              <button
                class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="prev"
              >
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="next"
              >
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a href="{{ route('user/breedings')}}">
      <button class="flex mx-auto mt-16 text-white bg-blue-300 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">Breeding Menu</button>
    </a>
  </section>
  <!-- Breeding Section End -->

  <!-- Feature Section Start -->
  <div id="feature" class="py-24">
    <div class="container">
      <div class="flex flex-wrap items-center">
        <div class="w-full lg:w-1/2">
          <div class="mb-5 lg:mb-0">
            <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Tentang Kami</h2>
            
            <div class="flex flex-wrap">
              <div class="w-full sm:w-1/2 lg:w-1/2">
                <div class="m-3">
                  <div class="icon text-4xl">
                    <i class="lni lni-layers"></i>
                  </div>
                  <div class="features-content">
                    <h4 class="feature-title">Pelayanan Terbaik</h4>
                    <p> Pelayanan yang ramah bersahabat namun tetap profesional selalu kami utamakan untuk kepuasan konsumen.</p>
                  </div>
                </div>
              </div>
              <div class="w-full sm:w-1/2 lg:w-1/2">
                <div class="m-3">
                  <div class="icon text-4xl">
                    <i class="lni lni-gift"></i>
                  </div>
                  <div class="features-content">
                    <h4 class="feature-title">Kualitas Terjamin</h4>
                    <p> Kualitas produk yang terbaik dan telah teruji bisa Anda dapatkan di Garden Petshop & Clinic.</p>
                  </div>
                </div>
              </div>
              <div class="w-full sm:w-1/2 lg:w-1/2">
                <div class="m-3">
                  <div class="icon text-4xl">
                    <i class="lni lni-laptop-phone"></i>
                  </div>
                  <div class="features-content">
                    <h4 class="feature-title">Mudah untuk diakses</h4>
                    <p> Kami dapat menjemput dan mengembalikan hewan peliharan Anda.</p>
                  </div>
                </div>
              </div>
              <div class="w-full sm:w-1/2 lg:w-1/2">
                <div class="m-3">
                  <div class="icon text-4xl">
                    <i class="lni lni-leaf"></i>
                  </div>
                  <div class="features-content">
                    <h4 class="feature-title">Dokter Hewan Profesional</h4>
                    <p> Dokter hewan yang sudah berpengalaman dalam bidangnya.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-1/2">
          <div class="mx-3 lg:mr-0 lg:ml-3 wow fadeInRight" data-wow-delay="0.3s">
            <img src="../shine/assets/img/about-1.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Feature Section End -->

  <!-- Team Section Start -->
  <section id="team" class="bg-white py-24 text-center">
    <div class="container">
      <div class="text-center">
        <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Tim Kami</h2>
      </div>
      <div class="flex flex-wrap justify-center">
        <!-- Team Item Starts -->
        <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="team-item">
            <div class="team-img relative">
              <img class="img-fluid" src="../shine/assets/img/team/img1.jpg" alt="">
              <div class="team-overlay">
                <ul class="flex justify-center">
                  <li class="mx-1">
                    <a href="#" class="social-link hover:bg-indigo-500">
                      <i class="lni lni-facebook-original" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mx-1">
                    <a href="#" class="social-link hover:bg-blue-400">
                      <i class="lni lni-twitter-original" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mx-1">
                    <a href="#" class="social-link hover:bg-red-500">
                      <i class="lni lni-instagram-original" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="text-center px-5 py-3">
              <h3 class="team-name">drh. Muhammad Dzaky</h3>
              <p>Veterinarian</p>
            </div>
          </div>
        </div>
        <!-- Team Item Ends -->
        <!-- Team Item Starts -->
        <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="team-item">
            <div class="team-img relative">
              <img class="img-fluid" src="../shine/assets/img/team/img2.jpg" alt="">
              <div
                class="team-overlay">
                <ul class="flex justify-center">
                  <li class="mx-1">
                    <a href="#" class="social-link hover:bg-indigo-500">
                      <i class="lni lni-facebook-original" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mx-1">
                    <a href="#" class="social-link hover:bg-blue-400">
                      <i class="lni lni-twitter-original" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mx-1">
                    <a href="#" class="social-link hover:bg-red-500">
                      <i class="lni lni-instagram-original" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="text-center px-5 py-3">
              <h3 class="team-name">drh. Vera Zura</h3>
              <p>Veterinarian</p>
            </div>
          </div>
        </div>
        <!-- Team Item Ends -->
        <!-- Team Item Starts -->
        <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="team-item">
            <div class="team-img relative">
              <img class="img-fluid" src="../shine/assets/img/team/img3.jpg" alt="">
              <div class="team-overlay">
                <ul class="flex justify-center">
                  <li class="mx-1">
                    <a href="#" class="social-link hover:bg-indigo-500">
                      <i class="lni lni-facebook-original" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mx-1">
                    <a href="#" class="social-link hover:bg-blue-400">
                      <i class="lni lni-twitter-original" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mx-1">
                    <a href="#" class="social-link hover:bg-red-500">
                      <i class="lni lni-instagram-original" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="text-center px-5 py-3">
              <h3 class="team-name">drh. Muhammad Ghifa</h3>
              <p>Caretaker</p>
            </div>
          </div>
        </div>
        <!-- Team Item Ends -->
      </div>
    </div>
  </section>
  <!-- Team Section End -->

  <!-- Clients Section Start -->
  {{-- <div id="clients" class="py-16 bg-blue-100">
    <div class="container">
      <div class="text-center">
        <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">As Seen On</h2>
      </div>
      <div class="flex flex-wrap justify-center">
        <div class="w-1/2 md:w-1/4 lg:w-1/4">
          <div class="m-3 wow fadeInUp" data-wow-delay="0.3s">
            <img class="client-logo" src="../shine/assets/img/clients/img1.svg" alt="">
          </div>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/4">
          <div class="m-3 wow fadeInUp" data-wow-delay="0.6s">
            <img class="client-logo" src="../shine/assets/img/clients/img2.svg" alt="">
          </div>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/4">
          <div class="m-3 wow fadeInUp" data-wow-delay="0.9s">
            <img class="client-logo" src="../shine/assets/img/clients/img3.svg" alt="">
          </div>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/4">
          <div class="m-3 wow fadeInUp" data-wow-delay="1.2s">
            <img class="client-logo" src="../shine/assets/img/clients/img4.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- Clients Section End -->

  <!-- Testimonial Section Start -->
  {{-- <section id="testimonial" class="py-24 bg-gray-800">
    <div class="container">
      <div class="flex justify-center mx-3">
        <div class="w-full lg:w-7/12">
          <div id="testimonials" class="testimonials">
            <!-- testimonial item start -->
            <div class="item focus:outline-none">
              <div class="text-center py-10 px-8 md:px-10 rounded border border-gray-900">
                <div class="text-center">
                  <p class="text-gray-600 leading-loose">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                </div>
                <div class="my-3 mx-auto w-24 h-24 shadow-md rounded-full">
                  <img class="rounded-full p-2 w-full" src="../shine/assets/img/testimonial/img1.jpg" alt="">
                </div>
                <div class="mb-2">
                  <h2 class="font-bold text-lg uppercase text-blue-600 mb-2">Fajar</h2>
                  <h3 class="font-medium text-white text-sm">Euphoriya</h3>
                </div>
              </div>
            </div>
            <!-- testimonial item end -->
            <!-- testimonial item start -->
            <div class="item focus:outline-none">
              <div class="text-center py-10 px-8 md:px-10 rounded border border-gray-900">
                <div class="text-center">
                  <p class="text-gray-600 leading-loose">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                </div>
                <div class="my-3 mx-auto w-24 h-24 shadow-md rounded-full">
                  <img class="rounded-full p-2 w-full" src="../shine/assets/img/testimonial/img2.jpg" alt="">
                </div>
                <div class="mb-2">
                  <h2 class="font-bold text-lg uppercase text-blue-600 mb-2">Mila</h2>
                  <h3 class="font-medium text-white text-sm">PageBulb</h3>
                </div>
              </div>
            </div>
            <!-- testimonial item end -->
            <!-- testimonial item start -->
            <div class="item focus:outline-none">
              <div class="text-center py-10 px-8 md:px-10 rounded border border-gray-900">
                <div class="text-center">
                  <p class="text-gray-600 leading-loose">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                </div>
                <div class="my-3 mx-auto w-24 h-24 shadow-md rounded-full">
                  <img class="rounded-full p-2 w-full" src="../shine/assets/img/testimonial/img1.jpg" alt="">
                </div>
                <div class="mb-2">
                  <h2 class="font-bold text-lg uppercase text-blue-600 mb-2">Rob</h2>
                  <h3 class="font-medium text-white text-sm">OnePageLove</h3>
                </div>
              </div>
            </div>
            <!-- testimonial item end -->
            
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- Testimonial Section End -->  

  <!-- Contact Section Start -->
  {{-- <section id="contact" class="py-24 bg-blue-100">    
    <div class="container">
      <div class="text-center">
        <h2 class="mb-12 text-4xl text-gray-700 font-bold tracking-wide wow fadeInDown" data-wow-delay="0.3s">Masukan dan Saran</h2>
      </div>

      <div class="flex flex-wrap contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
        <div class="w-full md:w-1/2">
          <div class="contact">
            <h2 class="uppercase font-bold text-xl text-gray-700 mb-5 ml-3">Kontak Form</h2>
            <form id="contactForm" wire:submit.prevent="store">
              <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 md:w-full lg:w-1/2" >
                  <div class="mx-3">
                    <input wire:model="name" type="text" class="form-input rounded-full" id="name" placeholder="Nama" required data-error="Please enter your name">
                    {{$name}}
                  </div>                                 
                </div>
                <div class="w-full sm:w-1/2 md:w-full lg:w-1/2" >
                  <div class="mx-3">
                    <input wire:model="email" type="text" placeholder="Email" id="email" class="form-input rounded-full" name="email" required data-error="Please enter your email">
                  </div> 
                </div>
                <div class="w-full" >
                  <div class="mx-3">
                     <input type="text" placeholder="Subject" id="subject" name="subject" class="form-input rounded-full" required data-error="Please enter your subject">
                     
                    <select wire:model="subject" class="form-input rounded-full" placeholder="Subject">
                      <option value="" selected>Subject</option>
                      <option value="Testimonial">Testimonial</option>
                      <option value="Saran">Saran & Masukan</option>
                    </select>
                  </div>
                </div>
                <div class="w-full">
                  <div class="mx-3"> 
                    <textarea wire:model="message" class="form-input rounded-lg" id="message" name="message" placeholder="Pesan Anda" rows="5" data-error="Write your message" required></textarea>
                  </div>
                </div>
                <div class="w-full">
                  <div class="submit-button mx-3">
                    <button class="btn" id="form-submit" type="submit">Kirim</button>
                  </div>
                </div>
              </div>            
            </form>
          </div>
        </div>
        <div class="w-full md:w-1/2">
          <div class="ml-3 md:ml-12 wow fadeIn">
            <h2 class="uppercase font-bold text-xl text-gray-700 mb-5">Hubungi Kami</h2>
            <div>
              <div class="flex flex-wrap mb-6 items-center">
                <div class="contact-icon">
                  <i class="lni lni-map-marker"></i>
                </div>
                <p class="pl-3">Jl. Raya Kalimalang No.43, Duren Sawit, Kec. Duren Sawit</p>
              </div>
              <div class="flex flex-wrap mb-6 items-center">
                <div class="contact-icon">
                  <i class="lni lni-envelope"></i>
                </div>
                <p class="pl-3">
                  <a href="#" class="block">garden@email.com</a>
                </p>
              </div>
              <div class="flex flex-wrap mb-6 items-center">
                <div class="contact-icon">
                  <i class="lni lni-phone-set"></i>
                </div>
                <p class="pl-3">
                  <a href="#" class="block">0813-1145-5423</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section> --}}
  <!-- Contact Section End -->

  <!-- Map Section Start -->
  <section id="google-map-area">
      <div class="mx-6 mb-6">
          <div class="flex">
              <div class="w-full">
                  <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.7887109309127!2d-77.44196278417968!3d38.95165507956235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDU3JzA2LjAiTiA3N8KwMjYnMjMuMiJX!5e0!3m2!1sen!2sbd!4v1545420879707"></object>
              </div>
          </div>
      </div>
  </section>
  <!-- Map Section End -->
 
  @section('script')
  @endsection
</div>