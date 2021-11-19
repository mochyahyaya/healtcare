<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Home extends Component
{
    public function render()
    {
        $role = Auth::user()->role_id;
        if($role == 1){
            return view('livewire.admin.dashboard');
        }
        else if($role == 2 ){
            return view('livewire.veterinarian.dashboard');
        }
        else {
            return view('livewire.user.dashboard');
        }

    }
}
