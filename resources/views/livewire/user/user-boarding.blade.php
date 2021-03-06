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
			<h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Pendaftaran Boarding</h1>
			<div wire:model="pet_id">
				<label class="text-gray-800 font-semibold block my-3 text-md" for="username">Nama Hewan Peliharaan</label>
				<select class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none">
                <option selected>Pilih Pet</option>
                    @foreach ($pet as $item)
                        <option value="{{$item->id}}"> {{$item->name}} </option>
                    @endforeach
                </select>
            </div>
            <div class="mt-4">
                <x-jet-label for="size" value="{{ __('Ukuran') }}" />
                <x-jet-input id="size" class="block mt-1 w-full" type="text" wire:model="size" />
                @error('size') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="start_date" value="{{ __('Tanggal Mulai') }}" />
                <x-datetime-picker wire:model="start_date" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                @error('start_date') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="end_date" value="{{ __('Tanggal Berakhir') }}" />
                <x-datetime-picker wire:model="end_date" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                @error('end_date') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="total_day" value="{{ __('Total Day') }}" />
                <x-jet-input id="total_day" class="block mt-1 w-full" type="text" wire:model="total_day" />
                @error('total_day') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div>
                <button type="submit" class="mt-6 bg-blue-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Book</button>
            </div>
		</form>
	</div>
</div>