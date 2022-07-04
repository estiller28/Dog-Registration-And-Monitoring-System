<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ManageUsers extends Component
{

    public $users;

    public function mount(){
        $this->users = User::with('barangay')->where('id', '!=', Auth::user()->id )->get();
    }

    public function render()
    {
        return view('livewire.manage-users');
    }
}
