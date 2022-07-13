<?php

namespace App\Http\Livewire\admin;

use App\Models\Barangay;
use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Rule;
class UserEdit extends Component
{
    public $barangay_name, $name, $email, $password, $password_confirmation;

    public User $user;
    public $uid;

    public function mount($user){
        $this->uid = $user->id;
        $this->barangay_name = $user->barangay->barangay_name;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
    }

    protected function rules(){
        return [
            'barangay_name' => 'required|unique:barangays,barangay_name,'. $this->user->barangay_id,
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'. $this->uid,
            'password' => 'required|min:8',
            'password_confirmation' => 'nullable|same:password',
        ];
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.admin.user-edit');
    }

    public function updateUser(){
        $this->validate();

        $user = $this->user->barangay->id;

       Barangay::where('id', $user)
            ->update([
                'barangay_name' => $this->barangay_name,
            ]);

        User::find($this->uid)->update([
            'name'        => $this->name,
            'email'       => $this->email,
            'password'    => $this->password,
        ]);

        $this->dispatchBrowserEvent('toastr:info', [
            'type' => 'info',
            'message' => 'User updated successfully',
        ]);
    }
}