<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table = 'appointments';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'doctor_id',
        'speciality_id',
        'date',
        'message',
        'status',
        'user_id'
    ];
    public function speciality()
    {
    return $this->belongsTo(Speciality::class,);
    }


    public function doctor()
    {
    return $this->belongsTo(Doctor::class);
    }
  //patients model relation
    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
    
}
