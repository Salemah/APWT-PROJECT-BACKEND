<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientProfileController;
use App\Http\Controllers\Regitercontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post( 'register/submit', [Regitercontroller::class,'registersubmit'] )->name( 'register.submit' );
Route::post('/login', [LoginController::class,'verify'] );
//get all doctor api
Route::get( '/alldoctor', [PatientProfileController::class,'Alldoctor']);
Route::get( '/doctorslot', [PatientProfileController::class,'DoctorSlot']);
//apoint submit
Route::post( '/Patient/Appointmentsubmit', [PatientProfileController::class,'PatientAppointmentsubmit'] );
//my appointmnt get api
Route::get( '/Patient/Myappointment/{id}',  [PatientProfileController::class,'Myappointment'] );
//DELETE MY APPOINTMENT
Route::post('/Appointment/Delete/{id}',[PatientProfileController::class,'AppointmentDelete']);
//patient my profile
Route::get( '/PatientMyProfile/{id}', [PatientProfileController::class,'PatientProfile'] );
//single doctor shedule
Route::get( '/alldoctor/sgedule', [PatientProfileController::class,'SingleDoctoresehudel']);



