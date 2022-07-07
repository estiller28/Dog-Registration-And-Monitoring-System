<?php

namespace App\Http\Livewire\admin;

use App\Models\Dogs;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public $dogRegistered;
    public $allUsers;

    public function mount(){
        $this->dogRegistered = Dogs::count();
        $this->allUsers = User::where('id', '!=', 1)->count();
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
