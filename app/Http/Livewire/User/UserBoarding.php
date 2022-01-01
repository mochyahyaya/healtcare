<?php

namespace App\Http\Livewire\User;

use App\Models\Groom;
use App\Models\Monitoring;
use App\Models\Pet;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Livewire\Component;
use Livewire\WithPagination;

class UserBoarding extends Component
{
    public $pet_id, $user_id, $type_id, $size, $service, $address;
    public $selectedUser = null;
    public $selectedPet = null;

    public function mount($selectedPet=null)
    {
        $this->users = User::all();
        $this->pets = collect();
        $this->selectedPet = $selectedPet;

        if (!is_null($selectedPet)) {
            $pet = Pet::with('users')->find($selectedPet);
            if ($pet) {
                $this->pets = Pet::where('user_id', $pet->user_id)->get();
                $this->selectedUser = $pet->user_id;
            }
        }
    }


    public function render()
    {
        return view('livewire.user.user-boarding');
    }
}
