<?php

namespace App\Http\Livewire\admin;

use App\Models\Dogs;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public $dogRegistered;
    public $allUsers;
    public $recentlyAdded;

    public $readyToLoad = false;
    public function loadDogs(){
        $this->readyToLoad = true;
    }

    public function mount(){
        $this->recentlyAdded = Dogs::with('barangay')->latest()->limit(5)->get();
        $this->dogRegistered = Dogs::count();
        $this->allUsers = User::where('id', '!=', 1)->count();
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
