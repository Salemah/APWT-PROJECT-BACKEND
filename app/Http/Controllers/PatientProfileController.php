<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointments;
use App\Models\Users;

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
        $name= session()->get('username');
        $st = Appointments::where('username',$name)->get();
        return view('Patient.ptappointment')->with('st',$st);

    }
    public function PatientAppointment(Request $req){
        $req->validate([
            'name'=>'required',
            'problem'=>'required',
            'date'=>'required',
            'message'=>'required|min:10',

        ],
        [
            'message.min'=>'Username must be   Unique'


        ]);
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
    public function PatientMyProfile(Request $req){
        $id= session()->get('id');
        $user = Users::where('id',$id)->first();
        // $apt->delete();
        return view('Patient.MyProfile')->with('user',$user);



    }
    public function PatienteditMyProfile(Request $req){

         $user = Users::where('id',$req->id)->first();

        return view('Patient.EditMyProfile')->with('user',$user);;



    }
    public function PatienteditMyProfileSubmit(Request $req){

         $user = Users::where('id',$req->id)->first();
         $user->name = $req->name;
         $user->email = $req->email;
         $user->save();
         return "submitted done";



    }




}
