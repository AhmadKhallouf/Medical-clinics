<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;

    protected $fillable = [
        'clinic_id',
        'name_of_element',
        'cost',
    ];


    public function clinics(){
        return $this->belongsTo(Clinic::class,'id');
    }
}
