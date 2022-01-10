<?php

namespace App\Http\Livewire\User;

use App\Models\Hotel;
use App\Models\Pet;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class UserBoarding extends Component
{
<<<<<<< HEAD
    public $pet_id, $size;
=======
    public $pet_id, $size, $total_day;
>>>>>>> 4f6ea80115f246f41089d170d29baab21d181c17
    public $start_date = null;
    public $end_date = null;

    public function store()
    {
        $this->validate([
            'pet_id'            => 'required',
            'size'              => 'required',
            'start_date'        => 'required',
            'end_date'          => 'required',
<<<<<<< HEAD
=======
            'total_day'         => 'required',
>>>>>>> 4f6ea80115f246f41089d170d29baab21d181c17
        ]);

        Hotel::create([
            'pet_id'          => $this->pet_id,
            'size'            => $this->size,
            'start_date'      => $this->start_date,
            'end_date'        => $this->end_date,
<<<<<<< HEAD
           
=======
            'total_day'       => $this->total_day
>>>>>>> 4f6ea80115f246f41089d170d29baab21d181c17
        ]); 

        session()->flash('success', 'Berhasil mendaftarkan boarding.');
        return redirect()->to('/user/dashboard');
    }

    public function pet()
    {
        return Pet::where('user_id', Auth::user()->id)->get();
    }

    public function render()
    {
        return view('livewire.user.user-boarding', [
            'pet'  => $this->pet(),
<<<<<<< HEAD
        ]);
=======
        ])->extends('layouts.user')->section('main');;
>>>>>>> 4f6ea80115f246f41089d170d29baab21d181c17
    }
}
