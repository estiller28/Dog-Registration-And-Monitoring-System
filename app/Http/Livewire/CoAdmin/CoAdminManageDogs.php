<?php

namespace App\Http\Livewire\CoAdmin;

use App\Models\Dogs;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CoAdminManageDogs extends Component
{
    public $allDogs;

    public function mount(){
        $this->allDogs = Dogs::where('barangay_id', Auth::user()->barangay_id)->get();
    }

    public function render()
    {
        return view('livewire.co-admin.co-admin-manage-dogs');
    }
}
