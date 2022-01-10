<?php

namespace App\Http\Livewire\User;

use App\Models\Pet;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DashboardU extends Component
{
    public function imagecoursel()
    {
<<<<<<< HEAD
        return (Pet::where('user_id', '1'));
=======
        return Pet::where('user_id', '1')->get();
>>>>>>> 4f6ea80115f246f41089d170d29baab21d181c17
    }
    public function render()
    {
        return view('livewire.user.dashboard',[
            'image' => $this->imagecoursel()
        ]);
    }
}