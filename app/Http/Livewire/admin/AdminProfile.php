<?php

namespace App\Http\Livewire\admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use Livewire\Component;

class AdminProfile extends Component
{
    public $name, $email, $password, $password_confirmation, $uid;

    public $readyToload = false;
    public function userProfile(){
        $this->readyToload = true;
    }

    public function mount(){
        $this->uid = Auth::user()->id;
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;

    }

    protected function rules(){
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.  $this->uid,
            'password' => 'required|min:8',
            'password_confirmation' => 'same:password',
        ];
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }



    public function updateProfile(){
        $this->validate();

        User::find($this->uid)->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->dispatchBrowserEvent('toastr:info', [
            'type' => 'info',
            'message' => 'Account updated successfully',
        ]);

    }

    public function render()
    {
        return view('livewire.admin.admin-profile');
    }
}
