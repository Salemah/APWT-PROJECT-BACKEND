<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Regitercontroller;
use App\Http\Controllers\PatientProfileController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Mailcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.home');
});
Route::get('/kk', function () {
    return view('Patient.kk');
});
Route::get('/hd', function () {
    return view('Patient.Shared.Footer');
});
Route::get( '/login', [LoginController::class,'index'] )->name( 'login' );
Route::post( '/login', [LoginController::class,'verify'] )->name( 'login' );
Route::get( '/register', [Regitercontroller::class,'register'] )->name( 'register' );
Route::post( 'register/submit', [Regitercontroller::class,'registersubmit'] )->name( 'register.submit' );
Route::get( '/logout', [LogoutController::class,'logout'] )->name( 'logout' );
Route::get( '/home', 'homeController@index' )->name( 'home' );
 //patient route
 Route::get( '/PatientSignup', [PatientProfileController::class,'PatientSignUpIndex'] );

 Route::get( '/alldoctor', [PatientProfileController::class,'Alldoctor'] )->name( 'PatientDoctorPage' );
//
 Route::get( '/PatientDoctorr', [PatientProfileController::class,'PatientTestAppointment'] )->name( 'Patient.testAppointment' )->middleware('authorized');
//
 Route::get( '/PatientDoctorInfo', [PatientProfileController::class,'PatientDoctorInfoIndex'] )->name( 'Doctor.Info' );
 Route::get( '/PatientDoctorContact', [PatientProfileController::class,'PatientDoctorContactIndex'] )->name( 'Doctor.Conatct' );
 Route::get( '/PatientDoctorReview',  [PatientProfileController::class,'PatientDoctorReviewIndex'] )->name( 'Patient.Review' )->middleware('authorized');;
 Route::post('/Patient/Appointment',[PatientProfileController::class,'PatientAppointment'])->name('Patient.Appointment');
 Route::get( '/Patient/Myappointment',  [PatientProfileController::class,'PatientMyappointment'] )->name( 'Patient.Myappointment' );
//  Route::get( '/Patient/Myappointment',  [PatientProfileController::class,'PatientMyappointment'] )->name( 'Patient.Myappointment' )->middleware('authorized');;
 Route::get('/Appointment/Delete',[PatientProfileController::class,'AppointmentDelete'])->name('Appointment.Delete');
 Route::get( '/PatientMyProfile', [PatientProfileController::class,'PatientMyProfile'] )->name( 'PatientMyProfile' );
 Route::get( '/PatientEditMyProfile/{id}', [PatientProfileController::class,'PatienteditMyProfile'] )->name( 'PatientEditMyProfile' );
 Route::post( '/PatientEditMyProfile', [PatientProfileController::class,'PatienteditMyProfileSubmit'] )->name( 'PatientEditMyProfileSubmit' );
 Route::get( '/RelationPatientApointmt', [PatientProfileController::class,'RelationPatientApointmt'] )->name( 'Relation.PatientApointmt' );
//
 Route::get( '/Patient/testAppointment', [PatientProfileController::class,'PatientTestAppointment'] )->name( 'Patient.testAppointment' );
 Route::post( '/Patient/testAppointmentsubmit', [PatientProfileController::class,'PatientTestAppointmentsubmit'] )->name( 'Patient.testAppointmentsubmit' )->middleware('authorized');
 Route::post( '/Patient/testdcAppointmentsubmit', [PatientProfileController::class,'PatientTestDCAppointmentsubmit'] )->name( 'Patient.dctestAppointmentsubmit' )->middleware('authorized');

 //
//mailing
Route::get( '/mailing', [Mailcontroller::class,'Sendemail'] );
