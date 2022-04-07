<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator ;

class Regitercontroller extends Controller
{
    public function register()
    {

        return view('Register');
    }
    public function registersubmit(Request $req)
    {

        $validator = Validator::make(
            $req->all(),

            [
                'name' => 'required|min:4|max:20',
                'username' => 'required|unique:users,username',
                'email' => 'required|email',
                'password' => 'required|min:6',
                'confirmpassword' => 'required|same:password',

            ],
            [
                'username.unique' => 'Username must be   Unique',
                'confirmpassword.same' => 'password missmatched'

            ]
        );
        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->errors(),
            ]);
        }
        else{
        $aptt = new Users();
        $aptt->username = $req->username;
        $aptt->name = $req->name;
        $aptt->type = 'patient';
        $aptt->email = $req->email;
        $aptt->password = $req->password;
        $aptt->save();
        session()->flash('msg', 'Registration Success');
        // return redirect()->route('login');
        return response()->json([
            'success' => 'Registration Successful. wait for approval!',
        ]);
    }
    }

}
