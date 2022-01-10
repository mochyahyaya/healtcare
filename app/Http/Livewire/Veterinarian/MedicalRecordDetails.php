<?php

namespace App\Http\Livewire\Veterinarian;

<<<<<<< HEAD
use App\Models\MedicalRecord;
=======
>>>>>>> 4f6ea80115f246f41089d170d29baab21d181c17
use App\Models\Pet;
use Livewire\Component;

class MedicalRecordDetails extends Component
{
    public $pet_id;
<<<<<<< HEAD
    public $indication, $medication, $status;
=======
>>>>>>> 4f6ea80115f246f41089d170d29baab21d181c17

    public function mount($id)
    {
        $this->pet_id = $id;
    }
<<<<<<< HEAD
    public function rules()
    {
        return [
        'indication'    => 'required',
        'medication'    => 'required'

        ];
    }

=======
>>>>>>> 4f6ea80115f246f41089d170d29baab21d181c17
    public function records()
    {
        return Pet::where('id', $this->pet_id)->get();
    }
<<<<<<< HEAD

    public function store()
    {
       dd( MedicalRecord::create([
            'indication'    => $this->indication,
            'medication'    => $this->medication,
            'status'        => 'Sehat',
            'pet_id'        => $this->pet_id,
        ]));
    }

=======
>>>>>>> 4f6ea80115f246f41089d170d29baab21d181c17
    public function render()
    {
        return view('livewire.veterinarian.medical-record-details', [
            'pet' => $this->records()
        ]);
    }
}
