<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\patientdepartment;
use App\Models\department;

class Users extends Model
{
    use HasFactory;
    protected $table='users';
    public $timestamps=false;

    public function department(){
        return $this->belongsTo(department::class,'department_id');
    }
    public function appointmentpatient(){
        return $this->hasMany(patientdepartment::class,'u_id');
    }
}
