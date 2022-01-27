@extends('layouts.user')

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap" class="relative">
      <!-- Navbar Start -->      
      <div class="navigation fixed top-0 left-0 w-full z-30 duration-300">
          <div class="container">
              <nav class="navbar py-2 navbar-expand-lg flex justify-between items-center relative duration-300">
                  <a class="navbar-brand" href="{{ route('user/dashboard')}}">
                    <img src="../shine/assets/img/logo.svg" alt="Logo">
                  </a>
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

              </nav>
          </div>
      </div>
      <!-- Navbar End -->
    </header>

@section('main')

    <!-- Hero Area Start -->
    <section id="hero-area" class="bg-blue-100 pt-48 pb-10">
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
    <section id="services" class="py-24">
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
      </div>
    </section>
    <!-- Boarding Section End -->

    <!-- Grooming section Start --> 
    <section id="grooming" class="py-24">
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
              <div>
                {{-- @foreach ($image as $items)
                  <img src="{{ url('storage/photos/'.$items->featured_image )}}" alt="{{ $items->name }}" class="w-full" alt="Image"> 
                @endforeach --}}
              </div>>
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
    <div id="feature" class="bg-blue-100 py-24">
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
<<<<<<< HEAD
                <h3 class="team-name">dr. Muhammad Dzaky</h3>
                <p>Veterinarian</p>
=======
                <h3 class="team-name">John Doe</h3>
                <p>UX UI Designer</p>
>>>>>>> c66733d (enchance(user): add template, crud)
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
<<<<<<< HEAD
                <h3 class="team-name">dr. Vera Zura</h3>
                <p>Veterinarian</p>
=======
                <h3 class="team-name">Sarah Doe</h3>
                <p>Front-End Developer</p>
>>>>>>> c66733d (enchance(user): add template, crud)
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
<<<<<<< HEAD
                <h3 class="team-name">Muhammad Ghifa</h3>
                <p>Caretaker</p>
=======
                <h3 class="team-name">Rob Hope</h3>
                <p>Front-end Developer</p>
>>>>>>> c66733d (enchance(user): add template, crud)
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
    <section id="testimonial" class="py-24 bg-gray-800">
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
    </section>
    <!-- Testimonial Section End -->  

    <!-- Contact Section Start -->
    <section id="contact" class="py-24 bg-blue-100">    
      <div class="container">
        <div class="text-center">
          <h2 class="mb-12 text-4xl text-gray-700 font-bold tracking-wide wow fadeInDown" data-wow-delay="0.3s">Masukan dan Saran</h2>
        </div>

        <div class="flex flex-wrap contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
          <div class="w-full md:w-1/2">
            <div class="contact">
              <h2 class="uppercase font-bold text-xl text-gray-700 mb-5 ml-3">Kontak Form</h2>
              <form id="contactForm" action="assets/contact.php">
                <div class="flex flex-wrap">
                  <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                    <div class="mx-3">
                      <input type="text" class="form-input rounded-full" id="name" name="name" placeholder="Nama" required data-error="Please enter your name">
                    </div>                                 
                  </div>
                  <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                    <div class="mx-3">
                      <input type="text" placeholder="Email" id="email" class="form-input rounded-full" name="email" required data-error="Please enter your email">
                    </div> 
                  </div>
                  <div class="w-full">
                    <div class="mx-3">
                      {{-- <input type="text" placeholder="Subject" id="subject" name="subject" class="form-input rounded-full" required data-error="Please enter your subject">
                       --}}
                      <select class="form-input rounded-full" placeholder="Subject">
                        <option value="" selected>Subject</option>
                        <option value="Testimonial">Testimonial</option>
                        <option value="Saran">Saran & Masukan</option>
                      </select>
                    </div>
                  </div>
                  <div class="w-full">
                    <div class="mx-3"> 
                      <textarea class="form-input rounded-lg" id="message" name="message" placeholder="Pesan Anda" rows="5" data-error="Write your message" required></textarea>
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
    </section>
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


