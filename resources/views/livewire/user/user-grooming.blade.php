{{-- @extends('layouts.user')

@section('content')
    <div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a> 
							<a href="#"><span class="fa fa-paper-plane mr-1"></span> youremail@email.com</a>
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
	    	<a class="navbar-brand" href="index.html"><span class="flaticon-pawprint-1 mr-2"></span>Pet sitting</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	        	<li class="nav-item active"><a href="vet.html" class="nav-link">Veterinarian</a></li>
	        	<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="gallery.html" class="nav-link">Gallery</a></li>
	          <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../temp/images/bg-1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Veterinarian <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Meet Our Veterinary Doctor</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-xl-7 col-lg-8 col-md-9 col-11" wire:ignore>
            <form wire:submit.prevent="store">
                <div class="form-group">
                    <label for="pet_id">Nama Hewan Peliharaan</label>
                    <select class="form-control" wire:model="pet_id">
                      <option selected>Pilih Binatang Peliharaan</option>
                        @foreach ($pet as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    @error('pet_id') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group" wire:ignore>
                    <label for="address">Alamat</label>
                    <input wire:model="address" type="text" class="form-control">
                    {{$address}}
                    @error('address') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group" wire:ignore>
                    <label for="size">Ukuran</label>
                    <input type="text" class="form-control" wire:model="size">
                    {{$services}}
                    @error('size') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group" wire:ignore>
                    <label for="service">Jenis Grooming</label>
                      <select class="form-control" wire:model="service">
                        <option selected>Pilih Jenis Grooming</option>
                        <option value="Standar">Standar</option>
                        <option value="Jamur">Jamur</option>
                        <option value="Kutu">Kutu</option>
                      </select>
                    @error('service') <small class="text-danger">{{ $message }}</small> @enderror
                  </div>
                  <button type="submit" class="inline-flex items-center px-4 py-2 bg-black border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition">
                    Simpan
                  </button>
            </form>
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

    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    
  @endsection --}}

  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Monitoring Penginapan Hewan
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white sm:rounded-lg">
            <div class="p-6">
                <div class="flex px-4 py-3 sm:px-6">
                 <div class="flex-1 float-left">
                     Kembali
                 </div>
                </div>

            <form wire:submit.prevent="store">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden border-b border-gray-200 sm:rounded-lg">
                              <div class="mt-4">
                                <x-jet-label for="pet_id" value="{{ __('Nama Pet') }}" />
                                <select class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" wire:model="pet_id"> 
                                      <option selected> -- Nama hewan --</option>
                                    @foreach ($pet as $item)
                                      <option value= "{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                  </select>
                                @error('pet_id') <span class="error">{{ $message }}</span> @enderror
                              </div>  
                                 @error('pet_id') <span class="error">{{ $message }}</span> @enderror
                                 <div class="block ml-2">
                                     
                                     <div class="mt-2">
                                         <div wire:model="address">
                                          <div class="mt-4">
                                            <x-jet-label for="total_day" value="{{ __('Alamat') }}" />
                                            <x-jet-input id="total_day" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="address" />
                                            @error('total_day') <span class="error">{{ $message }}</span> @enderror
                                          </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 @error('address') <span class="error">{{ $message }}</span> @enderror
                                 <div class="block ml-2">
                                  <span class="text-gray-700">Ukuran</span>
                                  <div class="mt-2">
                                      <div wire:model="size">
                                       <div class="mt-4">
                                         <x-jet-label for="total_day" value="{{ __('Ukuran') }}" />
                                         <x-jet-input id="total_day" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="size" />
                                         @error('size') <span class="error">{{ $message }}</span> @enderror
                                       </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="block ml-2">
                                <div class="mt-4">
                                  <x-jet-label for="service" value="{{ __('Jenis Grooming') }}" />
                                  <select class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" wire:model.debounce.800ms="service" >
                                      <option selected>Jenis Grooming</option>
                                      <option value="Standar">Standar</option>
                                      <option value="Kutu">Kutu</option>
                                      <option value="Jamur">Jamur</option>
                                    </select>
                                  @error('service') <span class="error">{{ $message }}</span> @enderror
                                </div>
                              </div>
                                <div class="mt-4">
                                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-black border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                 <div class="mt-5">

                 </div>
             </div>
        </div>
    </div>
  </div>
