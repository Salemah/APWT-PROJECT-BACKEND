<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\patientdepartment;
use App\Models\department;

class Appointments extends Model
{
    use HasFactory;
     protected $table='appointmentss';
    public $timestamps=false;
    // public function appointmentpatient(){
    //     return $this->hasMany(patientdepartment::class,'a_id');
    // }
    // public function department(){
    //     return $this->hasMany(department::class,'offered_by');
    // }
}
