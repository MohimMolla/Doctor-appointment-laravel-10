<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'speciality_id',
        'name',
        'phone',
        'speciality',
        'room_number',
        'achievement',
        'institute',
        'doctor_details',
        'image',
    ];

    public function speciality()
    {
    return $this->belongsTo(Speciality::class);
    }

    
    public function appointments()
    {
    return $this->hasMany(Appointment::class);
    }
    
    public function comments()
    {
    return $this->hasMany(comments::class);
    }


    // for patients model relation
    //public function patients()
    //{
    //    return $this->hasMany(Patient::class, 'doctors_id');
    //}



}
