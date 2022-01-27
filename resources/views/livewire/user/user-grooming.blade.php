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
