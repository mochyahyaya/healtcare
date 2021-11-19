<?php

namespace App\Http\Livewire;

use App\Models\Groom;
use App\Models\Pet;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Grooms extends Component
{
    use WithPagination;
    public $modalFormVisible = false;
    public $modalDeleteVisible = false;
    public $modalDetailVisible = false;
    public $pet_id, $type, $size, $service, $address;
    public $status = 'belum diproses';
    public $modelId;
    public $search='';
    public $sortDirection = 'asc';
    public $sortBy = 'pet_id';    
    public $perPage = 10;
    /**
     * function for validation
     *
     * @return void
     */
    public function rules()
    {
        return [
            'pet_id' => 'required',
            'size' => 'required',
            'service' => 'required',
            'address' => 'required',
            'type'  => 'required'
            
        ];
    }

    public function mount()
    {
        $this->resetPage();
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
        $this->type = $data->type;
        $this->size = $data->size;
        $this->service = $data->service;
        $this->status = $data->status;
        $this->address = $data->address;
    }

    public function loadModel()
    {
        $data = Groom::find($this->modelId);
        $this->pet_id = $data->pet_id;
        $this->type = $data->type;
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

    public function process($id)
    {

        $groom  = Groom::findorFail($id);
        $groom->status = 'diproses';
        $groom->save();
        $this->modalDetailVisible = false;
    }

    public function finish($id)
    {
        $groom = Groom::findorFail($id);
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
            'pet_id'   => $this->pet_id,
            'type'      => $this->type,
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
        return Pet::all();
    }

    public function users()
    {
        return User::all();
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
