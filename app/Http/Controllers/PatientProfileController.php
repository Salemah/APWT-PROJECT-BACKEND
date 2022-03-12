<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointments;
class PatientProfileController extends Controller
{
    public function PatientSignUpIndex(){

        return view('Patient.PatientSignup');

    }

    public function PatientDoctorPageIndex(){

        return view('Patient.PatientDoctorPage');

    }


    public function PatientDoctorInfoIndex(){

        return view('Patient.PatientDoctorInfo');

    }

    public function PatientDoctorContactIndex(){

        return view('Patient.PatientDoctorContact');

    }

    public function PatientDoctorReviewIndex(){

        return view('Patient.PatientDoctorReview');

    }
    public function PatientMyappointment(){
        $name= session()->get('name');
        $st = Appointments::where('name',$name)->get();
        return view('Patient.ptappointment')->with('st',$st);

    }
    public function PatientAppointment(Request $req){
        $apt = new Appointments();
        $apt->name = $req->name;
        $apt->problemtype = $req->problem;
        $apt->date = $req->date;
        $apt->details = $req->message;

        $apt->save();
        session()->flash('msg','Appointment Success');
        return redirect()->route('PatientDoctorPage');
}
    public function AppointmentDelete(Request $req){

        $apt = Appointments::where('id',$req->id)->first();
        $apt->delete();
        return "<p>user deleted</p>";


    }




}
