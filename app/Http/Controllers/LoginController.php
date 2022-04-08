<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function verify(Request $req)
    {
        $validator = Validator::make(
            $req->all(),
            [
                'email' => 'required|email',
                'password' => 'required|min:6',


            ],
            [
                'email.email' => 'Invalid email address!',
                'password.required' => 'Password is required!',

            ]
        );
        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->errors(),
            ]);
        } else {

            $result = Users::where('email', $req->email)
                ->where('password', $req->password)->first();
            if ($result) {
                if ($result->type == "patient") {
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Login Successfully',
                        'id' => $result->id,
                        'name' => $result->name,
                        'email' => $result->email,
                        'type' => $result->type,
                        'username' => $result->username,


                    ]);
                }
            } else {
                return response()->json([
                    'status' => 'notFound',
                    'message' => 'User not Found',
                ]);
            }



            //    foreach ( $result as $res ) {
            //         $username = $res->username;
            //         $email = $res->email;
            //         $name = $res->name;
            //          $type = $res->type;
            //          $id = $res->id;
            //         }
            //     if ( count( $result ) > 0 ) {
            //         if ( $type == "patient" )
            //         {
            //                     return response()->json([
            //                     'success' => $username,
            //                 ]);

            //         }

            //         else {
            //             return response()->json([
            //                 'role' => 'doesnot match',
            //                 'message' => 'User not Found'
            //             ]);
            //     }
            // }
            //     else if( !$email ==''  ) {
            //         return response()->json([
            //             'status' => 'notFound',
            //             'message' => 'User not Found'
            //         ]);


            // }
        }
    }
}



    //
