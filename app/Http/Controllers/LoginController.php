<?php

namespace App\Http\Controllers;

use App\Models\Token;
use App\Models\Users;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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


                    $api_token = Str::random(64);
                     $token = new Token();
                    $token->type = $result->type;
                    $token->token = $api_token;
                     $token->userId = $result->id;
                     $token->created_at = new DateTime();
                     $token->created_at = new DateTime();

                     $token->save();


                    return response()->json([
                        'status' => 'success',
                        'message' => 'Login Successfully',
                        'id' => $result->id,
                        'name' => $result->name,
                        'email' => $result->email,
                        'type' => $result->type,
                        'token' => $api_token,
                        'username' => $result->username,


                    ]);
                }
            } else {
                return response()->json([
                    'status' => 'notFound',
                    'message' => 'User not Found',
                ]);
            }



        }
    }
    public function loggedOut(Request $req){
         $token = Token::where('token', $req->token)->first();
        $token->expired_at = new DateTime();
        $token->save();
       if($token){
        return response()->json([
            'status' => 'success',
            'message' => 'Logged out successfully!'
        ]);
       }

    }



}



    //
