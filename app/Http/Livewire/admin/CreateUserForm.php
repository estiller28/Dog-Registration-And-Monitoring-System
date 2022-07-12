<?php

namespace App\Http\Livewire\admin;
use App\Models\Barangay;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CreateUserForm extends Component
{

    public $barangay_name = '';
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation ='';
    public $user = '';

    protected $rules = [
        'barangay_name' => 'required|unique:barangays',
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
        'password_confirmation' => 'required|same:password',

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function CreateUser(){
        $this->validate();

        $barangay = Barangay::create([
            'barangay_name' => $this->barangay_name,
        ]);

        $user = User::create([
            'barangay_id' => $barangay->id,
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $user->assignRole('CoAdmin');

        session()->flash('message', 'User created succesfully.');

        return redirect()->route('users.index');

    }


    public function render()
    {
        return view('livewire.admin.create-user-form', [
            'user' => $this->user
        ]);
    }
}
