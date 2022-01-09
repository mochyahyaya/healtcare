<?php

namespace App\Http\Livewire\User;

use App\Models\Pet;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DashboardU extends Component
{
    public function imagecoursel()
    {
        return Pet::where('user_id', '1')->get();
    }
    public function render()
    {
        return view('livewire.user.dashboard',[
            'image' => $this->imagecoursel()
        ]);
    }
}