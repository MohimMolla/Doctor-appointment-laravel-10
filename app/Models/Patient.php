<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'appointments_id',
         'doctors_id',
          'specialities_id',
           'image', 
           'advice',
            'comments', 
        ];


      
        public function appointment()
        {
            return $this->belongsTo(Appointment::class);
        }

       
        //public function doctor()
        //{
        //    return $this->belongsTo(Doctor::class, 'doctors_id');
        //}
    
//         public function speciality()
//         {
//            return $this->belongsTo(Speciality::class, 'specialities_id');
//         }


 }
