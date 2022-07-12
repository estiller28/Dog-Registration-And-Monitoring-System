<?php

namespace App\Http\Livewire\admin;

use App\Models\Barangay;
use App\Models\Dogs;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateDogsForm extends Component
{
    use WithFileUploads;

    public $barangays;
    public $barangay;
    public $purok;
    public $dog_name;
    public $id_number;
    public $dog_image;
    public $origin;
    public $breed;
    public $color;
    public $age;
    public $sex;
    public $sex_description;
    public $vaccines_taken;
    public $owner_name;
    public $contact_number;

    public $dogs;

    public $selectData = '';


    public $sexValue = [
        '1' => 'Capon',
        '2' => 'Ligate'
    ];

    protected $rules = [
        'dog_name' => 'required',
        'dog_image' => 'max:2048',
        'origin' => 'required',
        'breed'  => 'required',
        'color' => 'required',
        'barangay' => 'required',
        'age' => 'required|max:255',
        'sex' => 'required',
        'sex_description' => 'required',
        'vaccines_taken' => 'required',
        'owner_name' => 'required',
        'contact_number' => 'required|min:10|max:11',
        'purok' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount(){
        $this->barangays = Barangay::orderBy('barangay_name', 'asc')->get();
    }


    public function create(){
        $this->validate();

        $filename = "";
        if ($this->dog_image) {
            $filename = $this->dog_image->store('dog-images', 'public');
        } else {
            $filename = Null;
        }

        Dogs::create([
            'dog_image' => $filename,
            'dog_name' => $this->dog_name,
            'origin' => $this->origin,
            'breed' => $this->breed,
            'color' => $this->color,
            'age' => $this->age,
            'sex' => $this->sex,
            'sex_description' => $this->sex_description,
            'vaccines_taken' => $this->vaccines_taken,
            'owner_name' => $this->owner_name,
            'contact_number' => $this->contact_number,
            'barangay_id' => $this->barangay,
            'purok' => $this->purok,
            'id_number' => strtoupper(substr($this->dog_name, 0, 3)). '-' .substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 6)
        ]);

        session()->flash('message', 'Dog created successfully!');

        return redirect()->route('dogs.index');
    }


    public function render()
    {
        return view('livewire.admin.create-dogs-form');
    }

}