{{-- <div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <p class="mb-0 phone pl-md-2">
                    <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +021 1234 567</a> 
                    <a href="#"><span class="fa fa-paper-plane mr-1"></span> gardenpetshop@gmail.com</a>
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end">
                <div class="social-media">
                <p class="mb-0 d-flex">
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                </p>
        </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="#"><span class="flaticon-pawprint mr-2"></span>Garden Petshop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="" href="#service">Service</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('user/groomings') }}">Grooming</a>
              <a class="dropdown-item" href="#breeding">Breeding</a>
              <a class="dropdown-item" href="#hotel">Hotel</a>
          </li>
          <li class="nav-item"><a href="#clinic" class="nav-link">Clinic</a></li>
          <li class="nav-item"><a href="#feedbacks" class="nav-link">Feedbacks</a></li>
          <li class="nav-item"><a href="#about" class="nav-link">About Us</a></li>
        </ul>
      </div>
    </div>
</nav>
<div class="hero-wrap js-fullheight" style="background-image: url('../temp/images/bg-1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-11 ftco-animate text-center">
            <h1 class="mb-4">Bersama Kami Selalu Menyanyangi</h1>
          <p><a href="#" class="btn btn-primary mr-md-4 py-3 px-4">Learn more <span class="ion-ios-arrow-forward"></span></a></p>
        </div>
      </div>
    </div>
