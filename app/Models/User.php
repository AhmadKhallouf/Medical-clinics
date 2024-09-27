<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'birth_date',
        'age',
        'email',
        'password',
        'phone',
        'type',
        'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    // this table is related with clinics table in one to one relationship
    public function clinics(){
        return $this->hasOne(Clinic::class,'id');
    }


    // this table is related with dates table in one to many relationship
    public function dates(){
        return $this->hasMany(Date::class,'user_id');
    }


    // this table is related with medicines table in many to many relationship
    public function medicines(){
        return $this->belongsToMany(Medicine::class,'users_medicines_pivot');
    }

    public function carts(){
        return $this->hasMany(Cart::class,'user_id');
    }

}
