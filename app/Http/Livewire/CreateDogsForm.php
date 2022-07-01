<?php

namespace App\Http\Livewire;

use App\Models\Barangay;
use Livewire\Component;

class CreateDogsForm extends Component
{
    public $barangays;
    public $barangay;
    public $purok;
    public $currentPurok;

    public function mount(){

        $this->barangays = Barangay::orderBy('barangay_name', 'asc')->get();


    }

    public function render()
    {
        return view('livewire.create-dogs-form');
    }

    protected $rules = [
        'barangay' => 'required',
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
        'password_confirmation' => 'nullable|same:password',

    ];
}
