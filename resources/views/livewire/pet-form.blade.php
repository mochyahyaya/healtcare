<div>
    <label>Featured Image</label><br/>
    <input type="file" wire:model="featuredImage" />
    <br/><br/>

    <label>Galery</label><br/>
    <input type="file" wire:model="galery" multiple />
    <br/><br/>

    <label>Nama</label>
    <input wire:model="name" type="text" class="form-control"/>
    @if ($errors->has('title'))
        <p style="color: red;">{{$errors->first('title')}}</p>
    @endif

    <div class="mt-4">
        <x-jet-label for="type" value="{{ __('Jenis') }}" />
        <select class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" wire:model="type_id" >
         <option selected>-- Jenis Hewan --</option> 
           @foreach($typepets as $type)
            <option value="{{ $type->id }}">{{ $type->name}}</option>
            @endforeach
           </select>
           @error('type_id') <span class="error">{{ $message }}</span> @enderror
       </div> 

    <label>Ras</label>
    <input wire:model="race" type="text" class="form-control"/>
    @if ($errors->has('content'))
        <p style="color: red;">{{$errors->first('content')}}</p>
    @endif

    <label>Ukuran</label>
    <input wire:model="size" type="text" class="form-control"/>
    @if ($errors->has('content'))
        <p style="color: red;">{{$errors->first('content')}}</p>
    @endif

    <label>Berat</label>
    <input wire:model="weight" type="text" class="form-control"/>
    @if ($errors->has('content'))
        <p style="color: red;">{{$errors->first('content')}}</p>
    @endif

    <label>Warna</label>
    <input wire:model="colour" type="text" class="form-control"/>
    @if ($errors->has('content'))
        <p style="color: red;">{{$errors->first('content')}}</p>
    @endif

    <div class="mt-4">
        <x-jet-label for="birthday" value="{{ __('Ulang Tahun') }}" />
        <x-datetime-picker wire:model="birthday" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
        @error('birthday') <span class="error">{{ $message }}</span> @enderror
    </div>



    <br/>
    <button wire:click="save" class="btn btn-primary">Save</button>
   
</div>