</div>
<section class="ftco-section bg-light ftco-no-pt ftco-intro" id="service">
    <div class="container">
        <div class="row">
      <div class="col-md-3 d-flex align-self-stretch px-4 ftco-animate">
        <div class="d-block services active text-center">
          <div class="icon d-flex align-items-center justify-content-center">
                <span class="flaticon-blind"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Pet Hotel</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
          </div>
        </div>      
      </div>
      <div class="col-md-3 d-flex align-self-stretch px-4 ftco-animate">
        <div class="d-block services text-center">
          <div class="icon d-flex align-items-center justify-content-center">
                <span class="flaticon-pet-house"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Pet Breeding</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
          </div>
        </div>      
      </div>
      <div class="col-md-3 d-flex align-self-stretch px-4 ftco-animate">
        <div class="d-block services active text-center">
          <div class="icon d-flex align-items-center justify-content-center">
                <span class="flaticon-dog-eating"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Pet Klinik</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
          </div>
        </div>    
      </div>
      <div class="col-md-3 d-flex align-self-stretch px-4 ftco-animate">
        <div class="d-block services text-center">
          <div class="icon d-flex align-items-center justify-content-center">
                <span class="flaticon-grooming"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Pet Grooming</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
          </div>
        </div>      
      </div>
    </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb" id="about">
  <div class="container">
    <div class="row d-flex no-gutters">
      <div class="col-md-5 d-flex">
        <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(../temp/images/about-6.jpg);">
        </div>
      </div>
      <div class="col-md-7 pl-md-5 py-md-5">
        <div class="heading-section pt-md-5">
          <h2 class="mb-4">Why Choose Us?</h2>
        </div>
        <div class="row">
          <div class="col-md-6 services-2 w-100 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
            <div class="text pl-3">
              <h4>Care Advices</h4>
              <p>Far far away, behind the word mountains, far from the countries.</p>
            </div>
          </div>
          <div class="col-md-6 services-2 w-100 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-customer-service"></span></div>
            <div class="text pl-3">
              <h4>Customer Supports</h4>
              <p>Far far away, behind the word mountains, far from the countries.</p>
            </div>
          </div>
          <div class="col-md-6 services-2 w-100 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-emergency-call"></span></div>
            <div class="text pl-3">
              <h4>Emergency Services</h4>
              <p>Far far away, behind the word mountains, far from the countries.</p>
            </div>
          </div>
          <div class="col-md-6 services-2 w-100 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-veterinarian"></span></div>
            <div class="text pl-3">
              <h4>Veterinary Help</h4>
              <p>Far far away, behind the word mountains, far from the countries.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-counter" id="section-counter">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="50">0</strong>
          </div>
          <div class="text">
            <span>Customer</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="8500">0</strong>
          </div>
          <div class="text">
            <span>Professionals</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="20">0</strong>
          </div>
          <div class="text">
            <span>Products</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="50">0</strong>
          </div>
          <div class="text">
            <span>Pets Hosted</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light ftco-faqs">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 order-md-last">
        <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/about.jpg);">
          <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
            <span class="fa fa-play"></span>
          </a>
        </div>
        <div class="d-flex mt-3">
          <div class="img img-2 mr-md-2" style="background-image:url(../temp/images/about-2.jpg);"></div>
          <div class="img img-2 ml-md-2" style="background-image:url(../temp/images/about-3.jpg);"></div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="heading-section mb-5 mt-5 mt-lg-0">
          <h2 class="mb-3">Frequently Asks Questions</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
        <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
          <div class="card">
            <div class="card-header p-0" id="headingOne">
              <h2 class="mb-0">
                <button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                  <p class="mb-0">How to train your pet dog?</p>
                  <i class="fa" aria-hidden="true"></i>
                </button>
              </h2>
            </div>
            <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
              <div class="card-body py-3 px-0">
                <ol>
                  <li>Far far away, behind the word mountains</li>
                  <li>Consonantia, there live the blind texts</li>
                  <li>When she reached the first hills of the Italic Mountains</li>
                  <li>Bookmarksgrove, the headline of Alphabet Village</li>
                  <li>Separated they live in Bookmarksgrove right</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header p-0" id="headingTwo" role="tab">
              <h2 class="mb-0">
                <button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                  <p class="mb-0">How to manage your pets?</p>
                  <i class="fa" aria-hidden="true"></i>
                </button>
              </h2>
            </div>
            <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
              <div class="card-body py-3 px-0">
                <ol>
                  <li>Far far away, behind the word mountains</li>
                  <li>Consonantia, there live the blind texts</li>
                  <li>When she reached the first hills of the Italic Mountains</li>
                  <li>Bookmarksgrove, the headline of Alphabet Village</li>
                  <li>Separated they live in Bookmarksgrove right</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header p-0" id="headingThree" role="tab">
              <h2 class="mb-0">
                <button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                  <p class="mb-0">What is the best grooming for your pets?</p>
                  <i class="fa" aria-hidden="true"></i>
                </button>
              </h2>
            </div>
            <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
              <div class="card-body py-3 px-0">
                <ol>
                  <li>Far far away, behind the word mountains</li>
                  <li>Consonantia, there live the blind texts</li>
                  <li>When she reached the first hills of the Italic Mountains</li>
                  <li>Bookmarksgrove, the headline of Alphabet Village</li>
                  <li>Separated they live in Bookmarksgrove right</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header p-0" id="headingFour" role="tab">
              <h2 class="mb-0">
                <button href="#collapseFour" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
                  <p class="mb-0">What are those requirements for sitting pets?</p>
                  <i class="fa" aria-hidden="true"></i>
                </button>
              </h2>
            </div>
            <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
              <div class="card-body py-3 px-0">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section testimony-section" style="background-image: url('../temp/images/about-5.jpg');" id="feedbacks">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Happy Clients &amp; Feedbacks</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel ftco-owl">
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
              <div class="text">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(../temp/images/person_1.jpg)"></div>
                  <div class="pl-3">
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
              <div class="text">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(../temp/images/person_2.jpg)"></div>
                  <div class="pl-3">
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
              <div class="text">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(../temp/images/person_3.jpg)"></div>
                  <div class="pl-3">
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
              <div class="text">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(../temp/images/person_1.jpg)"></div>
                  <div class="pl-3">
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
              <div class="text">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(../temp/images/person_2.jpg)"></div>
                  <div class="pl-3">
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light" id="grooming">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Pet Grooming</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 ftco-animate">
        <div class="block-7">
          <div class="img" style="background-image: url(../temp/images/groom-1.jpg);"></div>
          <div class="text-center p-4">
            <span class="excerpt d-block">Standar</span>
            <span class="price"><sup>Rp</sup> <span class="number">30.000</span> <sub></sub></span>
          
            <ul class="pricing-text mb-5">
              <li><span class="fa fa-check mr-2"></span>5 Dog Walk</li>
              <li><span class="fa fa-check mr-2"></span>3 Vet Visit</li>
              <li><span class="fa fa-check mr-2"></span>3 Pet Spa</li>
              <li><span class="fa fa-check mr-2"></span>Free Supports</li>
            </ul>

            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="block-7">
          <div class="img" style="background-image: url(../temp/images/groom-2.jpg);"></div>
          <div class="text-center p-4">
            <span class="excerpt d-block">Medicated</span>
            <span class="price"><sup>Rp</sup> <span class="number">40.000</span> <sub></sub></span>
            
            <ul class="pricing-text mb-5">
              <li><span class="fa fa-check mr-2"></span>5 Dog Walk</li>
              <li><span class="fa fa-check mr-2"></span>3 Vet Visit</li>
              <li><span class="fa fa-check mr-2"></span>3 Pet Spa</li>
              <li><span class="fa fa-check mr-2"></span>Free Supports</li>
            </ul>

            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="block-7">
          <div class="img" style="background-image: url(../temp/images/groom-3.jpg);"></div>
          <div class="text-center p-4">
            <span class="excerpt d-block">Insecticidals</span>
            <span class="price"><sup>Rp</sup> <span class="number">50.000</span> <sub></sub></span>
            
            <ul class="pricing-text mb-5">
              <li><span class="fa fa-check mr-2"></span>5 Dog Walk</li>
              <li><span class="fa fa-check mr-2"></span>3 Vet Visit</li>
              <li><span class="fa fa-check mr-2"></span>3 Pet Spa</li>
              <li><span class="fa fa-check mr-2"></span>Free Supports</li>
            </ul>

            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section" id="breeding">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-2">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Pet Breeding</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
          <div class="single-travel-boxes">
            <div id="desc-tabs" class="desc-tabs">
              <ul class="nav nav-tabs">

                <li role="presentation" class="active">
                   <a href="#tours" aria-controls="tours" role="tab" data-toggle="tab">
                     <i class="fa fa-tree"></i>
                     kucing
                   </a>
                </li>

                <li role="presentation">
                  <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">
                    <i class="fa fa-building"></i>
                    anjing
                  </a>
                </li>
              </ul>

              <div class="tab-content">
                <div class="tab-pane active fade in" id="tours">
                  <div class="tab-para">
                    <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="single-tab-select-box">

                          <h2>destination</h2>

                          <div class="travel-select-icon">
                            <select class="form-control ">

                                <option value="default">enter your destination country</option><!-- /.option-->

                                <option value="turkey">turkey</option><!-- /.option-->

                                <option value="russia">russia</option><!-- /.option-->
                                <option value="egept">egypt</option><!-- /.option-->

                            </select><!-- /.select-->
                          </div><!-- /.travel-select-icon -->

                          <div class="travel-select-icon">
                            <select class="form-control ">

                                <option value="default">enter your destination location</option><!-- /.option-->

                                <option value="istambul">istambul</option><!-- /.option-->

                                <option value="mosko">mosko</option><!-- /.option-->
                                <option value="cairo">cairo</option><!-- /.option-->

                            </select><!-- /.select-->
                          </div><!-- /.travel-select-icon -->

                        </div><!--/.single-tab-select-box-->
                      </div><!--/.col-->

                      <div class="col-lg-2 col-md-3 col-sm-4">
                        <div class="single-tab-select-box">
                          <h2>check in</h2>
                          <div class="travel-check-icon">
                            <form action="#">
                              <input type="text" name="check_in" class="form-control appointment_date" data-toggle="datepicker" placeholder="12 -01 - 2017 ">
                            </form>
                          </div><!-- /.travel-check-icon -->
                        </div><!--/.single-tab-select-box-->
                      </div><!--/.col-->

                      <div class="col-lg-2 col-md-3 col-sm-4">
                        <div class="single-tab-select-box">
                          <h2>check out</h2>
                          <div class="travel-check-icon">
                            <form action="#">
                              <input type="text" name="check_out" class="form-control appointment_date"  data-toggle="datepicker" placeholder="22 -01 - 2017 ">
                            </form>
                          </div><!-- /.travel-check-icon -->
                        </div><!--/.single-tab-select-box-->
                      </div><!--/.col-->

                      <div class="col-lg-2 col-md-1 col-sm-4">
                        <div class="single-tab-select-box">
                          <h2>duration</h2>
                          <div class="travel-select-icon">
                            <select class="form-control ">

                                <option value="default">5</option><!-- /.option-->

                                <option value="10">10</option><!-- /.option-->

                                <option value="15">15</option><!-- /.option-->
                                <option value="20">20</option><!-- /.option-->

                            </select><!-- /.select-->
                          </div><!-- /.travel-select-icon -->
                        </div><!--/.single-tab-select-box-->
                      </div><!--/.col-->

                      <div class="col-lg-2 col-md-1 col-sm-4">
                        <div class="single-tab-select-box">
                          <h2>members</h2>
                          <div class="travel-select-icon">
                            <select class="form-control ">

                                <option value="default">1</option><!-- /.option-->

                                <option value="2">2</option><!-- /.option-->

                                <option value="4">4</option><!-- /.option-->
                                <option value="8">8</option><!-- /.option-->

                            </select><!-- /.select-->
                          </div><!-- /.travel-select-icon -->
                        </div><!--/.single-tab-select-box-->
                      </div><!--/.col-->

                    </div><!--/.row-->
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light" id="hotel">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Pet Hotel</h2>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20 rounded" style="background-image: url('../temp/images/image_1.jpg');">
          </a>
          <div class="text p-4">
            <div class="meta mb-2">
              <div><a href="#">April 07, 2020</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
            </div>
            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20 rounded" style="background-image: url('../temp/images/image_2.jpg');">
          </a>
          <div class="text p-4">
            <div class="meta mb-2">
              <div><a href="#">April 07, 2020</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
            </div>
            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20 rounded" style="background-image: url('../temp/images/image_3.jpg');">
          </a>
          <div class="text p-4">
            <div class="meta mb-2">
              <div><a href="#">April 07, 2020</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
            </div>
            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url(../temp/images/bg-3.jpg);" id="clinic">
  <div class="overlay"></div>
  <div class="container">
    <div class="row d-md-flex justify-content-end">
      <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate">
        <h2 class="mb-4">Free Consultation</h2>
        <form action="#" class="appointment">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <div class="form-field">
                  <div class="select-wrap">
                    <div class="icon"><span class="fa fa-chevron-down"></span></div>
                    <select name="" id="" class="form-control">
                      <option value="">Select services</option>
                      <option value="">Cat Sitting</option>
                      <option value="">Dog Walk</option>
                      <option value="">Pet Spa</option>
                      <option value="">Pet Grooming</option>
                      <option value="">Pet Daycare</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Vehicle number">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="input-wrap">
                  <div class="icon"><span class="fa fa-calendar"></span></div>
                  <input type="text" class="form-control appointment_date" placeholder="Date">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="input-wrap">
                  <div class="icon"><span class="fa fa-clock-o"></span></div>
                  <input type="text" class="form-control appointment_time" placeholder="Time">
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
        <h2 class="footer-heading">Petsitting</h2>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        <ul class="ftco-footer-social p-0">
          <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
          <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
          <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
        <h2 class="footer-heading">Latest News</h2>
        <div class="block-21 mb-4 d-flex">
          <a class="img mr-4 rounded" style="background-image: url(../images/image_1.jpg);"></a>
          <div class="text">
            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
            <div class="meta">
              <div><a href="#"><span class="icon-calendar"></span> April 7, 2020</a></div>
              <div><a href="#"><span class="icon-person"></span> Admin</a></div>
              <div><a href="#"><span class="icon-chat"></span> 19</a></div>
            </div>
          </div>
        </div>
        <div class="block-21 mb-4 d-flex">
          <a class="img mr-4 rounded" style="background-image: url(../images/image_2.jpg);"></a>
          <div class="text">
            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
            <div class="meta">
              <div><a href="#"><span class="icon-calendar"></span> April 7, 2020</a></div>
              <div><a href="#"><span class="icon-person"></span> Admin</a></div>
              <div><a href="#"><span class="icon-chat"></span> 19</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
        <h2 class="footer-heading">Quick Links</h2>
        <ul class="list-unstyled">
          <li><a href="#" class="py-2 d-block">Home</a></li>
          <li><a href="#" class="py-2 d-block">About</a></li>
          <li><a href="#" class="py-2 d-block">Services</a></li>
          <li><a href="#" class="py-2 d-block">Works</a></li>
          <li><a href="#" class="py-2 d-block">Blog</a></li>
          <li><a href="#" class="py-2 d-block">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
        <h2 class="footer-heading">Have a Questions?</h2>
        <div class="block-23 mb-3">
          <ul>
            <li><span class="icon fa fa-map"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
            <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-12 text-center">

        <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      </div>
    </div>
  </div>
</footer>

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
@endsection --}}

{{-- <!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;"> --}}
{{-- </html> --}}
