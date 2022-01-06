<?php

namespace App\Http\Livewire\User;

use App\Models\Hotel;
use App\Models\Pet;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class UserBoarding extends Component
{
    public $pet_id, $size;
    public $start_date = null;
    public $end_date = null;

    public function store()
    {
        $this->validate([
            'pet_id'            => 'required',
            'size'              => 'required',
            'start_date'        => 'required',
            'end_date'          => 'required',
        ]);

        Hotel::create([
            'pet_id'          => $this->pet_id,
            'size'            => $this->size,
            'start_date'      => $this->start_date,
            'end_date'        => $this->end_date,
           
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
        ]);
    }
}
