<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clinic;

class WorkImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'clinic_id',
        'image_before',
        'image_after',
    ];


    public function clinics(){
        return $this->belongsTo(Clinic::class,'id');
    }
}
