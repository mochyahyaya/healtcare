<?php

namespace App\Http\Livewire\Admin;

use App\Models\Hotel;
use App\Models\Monitoring;
use Livewire\Component;
use Livewire\WithPagination;

class Monitorings extends Component
{
    public $enumfood          = ['Normal', 'Tidak Normal'];
    public $enumtemperature   = ['Normal', 'Tidak Normal'];
    public $enummedicine      = ['Sudah', 'Tidak Perlu'];
    public $food, $temperature, $medicine, $notes, $hotel_id;

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
//            'notes'             => 'required',
        ]);

        Monitoring::create([
            'food'          => $this->food,
            'hotel_id'      => $this->hotel_id,
            'temperature'   => $this->temperature,
            'medicine'      => $this->medicine,
//            'notes'         => $this->notes,
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
