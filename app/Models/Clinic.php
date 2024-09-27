<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cost;
use App\Models\Date;
use App\Models\Medicine;
use App\Models\WorkImage;

class Clinic extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'medical_specialty',
        'address',
        'description',
        'inspection_cost',
        'inspection_time',
        'number_of_booking_times',
    ];


    public function users(){
       return $this->belongsTo(User::class,'user_id');
    }


    public function dates(){
      return  $this->hasMany(Date::class,'clinic_id');
    }


    public function medicines(){
        return $this->hasMany(Medicine::class,'clinic_id');
    }

    public function costs(){
        return $this->hasMany(Cost::class,'clinic_id');
    }

    public function workImages(){
        return $this->hasMany(WorkImage::class,'clinic_id'); 
    }

    public function carts(){
        return $this->hasMany(Cart::class,'clinic_id');
    }
}
