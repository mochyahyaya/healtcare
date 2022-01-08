<?php

namespace App\Http\Livewire\Veterinarian;

use App\Models\Pet;
use Livewire\Component;

class MedicalRecordDetails extends Component
{
    public $pet_id;

    public function mount($id)
    {
        $this->pet_id = $id;
    }
    public function records()
    {
        return Pet::where('id', $this->pet_id)->get();
    }
    public function render()
    {
        return view('livewire.veterinarian.medical-record-details', [
            'pet' => $this->records()
        ]);
    }
}
