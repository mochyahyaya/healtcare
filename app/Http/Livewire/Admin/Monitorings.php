<?php

namespace App\Http\Livewire\Admin;

use App\Models\Hotel;
use App\Models\Monitoring;
use App\Models\Pet;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Monitorings extends Component
{
    use WithPagination,WithFileUploads;

    public $enumfood          = ['Normal', 'Tidak Normal'];
    public $enumtemperature   = ['Normal', 'Tidak Normal'];
    public $enummedicine      = ['Sudah', 'Tidak Perlu'];
    public $food, $temperature, $medicine, $notes, $hotel_id;
    public $photo = [];

    public function mount($id)
    {
        $this->hotel_id = $id;
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
        Monitoring::create([
            'food'          => $this->food,
            'hotel_id'      => $this->hotel_id,
            'temperature'   => $this->temperature,
            'medicine'      => $this->medicine,
            'notes'         => $this->notes,
            'photo'         => $this->photo,
        ]); 
    }

    public function read()
    {
        return Monitoring::all();
    }

    public function render()
    {
        return view('livewire.admin.monitorings', [
            'data' => $this->read(),
        ]);
    }
}
