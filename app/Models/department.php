<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;
use App\Models\Appointments;

class department extends Model
{
    use HasFactory;
    public function users(){
        return $this->hasMany(users::class,'department_id');
    }
    public function appointments(){
        return $this->hasMany(Appointments::class,'offered_by');
    }
}
