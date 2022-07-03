<?php

namespace App\Http\Livewire;

use App\Models\Barangay;
use App\Models\Dogs;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class DogManagement extends Component
{

    public $barangay = '';
    public $dogs;
    public $allDogs;
    public $count;

    protected $rules = [
        'barangay' => 'required',

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

        $this->allDogs = Dogs::with('barangay')
            ->where('barangay_id', $this->barangay)
            ->get();

        $this->count = $this->allDogs->count();
    }

    public function export($all){

    }

    public function edit(){
        return view('livewire.create-user-form');
    }



    public function render(){

        return view('livewire.dog-management', [
            'count' => $this->count,
            'allDogs' => $this->allDogs
        ]);
    }
}
