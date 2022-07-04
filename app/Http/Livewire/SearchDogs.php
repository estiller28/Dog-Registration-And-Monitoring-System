<?php

namespace App\Http\Livewire;

use App\Models\Dogs;
use Livewire\Component;

class SearchDogs extends Component
{
    public $idNumber = '';
    public $dogInfo;


    public $rules = [
        'idNumber' => 'required',
    ];

    public function searchDogs(){
        $this->validate();
        $this->dogInfo = Dogs::with('barangay')->where('id_number', $this->idNumber)->get();

    }

    public function render()
    {
        return view('livewire.search-dogs');
    }
}
