<?php

namespace App\Http\Livewire;
use App\Models\Barangay;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CreateUserForm extends Component
{

    public $barangay = '';
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation ='';


    protected $rules = [
        'barangay' => 'required',
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
        'password_confirmation' => 'nullable|same:password',

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function CreateUser(){
        $this->validate();

        $barangay = Barangay::create([
            'barangay_name' => $this->barangay,
        ]);

        $user = User::create([
            'barangay_id' => $barangay->id,
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $user->assignRole('CoAdmin');

        session()->flash('message', 'User created succesfully.');
        return redirect()->route('user.index');


    }


    public function render()
    {
        return view('livewire.create-user-form');
    }
}
