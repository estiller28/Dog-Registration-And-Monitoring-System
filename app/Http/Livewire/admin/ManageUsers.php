<?php

namespace App\Http\Livewire\admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ManageUsers extends Component
{
    public $users;
    protected $listeners = ['delete'];

    public $readyToLoad = false;
    public function loadUsers(){
        $this->readyToLoad = true;
    }

    public function mount(){
        $this->users = User::with('barangay')->where('id', '!=', Auth::user()->id )->get();
    }

    public function render()
    {
        return view('livewire.admin.manage-users');
    }

    public function confirmDelete($id){
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => 'Are you sure?',
            'text' => '',
            'id' => $id,
        ]);
    }

    public function delete($id){

        User::find($id)->delete();
        $this->mount();
    }
}
