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
          [
            'pet_id'            => 'required',
            'size'              => 'required',
            'service'           => 'required',
            'address'           => 'required',
          ];
    }
    public function store()
    {
//        dd('test');

        Groom::create([
            'pet_id'          => $this->pet_id,
            'size'            => $this->size,
            'service'         => $this->service,
            'address'         => $this->address,
<<<<<<< HEAD

        ]);
=======
           
        ]); 
>>>>>>> 0463140 (enchance(user): add template, crud)

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
        ])->extends('layouts.user')->section('main');
    }
}
