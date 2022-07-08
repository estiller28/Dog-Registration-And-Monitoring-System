<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::addGlobalScope(fn ($query) => $query->orderBy('barangay_name'));
    }

    protected $fillable = ['barangay_name'];

    public function users(){
        return $this->hasMany(User::class)->withDefault();
    }

    public function dogs(){
        return $this->hasMany(Dogs::class, 'id', 'barangay_id');
    }

}
