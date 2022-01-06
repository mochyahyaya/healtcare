<?php

namespace App\Http\Livewire\User;

use App\Models\Breeding;
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
            'status'            => 'belum diproeses',
            'start_date'        => $this->start_date,
        ]);
    }
    public function render()
    {
        return view('livewire.user.user-breeding');
    }
}
