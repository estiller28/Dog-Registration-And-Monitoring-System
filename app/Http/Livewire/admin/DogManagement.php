<?php

namespace App\Http\Livewire\admin;

use App\Models\Barangay;
use App\Models\Dogs;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Exports\DogExport;
use Maatwebsite\Excel\Facades\Excel;


class DogManagement extends Component
{

    public $barangay = '';
    public $dogs;
    public $allDogs;
    public $count;
    public $dog;


    protected $listeners = ['delete'];

    protected $rules = [
        'barangay' => 'required',

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public $readyToLoad = false;

    public function loadDogs()
    {
        $this->readyToLoad = true;
    }

    public function mount(){
        $this->dogs  = Barangay::orderBy('barangay_name', 'asc')->get();

//        $this->dogs = [
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
//            '1','2','3','4','5','6','7','8', '9',
    }

    public function render(){

        return view('livewire.admin.dog-management', [
            'count' => $this->count,
            'allDogs' => $this->allDogs
        ]);
    }


    public function getDogs(){

        $this->validate();
        if($this->barangay == '0'){
            $this->allDogs = Dogs::with('barangay')->get();
            $this->count = $this->allDogs->count();
        }else{
            $this->allDogs = Dogs::with('barangay')->where('barangay_id', $this->barangay)->get();
            $this->count = $this->allDogs->count();
        }

    }

    public function getAllDogs(){

        if($this->barangay == '0'){
            $id = 0;
            return $id;
        }else{
            $id = $this->allDogs->pluck('barangay_id');
            return $id->all();
        }
    }

    public function export(){

        if($this->allDogs->isNotEmpty()) {
            return Excel::download(new DogExport($this->getAllDogs()), 'All-Dogs.xlsx');
        }

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
        $dog = Dogs::find($id)->first();

        $path = "/storage/";
        if($dog->dog_image != null){
            $filename = $dog->dog_image;
            if(\File::exists(public_path($path.$filename))) {
                \File::delete(public_path($path.$filename));
            }
            $dog->delete();
        }

        $dog->delete();

        $this->dispatchBrowserEvent('toastr:info', [
            'type' => 'info',
            'message' => 'Dog deleted successfully',
        ]);

        $this->getDogs();
    }
}
