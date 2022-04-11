<?php

namespace App\Http\Controllers;

use App\Mail\Logmail;
use App\Mail\Sendemail;
use App\Mail\Sendmail;
use Illuminate\Http\Request;
use Illuminate\Log\LogManager;
use Illuminate\Support\Facades\Mail;

class Mailcontroller extends Controller
{
     public function Sendemail()

    {
        $e_sub= "Successfully Send Email";
        $e_body= "I Have Created Mail => 19-39383-1";
       Mail::to("tanvir.ahmed@aiub.edu")->send(new Sendmail($e_sub,$e_body));
       return view('email.emplate')
       ->with('body',$this->body)
       ->with('sub',$this->sub);
    }
}
