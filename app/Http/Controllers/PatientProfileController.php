<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointments;
use App\Models\Users;
use App\Models\Doctor;
use App\Models\Doctorslot;

class PatientProfileController extends Controller
{
    public function PatientSignUpIndex()
    {

        return view('Patient.PatientSignup');
    }

    public function PatientDoctorPageIndex()
    {
        $doctor =  Doctor::all();

        return view('Patient.PatientDoctorPage')->with('dc', $doctor);
    }
    public function PatientTestAppointment()
    {
        $doctor =  Doctor::all();

        return view('Patient.Testdc')->with('dc', $doctor);
    }
    public function PatientTestAppointmentsubmit(Request $req)
    {
        $doctor =  Doctor::where('name', $req->doctor)->first();
        //return $doctor->doctorslot->dname;
        return view('Patient.Testdcapt')->with('dc', $doctor->doctorslot);
    }

    public function PatientTestDCAppointmentsubmit(Request $req)
    {
        $req->validate(
            [
                'username' => 'required',
                'problem' => 'required',
                'date' => 'required',
                'message' => 'required|min:10',
                'doctor' => 'required',
                'slot' => 'required',
                'day' => 'required',

            ],
            [
                'message.min' => 'Describe Minimun 10 word'


            ]
            );
        $aptt = new Appointments();
        $aptt->username = $req->username;
        $aptt->problemtype = $req->problem;
        $aptt->date = $req->date;
        $aptt->details = $req->message;
        $aptt->doctor = $req->doctor;
        if ($req->slot == 'Slot') {
            $aptt->slot = $req->slot2;
            $aptt->day = $req->day2;
         } else {
            $aptt->slot = $req->slot;
            $aptt->day = $req->day;

         }


        $aptt->save();
        session()->flash('msg', 'Appointment Success');
        return redirect()->route('Patient.testAppointment');


    }


    public function PatientDoctorInfoIndex()
    {
        $dc = Doctorslot::all();

        return view('Patient.PatientDoctorInfo')->with('doctor', $dc);
    }

    public function PatientDoctorContactIndex()
    {

        return view('Patient.PatientDoctorContact');
    }

    public function PatientDoctorReviewIndex()
    {

        return view('Patient.PatientDoctorReview');
    }
    public function PatientMyappointment()
    {
        $name = session()->get('username');
        $st = Appointments::where('username', $name)->get();
        return view('Patient.ptappointment')->with('st', $st);
    }
    public function PatientAppointment(Request $req)
    {
        $req->validate(
            [
                'username' => 'required',
                'problem' => 'required',
                'date' => 'required',
                'message' => 'required|min:10',
                'doctor' => 'required',
                'slot' => 'required',
                'day' => 'required',

            ],
            [
                'message.min' => 'Username must be   Unique'


            ]
        );
        $apt = new Appointments();
        $apt->username = $req->username;
        $apt->problemtype = $req->problem;
        $apt->date = $req->date;
        $apt->details = $req->message;

        $apt->doctor = $req->doctor;
        $apt->slot = $req->slot;
        $apt->day = $req->day;
        $apt->slot = $req->slot;
        $apt->day = $req->day;

        $apt->save();
        session()->flash('msg', 'Appointment Success');
        return redirect()->route('PatientDoctorPage');
    }
    public function AppointmentDelete(Request $req)
    {

        $apt = Appointments::where('id', $req->id)->first();
        $apt->delete();
        session()->flash('msg', 'Appointment Deleted');
        return redirect()->route('Patient.Myappointment');
    }
    public function PatientMyProfile(Request $req)
    {
        $id = session()->get('id');
        $user = Users::where('id', $id)->first();

        return view('Patient.MyProfile')->with('user', $user);
        //return $user->department->appointments;


    }
    public function RelationPatientApointmt(Request $req)
    {
        $id = session()->get('id');
        $user = Users::where('id', $id)->first();

        return view('Patient.RelationMyappointment')->with('user', $user);
        return $user->department->appointments;
    }
    public function PatienteditMyProfile(Request $req)
    {

        $user = Users::where('id', $req->id)->first();

        return view('Patient.EditMyProfile')->with('user', $user);;
    }
    public function PatienteditMyProfileSubmit(Request $req)
    {
        $user = Users::where('id', $req->id)->first();
        $req->validate(
            [
                'name' => 'required|min:4',

                'email' => 'required|email',


            ],
            [
                'name.min' => 'name must be 4 charecter'


            ]
        );


        $user->name = $req->name;
        $user->email = $req->email;
        $user->save();
        session()->flash('msg', 'Edit Success');
        return redirect()->route('PatientMyProfile');
    }
}
