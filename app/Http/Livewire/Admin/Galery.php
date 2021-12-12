<?php

namespace App\Http\Livewire\Admin;

use App\Models\Gallery;
use Livewire\Component;

class Galery extends Component
{
    public $petId;

    protected $listeners = [
        'getPetId',
    ];

    public function getPetId($petId)
    {
        $this->petId = $petId;
    }

    public function render()
    {
        return view('livewire.galery', [
            'galery' => Gallery::where('pet_id', '=', $this->petId)->get()
        ]);
    }
}
