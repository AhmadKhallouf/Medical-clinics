<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'medicine_id',
        'clinic_id',
        'user_id',
        'quantity',
        'status',
    ];

    public function medicines(){
        return $this->belongsTo(Medicine::class,'medicine_id');
    }

    public function clinics(){
        return $this->belongsTo(Clinic::class,'id');
    }

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
}
