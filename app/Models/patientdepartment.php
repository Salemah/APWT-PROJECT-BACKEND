<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Appointments;
use App\Models\Users;

class patientdepartment extends Model
{
    use HasFactory;
    protected $table='appointmentpatient';
    public function appointment(){
        return $this->belongsTo(Appointments::class,'a_id');
    }
    public function user(){
        return $this->belongsTo(Users::class,'u_id');
    }
}
