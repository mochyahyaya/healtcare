<?php

namespace App\Http\Livewire\Veterinarian;

use App\Models\MedicalRecord;
use App\Models\Pet;
use App\Models\TypeVaccinee;
use Livewire\Component;

class MedicalRecordDetails extends Component
{
    public $pet_id, $indication, $treatment, $status, $vaccinee;

    public function mount($id)
    {
        $this->pet_id = $id;
    }
    public function records()
    {
        return Pet::where('id', $this->pet_id)->get();
    }
    public function store()
    {
        dd('test');

        $this->validate([
            'indication'    => 'required',
            'treatment'     => 'required',
        ]);

        MedicalRecord::create([
            'pet_id'     => $this->pet_id,
            'indication' => $this->indication,
            'treatment'  => $this->treatment,
            'vaccinee'   => $this->vaccinee, 
            'status'     => 'Sehat'
        ]);
    }

    public function vaccinee()
    {
        return TypeVaccinee::all();
    }

    public function medicals()
    {
        return MedicalRecord::where('pet_id', $this->pet_id)->get();
    }
    public function render()
    {
        return view('livewire.veterinarian.medical-record-details', [
            'pet' => $this->records(),
            'vaccinees' => $this->vaccinee(),
            'medicals' => $this->medicals()            
        ]);
    }
}
