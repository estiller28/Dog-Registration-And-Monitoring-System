<?php

namespace App\Http\Livewire;

use App\Models\Barangay;
use App\Models\Dogs;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class DogManagement extends Component
{

    public $users = '';
    public $dogs;
    public $all;
    public $count;

    protected $rules = [
       'users' => 'required',

    ];

    public $readyToLoad = false;

    public function loadDogs()
    {
        $this->readyToLoad = true;
    }

    public function mount(){
        $this->dogs  = Barangay::orderBy('barangay_name', 'asc')->get();
    }

    public function getDogs(){
        $this->validate();
        $this->all = User::with('barangay')->where('barangay_id', $this->users)
          ->get();

        $this->count = $this->all->count();
    }

    public function export($all){

    }

    public function render(){

        return view('livewire.dog-management', [
            'count' => $this->count,
            'allUsers' => $this->all
        ]);
    }
}
