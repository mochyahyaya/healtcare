<?php

namespace App\Http\Livewire\Veterinarian;

use App\Models\Pet;
use Livewire\Component;

class MedicalrecordUsers extends Component
{
    public $user_id;
    public function mount($id)
    {
        $this->user_id = $id;
    }

    public function petusers()
    {
        return Pet::where('user_id', $this->user_id)->get();
    }
    public function render()
    {
        return view('livewire.veterinarian.medicalrecord-users', [
            'pet' => $this->petusers()
        ]);
    }
}
