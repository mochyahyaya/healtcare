<?php

namespace App\Http\Livewire\Admin;

use App\Models\Breeding;
use Livewire\Component;
use App\Models\Cage;
use App\Models\Hotel;
use App\Models\Pet;
use App\Models\User;
use Livewire\WithPagination;

class Breedings extends Component
{

    use WithPagination;
    
    public $modalFormVisible = false;
    public $modalDeleteVisible = false;
    public $modalDetailVisible = false;
    public $pet_id_1, $cage_id, $query, $user_id, $type_id, $cage_number;
    public $hotel_status = 'hotel';
    public $status = 'belum diproses';
    public $modelId;
    public $sortColumn = 'created_at';
    public $sortDirection = 'asc';
    public $sortBy = 'pet_id_1';       
    public $start_date = null;
    public $end_date = null;
    public $searchTerm;
    public $type= 1; 

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
            'pet_id_1' => 'required',
            'start_date' => 'required',
            'status' => 'required',
            'cage_id' => 'required',
            
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

        $data = Breeding::find($this->modelId);
        $this->user_id = $data->pets->users->name;
        $this->pet_id = $data->pets->name;
        $this->type_id = $data->pets->typepet->name;
        $this->start_date = $data->start_date;
        $this->status = $data->pets->typepet->name;
        $this->cage_id = $data->cages->typecages->alias;
        $this->cage_number = $data->cages->number;

    }

    public function loadModel()
    {
            $data = Breeding::find($this->modelId);
            $this->pet_id_1             = $data->pet_id_2;
            $this->selectedPet          = $data->pet_id_1;
            $this->start_date           = $data->start_date;
            $this->status               = $data->end_date;
            $this->cage_id              = $data->cage_id;
    }
        
    /**
     * create function
     *
     * @return void
     */
    public function create()
    {   
        $this->validate();
        Breeding::create($this->modelData());
        $this->modalFormVisible = false;
        $this->resetVars();
    }
    
    public function update()
    {
        $this->validate();
        Breeding::find($this->modelId)->update($this->modelData());
        $this->modalFormVisible = false;
    }

    public function delete()
    {
        Breeding::destroy($this->modelId);
        $this->modalDeleteVisible = false;
        $this->resetPage();
    }

    public function show()
    {
        $this->modalDetailVisible = false;
    }

    public function accept($id)
    {
        $hotel  = Breeding::findorFail($id);
        $hotel->status = 'dalam kandang';
        $hotel->save();
        $this->modalDetailVisible = false;
    }

    public function reject($id)
    {
        $hotel  = Breeding::findorFail($id);
        $hotel->status = 'ditolak';
        $hotel->save();
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
            'pet_id_1'          => $this->selectedPet,
            'pet_id_2'          => $this->pet_id_1,
            'start_date'        => $this->start_date,
            'status'            => 'proses',
            'cage_id'           => $this->cage_id,
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
             $this->pet_id_1 = null;
             $this->pet_id_2 = null;
             $this->start_date = null;
             $this->cage_id = null;
    }

    public function read()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return Breeding::where('pet_id_1', 'LIKE', $searchTerm)
        ->orderBy($this->sortColumn, $this->sortDirection)
        ->paginate(5);
    }

    public function pets()
    {
        return Pet::with('users')->get();
    }
    public function users()
    {
        // return User::where('role_id', '>', 2)->get();
        return User::all();
    }

    public function monitorings()
    {
        return view('livewire.admin.monitorings');
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

    public function cages()
    {
        return Cage::where('type_cage_id', '3')
        // ->where('count', '>', '2')
        ->get();
    }

    public function pet1()
    {
        return Pet::where('user_id', '1')->get();
    }

    public function updatedSelectedUser($user)
    {
        $this->pets = Pet::where('user_id', $user)->get();
        $this->selectedPet = NULL;
    }
    public function render()
    {
        return view('livewire.admin.breedings', 
        [
            'data' => $this->read(),
            'pet1' => $this->pet1(),
            'cages' => $this->cages(),
            'pets' => $this->pets(),
            'users' => $this->users(),
        ]);
    }
}
