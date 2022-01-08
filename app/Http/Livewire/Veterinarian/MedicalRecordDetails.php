<?php

namespace App\Http\Livewire\Veterinarian;

use App\Models\MedicalRecord;
use App\Models\Pet;
use Livewire\Component;

class MedicalRecordDetails extends Component
{
    public $pet_id;
    public $indication, $medication, $status;

    public function mount($id)
    {
        $this->pet_id = $id;
    }
    public function rules()
    {
        return [
        'indication'    => 'required',
        'medication'    => 'required'

        ];
    }

    public function records()
    {
        return Pet::where('id', $this->pet_id)->get();
    }

    public function store()
    {
       dd( MedicalRecord::create([
            'indication'    => $this->indication,
            'medication'    => $this->medication,
            'status'        => 'Sehat',
            'pet_id'        => $this->pet_id,
        ]));
    }

    public function render()
    {
        return view('livewire.veterinarian.medical-record-details', [
            'pet' => $this->records()
        ]);
    }
}
