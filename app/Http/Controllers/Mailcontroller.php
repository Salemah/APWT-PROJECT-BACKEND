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
        $sub= "Successfully Send Email";
        $body= "I Have Created Mail => 19-39383-1";
       Mail::to("tanvir738810@gmail.com")->send(new Sendmail($sub,$body));
       return view('email.emplate')
       ->with('body',$body)
       ->with('sub',$sub);
    }
}
