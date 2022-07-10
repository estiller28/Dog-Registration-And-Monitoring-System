<?php

namespace App\Http\Livewire;
use App\Models\Barangay;
use App\Models\Dogs;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\File;
class DogEdit extends Component
{
    use WithFileUploads;

    public $barangays;
    public $barangay;
    public $purok;
    public $dog_name;
    public $new_image;
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

    public Dogs $dog;
    public $did;

    protected $rules = [
        'dog_name' => 'required',
        'new_image' => 'max:2048',
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

    public function mount($dog){
        $this->dog = $dog;
        $this->did  = $dog->id;
        $this->dog_image = $dog->image;
        $this->dog_name = $dog->dog_name;
        $this->origin = $dog->origin;
        $this->breed = $dog->breed;
        $this->color = $dog->color;
        $this->age = $dog->age;
        $this->sex = $dog->sex;
        $this->sex_description = $dog->sex_description;
        $this->vaccines_taken = $dog->vaccines_taken;
        $this->owner_name = $dog->owner_name;
        $this->contact_number = $dog->contact_number;
        $this->barangay  = $dog->barangay_id;
        $this->purok = $dog->purok;
        $this->barangays = Barangay::orderBy('barangay_name', 'asc')->get();
    }
    public function render()
    {
        return view('livewire.dog-edit');
    }

    public function update(){

        $this->validate();
        $path = "/storage/";
        $filename = $this->dog->dog_image;

        if ($this->new_image) {
            if($filename !== ''){
                if(\File::exists(public_path($path.$filename))) {
                    \File::delete(public_path($path.$filename));
                }
            }
            $filename = $this->new_image->store('dog-images', 'public');
        }

        Dogs::find($this->did)->update([
            'dog_image' => $filename,
            'dog_name' => $this->dog_name,
            'origin' => $this->origin,
            'breed' => $this->breed,
            'color' => $this->color,
            'sex' => $this->sex,
            'sex_description' => $this->sex_description,
            'vaccines_taken' => $this->vaccines_taken,
            'owner_name' => $this->owner_name,
            'contact_number' => $this->contact_number,
            'barangay_id' => $this->barangay,
            'purok' => $this->purok,
        ]);

        $this->dispatchBrowserEvent('toastr:info', [
            'type' => 'success',
            'message' => 'Dog record updated successfully',
        ]);
    }
}
