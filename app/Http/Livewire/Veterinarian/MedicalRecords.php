<?php

namespace App\Http\Livewire\Veterinarian;

use App\Models\Pet;
use App\Models\User;
use Livewire\Component;

class MedicalRecords extends Component
{   
    public $user_id;
    public function users()
    {
        return User::all();
    }

    public function pets()
    {
        return Pet::where('user_id', '=', $this->user_id);
    }
    public function render()
    {
        return view('livewire.veterinarian.medicalRecords', [
            'users' => $this->users(),
            'pets'  => $this->pets(),
        ]);
    }
}
