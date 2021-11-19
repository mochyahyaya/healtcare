@extends('layouts.user')

@section('content')
<div class="wrap">
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
              <a class="dropdown-item" href="#grooming">Grooming</a>
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
<div class="hero-wrap js-fullheight" style="background-image: url('temp/images/bg-1.jpg');" data-stellar-background-ratio="0.5">
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
        <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(temp/images/about-6.jpg);">
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
          <div class="img img-2 mr-md-2" style="background-image:url(temp/images/about-2.jpg);"></div>
          <div class="img img-2 ml-md-2" style="background-image:url(temp/images/about-3.jpg);"></div>
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

<section class="ftco-section testimony-section" style="background-image: url('temp/images/about-5.jpg');" id="feedbacks">
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
                  <div class="user-img" style="background-image: url(temp/images/person_1.jpg)"></div>
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
                  <div class="user-img" style="background-image: url(temp/images/person_2.jpg)"></div>
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
                  <div class="user-img" style="background-image: url(temp/images/person_3.jpg)"></div>
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
                  <div class="user-img" style="background-image: url(temp/images/person_1.jpg)"></div>
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
                  <div class="user-img" style="background-image: url(temp/images/person_2.jpg)"></div>
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
          <div class="img" style="background-image: url(temp/images/groom-1.jpg);"></div>
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
          <div class="img" style="background-image: url(temp/images/groom-2.jpg);"></div>
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
          <div class="img" style="background-image: url(temp/images/groom-3.jpg);"></div>
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
          <a href="blog-single.html" class="block-20 rounded" style="background-image: url('temp/images/image_1.jpg');">
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
          <a href="blog-single.html" class="block-20 rounded" style="background-image: url('temp/images/image_2.jpg');">
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
          <a href="blog-single.html" class="block-20 rounded" style="background-image: url('temp/images/image_3.jpg');">
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

<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url(temp/images/bg-3.jpg);" id="clinic">
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
          <a class="img mr-4 rounded" style="background-image: url(images/image_1.jpg);"></a>
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
          <a class="img mr-4 rounded" style="background-image: url(images/image_2.jpg);"></a>
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
@endsection