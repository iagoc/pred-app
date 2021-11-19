<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    public $timestamps = false;
    protected $table = 'Residents';
    protected $fillable = ['id', 'name', 'phone', 'info_address_local', 'apart_number', 'light_number', 'rent_price', 'due_date', 'building_id'];
    use HasFactory;
    
    public function building()
    {
        return $this->hasOne(Building::class);
    }
}
