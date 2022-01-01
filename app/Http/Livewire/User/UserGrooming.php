<?php

namespace App\Http\Livewire\User;

use App\Models\Groom;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class UserGrooming extends Component
{
    public $pet_id, $size, $service, $address;
    public $services = 'standar';

    public function store()
    {
        $this->validate([
            'pet_id'            => 'required',
            'size'              => 'required',
            'service'           => 'required',
            'address'           => 'required',
        ]);

        Groom::create([
            'pet_id'          => $this->pet_id,
            'size'            => $this->size,
            'service'         => $this->service,
            'address'         => $this->address,
           
        ]); 
    }

    public function pet()
    {
        return Pet::where('user_id', Auth::user()->id)->get();
    }

    public function render()
    {
        return view('livewire.user.user-grooming', [
            'pet'  => $this->pet(),
        ]);
    }
}
