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

    protected $listeners = ['updatePassword'];

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

    public function updateName(){
        $this->validate([
            'name' => 'required'
        ]);

        User::find($this->uid)->update([
            'name' => $this->name,
        ]);

        $this->dispatchBrowserEvent('toastr:info', [
            'type' => 'info',
            'message' => 'Name updated successfully!',
        ]);
    }

    public function updateEmail(){
        $this->validate([
            'email' => 'required|email|unique:users,email,'.  $this->uid,
        ]);

        User::find($this->uid)->update([
            'name' => $this->name,
        ]);

        $this->dispatchBrowserEvent('toastr:info', [
            'type' => 'info',
            'message' => 'Email updated successfully!',
        ]);
    }

    public function confirmUpdatePassword(){
        $this->validate([
            'password' => 'required|min:8'
        ]);
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'info',
            'title' => 'Are you sure?',
            'text' => 'Your account will be logged out immediately!',
        ]);
    }

    public function updatePassword(){
        User::find($this->uid)->update([
            'password' => bcrypt($this->password)
        ]);


        $this->dispatchBrowserEvent('toastr:info', [
            'type' => 'info',
            'message' => 'Password updated successfully!',
        ]);

        Auth::logout();



        return redirect()->route('dashboard');


    }

    public function render()
    {
        return view('livewire.admin.admin-profile');
    }
}
