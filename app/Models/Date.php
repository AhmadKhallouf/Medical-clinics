<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use HasFactory;

    protected $fillable = [
        'clinic_id',
        'user_id',
        'date_of_inspection',
        'start_inspection',
        'end_inspection',
        'status',
    ];



    public function clinics(){
        return $this->belongsTo(Clinic::class,'id');
    }
    

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
}
