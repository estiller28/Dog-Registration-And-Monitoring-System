<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_number',
        'barangay_id',
        'dog_name',
        'owner_name',
        'contact_number',
        'address',
        'dog_image',
        'origin',
        'breed' ,
        'color',
        'barangay',
        'age',
        'sex',
        'sex_description',
        'vaccines_taken',
        'owner_name',
        'purok'
    ];

    public function barangay(){
        return $this->belongsTo(Barangay::class, 'barangay_id', 'id')->orderBy('barangay_name');
    }
}
