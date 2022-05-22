<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\MonitoringBreeding;

class BreedingMonitorings extends Component
{
    use WithPagination,WithFileUploads;

    public $enumfood          = ['Normal', 'Tidak Normal'];
    public $enumtemperature   = ['Normal', 'Tidak Normal'];
    public $enummedicine      = ['Sudah', 'Tidak Perlu'];
    public $food, $temperature, $medicine, $notes, $breeding_id;
    public $photo = [];

    public function mount($id)
    {
        $this->breeding_id = $id;
    }

    public function store()
    {
        $this->validate([
            'food'              => 'required',
            'temperature'       => 'required',
            'medicine'          => 'required',
            'notes'             => 'required',
            'photo.*'           => 'required',
        ]);

        if (!empty($this->photo)){
            foreach($this->photo as $key=>$galeries){
                $this->photo[$key] = $galeries->store('public/boardmonitoring');
            }
        }
        $this->photo = json_encode($this->photo); 
        MonitoringBreeding::create([
            'food'          => $this->food,
            'breeds_id'     => $this->breeding_id,
            'temperature'   => $this->temperature,
            'medicine'      => $this->medicine,
            'notes'         => $this->notes,
            'photo'         => $this->photo,
        ]); 
    }

    public function read()
    {
        return MonitoringBreeding::all();
    }

    public function render()
    {
        return view('livewire.admin.breeding-monitorings');
    }
}
