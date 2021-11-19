<div>
    <div class="form-group row">
        <label for="user" class="col-md-4 col-form-label text-md-right">{{ __('Nama Pemilik') }}</label>

        <div class="col-md-6">
            <select wire:model="selectedUser" class="form-control">
                <option value="" selected>Pilih Pemilik</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    @if (!is_null($selectedUser))
        <div class="form-group row">
            <label for="pet" class="col-md-4 col-form-label text-md-right">{{ __('Nama Hewan') }}</label>

            <div class="col-md-6">
                <select wire:model="selectedPet" class="form-control">
                    <option value="" selected>Pilih Hewan</option>
                    @foreach($pets as $pet)
                        <option value="{{ $pet->id }}">{{ $pet->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif
</div>
