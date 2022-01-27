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
<<<<<<< HEAD
        return Pet::where('user_id', '1')->get();
=======
        return (Pet::where('user_id', '1'));
>>>>>>> 40e4a02 (enchance(user): create login and register ui)
=======
        return Pet::where('user_id', '1')->get();
>>>>>>> 6780c05 (enchance(user): add logout)
    }
    public function render()
    {
        return view('livewire.user.dashboard',[
            'image' => $this->imagecoursel()
        ]);
    }
}