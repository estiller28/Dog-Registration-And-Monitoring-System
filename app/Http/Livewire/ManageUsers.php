<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ManageUsers extends Component
{
    public function render()
    {
        return view('livewire.manage-users', [
            'users' => User::with('barangay')->where('id', '!=', Auth::user()->id )->get()]);
    }
}
