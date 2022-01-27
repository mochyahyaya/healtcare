<?php

namespace App\Http\Livewire\Admin;

use App\Models\Cage;
use App\Models\Hotel;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithPagination;

class Hotels extends Component
{
    use WithPagination;
    
    public $modalFormVisible = false;
    public $modalDeleteVisible = false;
    public $modalDetailVisible = false;
    public $pet_id, $size, $total_day, $cage_id, $query, $user_id, $type_id, $cage_number;
    public $hotel_status = 'hotel';
    public $status = 'dalam kandang';
    public $modelId;
    public $sortColumn = 'created_at';
    public $sortDirection = 'asc';
    public $sortBy = 'pet_id';       
    public $start_date = null;
    public $end_date = null;
    public $searchTerm;
    public $type= 1; 
    public $petname;

    public $selectedUser = null;
    public $selectedPet = null;
    public $pet = null;
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
            'start_date' => 'required',
            'end_date' => 'required',
            // 'cage_id' => 'required',
            
        ];
    }

    public function mount($selectedPet=null)
    {
        $this->resetPage();

        $this->users = User::where('role_id', 3)->get();
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

        $data = Hotel::find($this->modelId);
        $this->user_id = $data->pets->users->name;
        $this->pet_id = $data->pets->name;
        $this->type_id = $data->pets->typepet->name;
        $this->size = $data->size;
        $this->start_date = $data->start_date;
        $this->end_date = $data->end_date;
        $this->total_day = $data->total_day;
        $this->cage_id = $data->cages->typecages->alias ?? '';
        $this->cage_number = $data->cages->number ?? '';

    }

    public function loadModel()
    {
        $data = Hotel::find($this->modelId);
        $this->pet_id = $data->pet_id;
        $this->size = $data->size;
        $this->start_date = $data->start_date;
        $this->end_date = $data->end_date;
        $this->total_day = $data->total_day;
        $this->cage_id = $data->cage_id;
        $this->type_id = $data->pets->typepet->name;
    }
        
    /**
     * create function
     *
     * @return void
     */
    public function create()
    {   
        $this->validate();
        Hotel::create($this->modelData());
        $this->modalFormVisible = false;
        $this->resetVars();
    }
    
    public function update()
    {
        $this->validate();
        Hotel::find($this->modelId)->update($this->modelData());
        $this->modalFormVisible = false;
    }

    public function delete()
    {
        Hotel::destroy($this->modelId);
        $this->modalDeleteVisible = false;
        $this->resetPage();
    }

    public function show()
    {
        $this->modalDetailVisible = false;
    }

    public function accept()
    {
        $hotel  = Hotel::findorFail($this->modelId);;
        $hotel->status = 'dalam kandang';
        $hotel->save();
        $this->modalDetailVisible = false;
    }

    public function reject()
    {
        $hotel  = Hotel::findorFail($this->modelId);
        $hotel->status = 'selesai';
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

            'pet_id'        => $this->selectedPet,
            'size'          => $this->size,
            'start_date'    => $this->start_date,
            'end_date'      => $this->end_date,
            'total_day'     => $this->total_day,
            'cage_id'       => $this->cage_id,
            'hotel_status'  => $this->hotel_status, 
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
             $this->start_date = null;
             $this->end_date = null;
             $this->total_day = null;
             $this->cage_id = null;
             $this->selectedUser = null;
             $this->selectedPet = null;
             $this->type = null;
    }

    public function read()
    {
        // $petname = $this->petname
        $searchTerm = '%'.$this->searchTerm.'%';
        return Hotel::where('pet_id', 'LIKE', $searchTerm)
        ->orderBy($this->sortColumn, $this->sortDirection)
        ->paginate(5);
    }

    public function pets()
    {
        return Pet::with('users')->get(); 
    }
    public function users()
    {
        return User::where('role_id', '>', 2)->get();
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

    public function cats()
    {
        return Cage::where('type_cage_id', '1')->get();
    }

    public function dogs()
    {
        return Cage::where('type_cage_id', '2')->get();
    }

    public function cages()
    {
        return Cage::all();
    }

    public function updatedSelectedUser($user)
    {
        $this->pet = Pet::where('user_id', $user)->get();
        $this->selectedPet = NULL;
    }

    public function render()
    {
        if(Gate::denies('manage-admins')){
            abort(403);
        }
        return view('livewire.admin.hotels', [
            'data' => $this->read(),
            'cats' => $this->cats(),
            'dogs' => $this->dogs(),
            'cages' => $this->cages(),
            'pets' => $this->pets(),
            'users' => $this->users(),
        ]);
    }
}
