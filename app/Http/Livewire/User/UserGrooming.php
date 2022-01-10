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
    public $services = "hahaha";

    public function rules()
    {
        return
<<<<<<< HEAD
          [  
=======
          [
>>>>>>> 4f6ea80115f246f41089d170d29baab21d181c17
            'pet_id'            => 'required',
            'size'              => 'required',
            'service'           => 'required',
            'address'           => 'required',
          ];
    }
    public function store()
    {
<<<<<<< HEAD
=======
//        dd('test');

>>>>>>> 4f6ea80115f246f41089d170d29baab21d181c17
        Groom::create([
            'pet_id'          => $this->pet_id,
            'size'            => $this->size,
            'service'         => $this->service,
            'address'         => $this->address,
<<<<<<< HEAD
           
        ]); 
=======

        ]);
>>>>>>> 4f6ea80115f246f41089d170d29baab21d181c17

        session()->flash('success', 'Berhasil mendaftarkan grooming.');
        return redirect()->to('/user/dashboard');
    }

    public function pet()
    {
        return Pet::where('user_id', Auth::user()->id)->get();
    }

    public function render()
    {
        return view('livewire.user.user-grooming', [
            'pet'  => $this->pet(),
<<<<<<< HEAD
        ]);
=======
        ])->extends('layouts.user')->section('main');
>>>>>>> 4f6ea80115f246f41089d170d29baab21d181c17
    }
}
