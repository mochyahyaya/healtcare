<?php

namespace App\Http\Livewire\User;

use App\Models\Breeding;
use App\Models\Pet;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserBreeding extends Component
{
    public $pet1, $pet2, $status, $start_date;

    public function rules()
    {
        return [
            'pet1'          => 'required',
            'pet2'          => 'required',
            'status'        => 'required',
            'start_date'    => 'required',
        ];
    }
    public function store()
    {
        Breeding::create([ 
            'pet_id_1'          => $this->pet1,
            'pet_id_2'          => $this->pet2,
            'status'            => 'belum diproses',
            'start_date'        => $this->start_date,
        ]);

        session()->flash('success', 'Berhasil mendaftarkan boarding.');
        return redirect()->to('/user/dashboard');
    }
    public function pet()
    {
        return Pet::where('user_id', Auth::user()->id)->get();
    }
    public function pets2()
    {
        return Pet::where('user_id', '1')->get();
    }
    public function render()
    {
        return view('livewire.user.user-breeding', [
            'pet'   => $this->pet(),
            'pet2'  => $this->pets2()
        ]);
    }
}
