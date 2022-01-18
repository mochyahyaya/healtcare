<?php

namespace App\Http\Livewire\User;

use App\Models\Hotel;
use App\Models\Pet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithPagination;

class UserBoarding extends Component
{
    public $pet_id, $size, $total_day;
    public $start_date = null;
    public $end_date = null;

    public function store()
    {
        $this->validate([
            'pet_id'            => 'required',
            'size'              => 'required',
            'start_date'        => 'required',
            'end_date'          => 'required',
            'total_day'         => 'required',
        ]);

        Hotel::create([
            'pet_id'          => $this->pet_id,
            'size'            => $this->size,
            'start_date'      => $this->start_date,
            'end_date'        => $this->end_date,
            'total_day'       => $this->total_day
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
        if(Gate::denies('manage-users')){
            abort(403);
        }
        return view('livewire.user.user-boarding', [
            'pet'  => $this->pet(),
        ])->extends('layouts.user')->section('content');;
    }
}
