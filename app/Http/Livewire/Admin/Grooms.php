<?php

namespace App\Http\Livewire\Admin;

use App\Models\Groom;
use App\Models\Pet;
use App\Models\User;
use App\Models\Hotel;
use Livewire\Component;
use Livewire\WithPagination;

class Grooms extends Component
{
    use WithPagination;
    public $modalFormVisible = false;
    public $modalDeleteVisible = false;
    public $modalDetailVisible = false;
    public $pet_id, $user_id, $type_id, $size, $service, $address;
    public $status = 'belum diproses';
    public $modelId;
    public $search='';
    public $sortDirection = 'asc';
    public $sortBy = 'pet_id';    
    public $perPage = 10;
    public $selectedUser = null;
    public $selectedPet = null;
    /**
     * function for validation
     *
     * @return void
     */
    public function rules()
    {
        return [
            'selectedPet' => 'required',
            'size' => 'required',
            'service' => 'required',
            'address' => 'required',
            
        ];
    }

    public function mount($selectedPet=null)
    {
        $this->resetPage();

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

    /**
     * Show the form modal
     * of create function
     * @return void
     */
    public function createShowModal()
    {
        $this->resetValidation();
        $this->resetVars();
        $this->modalFormVisible = true;
    }

    public function updateShowModal($id)
    {
        $this->resetValidation();
        $this->resetVars();
        $this->modelId = $id;
        $this->modalFormVisible = true;
        $this->loadModel();
    }

    public function deleteShowModal($id)
    {
        $this->modelId = $id;
        $this->modalDeleteVisible = true;
    }

    public function detailShowModal($id)
    {
        $this->modelId = $id;
        $this->modalDetailVisible = true;

        $data = Groom::find($this->modelId);
        $this->user_id = $data->pets->users->name;
        $this->pet_id = $data->pets->name;
        $this->type_id = $data->pets->typepet->name;
        $this->size = $data->size;
        $this->address = $data->address;
        $this->status = $data->status;
        $this->service = $data->service;

    }

    public function loadModel()
    {
        $data = Groom::find($this->modelId);
        $this->pet_id = $data->pet_id;
        $this->type_id = $data->type_id;
        $this->size = $data->size;
        $this->service = $data->service;
        $this->status = $data->status;
        $this->address = $data->address;
    }
        
    /**
     * create function
     *
     * @return void
     */
    public function create()
    {   
        $this->validate();
        Groom::create($this->modelData());
        $this->modalFormVisible = false;
        $this->resetVars();
    }
    
    public function update()
    {
        $this->validate();
        Groom::find($this->modelId)->update($this->modelData());
        $this->modalFormVisible = false;
    }

    public function delete()
    {
        Groom::destroy($this->modelId);
        $this->modalDeleteVisible = false;
        $this->resetPage();
    }

    public function show()
    {
        $this->modalDetailVisible = false;
    }

    public function process()
    {
        $groom  = Groom::findorFail($this->modelId);
        $groom->status = 'diproses';
        $groom->save();
        $this->modalDetailVisible = false;
    }

    public function finish()
    {
        $groom = Groom::findorFail($this->modelId);
        $groom->status = 'selesai';
        $groom->save();
        $this->modalDetailVisible = false;
    }
    
    /**
     * Fill model to create data
     *
     * @return void
     */
    public function modelData()
    {
        return [
            'pet_id'    => $this->selectedPet,
            'size'      => $this->size,
            'service'   => $this->service,
            'status'    => $this->status,
            'address'   => $this->address,
        ];
    }
    
    /**
     * function for reset
     *
     * @return void
     */
    public function resetVars()
    {        
             $this->modelId = null;   
             $this->pet_id = null;
             $this->size = null;
             $this->service = null;
             $this->address = null;
    }
    public function sortBy($field)
    {
            if($this->sortDirection =='asc'){
                $this->sortDirection ='desc';
            } else {
                $this->sortDirection = 'asc';
            }

            return $this->sortBy = $field;
    }

    public function pets()
    {
        return Pet::with('users')->get();
    }

    public function users()
    {
        return User::all();
    }

    public function updatedSelectedUser($user)
    {
        $this->pets = Pet::where('user_id', $user)->get();
        $this->selectedPet = NULL;
    }
    
    public function read()
    {
        return Groom::query()
        ->search($this->search)
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate($this->perPage);
    }


    public function render()
    {
        return view('livewire.admin.grooms', [
            'data' => $this->read(),
            'pets' => $this->pets(),
            'users' => $this->users(),
        ]);
    }
}
