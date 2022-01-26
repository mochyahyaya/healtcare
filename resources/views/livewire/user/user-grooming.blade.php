<div>
  <style>
  .hover-trigger .hover-target {
      display: none;
  }
  
  .hover-trigger:hover .hover-target {
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
                  <img src="../shine/assets/img/Logo.png" alt="Logo" style="width: 90px; height:45px">
                </a>
                <a  href="{{ route('user/dashboard')}}"><span class="inline font-mono font-semibold text-blue-500">Garden Petshop</span></a>
                <button class="navbar-toggler focus:outline-none block lg:hidden" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse hidden lg:block duration-300 shadow absolute top-100 left-0 mt-full bg-white z-20 px-5 py-3 w-full lg:static lg:bg-transparent lg:shadow-none" id="navbarSupportedContent">
                </div>
                @if (auth()->user()->role_id == 3)
                <div class="relative inline-block text-left">
                  <div>
                  <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition relative" id="menu-button" aria-expanded="true" aria-haspopup="true">
                    <img class="h-12 w-12 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                  </button>
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
  <div class="h-screen bg-blue-100 flex justify-center items-center">
	<div class="lg:w-2/5 md:w-1/2 w-2/3">
    <div>
      @if (session()->has('success'))
          <div class="bg-green-100 border-t border-b border-green-500 text-green-700 px-4 py-3" role="alert">
            <p class="font-bold">Berhasil</p>
            <p class="text-sm">{{ session('success') }}</p>
          </div>
      @endif
    </div>
		<form class="bg-white p-10 rounded-lg shadow-lg min-w-full mt-4" wire:submit.prevent="store">
			<h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Pendaftaran Grooming</h1>
        <div wire:model="pet_id">
          <label class="text-gray-800 font-semibold block my-3 text-md" for="username">Nama Hewan Peliharaan</label>
          <select class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none">
            <option selected>Pilih Pet</option>
            @foreach ($pet as $item)
                <option value="{{$item->id}}"> {{$item->name}} </option>
            @endforeach
          </select>
        </div>
        <div wire:model="service">
          <label class="text-gray-800 font-semibold block my-3 text-md" for="email">Jenis Grooming</label>
            <select class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none">
              <option selected>Jenis Grooming</option>
              <option value="standar">Standar</option>
              <option value="Jamur">Jamur</option>
              <option value="Kutu">Kutu</option>
            </select>
          </div>
          <div wire:model="size">
            <label class="text-gray-800 font-semibold block my-3 text-md" for="password">Ukuran</label>
            <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="password" id="password" placeholder="" />
              <p class="mt-2 text-blue-800 text-sm">
                Ukuran dalam bentuk S, M , L.
              </p>
          </div>
          <div wire:model="address">
            <label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Alamat</label>
            <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="confirm" id="confirm" placeholder="" />
          </div>
          <div class="mt-4">
            <button type="submit" class="mt-6 bg-blue-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">
              Grooms
            </button>
        </div>
		  </form>
	</div>
</div>
</div>
