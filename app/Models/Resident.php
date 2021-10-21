<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    public $timestamps = false;
    protected $table = 'Residents';
    protected $fillable = ['id', 'name', 'apart_number'];
    use HasFactory;
    
    public function building()
    {
        return $this->hasOne(Building::class);
    }
}
