<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['id', 'address', 'address_kitnet', 'address_house', 'address_store'];

    use HasFactory;

    public function residents()
    {
        return $this->hasMany(Resident::class);
    }
}
