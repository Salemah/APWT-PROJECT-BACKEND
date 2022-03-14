<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\Users;
use Illuminate\Http\Request;

class Regitercontroller extends Controller
{
    public function register(){

        return view('Register');



    }
    public function registersubmit(Request $req){


        $req->validate([
            'username'=>'required|unique:users,username',
            'email'=>'required|email',
            'password'=>'required|min:6',
            'confirmpassword'=>'required|same:password',

        ],
    [
        'username.unique'=>'Username must be   Unique',
        'cpass.same'=>'password missmatched'

    ]);
    $aptt = new Users();
    $aptt->username = $req->username;
    $aptt->name = $req->name;
    $aptt->type = $req->problem;
    $aptt->active = $req->activee;
   

    $aptt->email = $req->email;
    $aptt->password = $req->password;
    $aptt->save();
    session()->flash('msg','Registration Success');
    return redirect()->route('login');



    }
}
