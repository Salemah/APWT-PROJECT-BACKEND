<?php

namespace App\Http\Controllers;

use App\Mail\Appointmentmail;
use Illuminate\Http\Request;
use App\Models\Appointments;
use App\Models\Users;
use App\Models\Doctor;
use App\Models\Doctorslot;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PatientProfileController extends Controller
{
    public function PatientSignUpIndex()
    {

        return view('Patient.PatientSignup');
    }
    // all doctror get from database
    public function Alldoctor()
    {

        $result = Users::where('type', 'doctor')->get();
        if ($result) {
            return response()->json($result, 200);

       }
    }


    //api start
    public function DoctorSlot(Request $req)

    {

        return Doctorslot::all();
    }

    public function PatientAppointmentsubmit(Request $req)
    {
        $validator = Validator::make(
            $req->all(),

            [

                'patientname' => 'required',
                'patientid' => 'required',
                'dname' => 'required',
                'dcid' => 'required',
                'slot' => 'required',
                'day' => 'required',
                'date' => 'required',

            ]
        );
        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->errors(),
            ]);
        } else {
            $aptt = new Appointments();
            $aptt->patientname = $req->patientname;
            $aptt->patientid = $req->patientid;
            $aptt->slot = $req->slot;
            $aptt->day = $req->day;
            $aptt->date = $req->date;
            $aptt->pemail = $req->pemail;
            $aptt->dname = $req->dname;
            $aptt->dcid = $req->dcid;
            $aptt->save();
            if($aptt->save()){
                //Register Success Full Mail
                 $sub= ` Succesfull`;
                 $body= "Dear  $req->patientname Your Appointment Succesfull ";
                Mail::to("$req->pemail")->send(new Appointmentmail($sub,$body));



            return response()->json([
                'success' => 'Appointment Successful.!',
            ]);
        }
        }
    }
    //GET ALL MY APPOINMNET API
    public function Myappointment(Request $req)
    {
        //return Appointments::all();
        $st = Appointments::where('patientid', $req->id)->get();

        return response()->json($st, 200);
    }
    // DELET MY APPOINEMT
    public function AppointmentDelete(Request $req)
    {

        $apt = Appointments::where('id', $req->id)->first();
        if ($apt->delete()) {
            return response()->json(["success" => " Appointment Delete Succesfull"], 200);
        } else {
            return response()->json(["msg" => "notfound"], 404);
        }
    }

    //myprofile
    public function PatientProfile(Request $req)
    {

        $user = Users::where('id', $req->id)->first();
        if ($user) {
            return response()->json($user, 200);
        }
    }

    //patientprofile edit
    public function PatienteditProfile(Request $req)
    {
        $users = Users::where('id', $req->id)->first();
        $validator = Validator::make(
            $req->all(),

            [
                'name' => 'required|min:4|max:20',
                'email' => 'required|email',

            ]
        );
        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->errors(),
            ]);
        } else {


            $users->name = $req->name;
            $users->email = $req->email;
            $users->update();

            return response()->json([
                'success' => 'Update Successful.!',
            ]);
        }
    }

    public function SingleDoctoresehudel(Request $req)
    {
        $doctor =  Doctorslot::where('dcid', $req->dcid)->first();
        //return $doctor->doctorslot->dname;
        return response()->json(['message' => 'User Found'], 200);
        // return view('Patient.Testdcapt')->with('dc', $doctor->doctorslot);
    }



    //api end



    public function PatientTestAppointment()
    {
        $doctor =  Doctor::all();
        //return response()->json(["msg" => "found"], 200);
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
    // public function AppointmentDelete(Request $req)
    // {

    //     $apt = Appointments::where('id', $req->id)->first();
    //     $apt->delete();
    //     session()->flash('msg', 'Appointment Deleted');
    //     return redirect()->route('Patient.Myappointment');
    // }
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
