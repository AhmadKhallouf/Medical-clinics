<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clinic;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'clinic_id',
        'description',
        'concentration',
        'quantity',
        'price',
        'expiration_date',
        'image',
    ];


    public function clinics(){
        return $this->belongsTo(Clinic::class,'id');
    }

    public function users(){
        return $this->belongsToMany(User::class,'users_medicines_pivot');
    }

    public function carts(){
        return $this->hasMany(Cart::class,'id');
    }
}
