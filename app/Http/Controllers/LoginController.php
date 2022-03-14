<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;


class LoginController extends Controller {

    public function index() {
        return view( 'login' );
    }

    public function verify( Request $req ) {
        $result = Users::where('email',$req->email)
        ->where('password',$req->password)->get();

        foreach ( $result as $res ) {
            $username = $res->username;
            $name = $res->name;
            $type = $res->type;
            $id = $res->id;
            $active = $res->active;

        }

        if ( count( $result ) > 0 ) {
          
                if ( $type == "doctor" ) {
                    $req->session()->put( 'uname', $username );
                    $req->session()->put( 'type', $type );
                    $req->session()->put( 'password', $req->password );
                    $req->session()->put( 'id', $id );

                    return view( 'doctor.dashboard' );
                } else if ( $type == "receptionist" ) {
                    $req->session()->put( 'uname', $username );
                    $req->session()->put( 'type', $type );
                    $req->session()->put( 'password', $req->password );
                    $req->session()->put( 'id', $id );

                    return redirect( '/reception/dashboard' );

                    //admin
                } else if ( $type == "admin" ) {
                    $req->session()->put( 'uname', $username );
                    $req->session()->put( 'type', $type );
                    $req->session()->put( 'password', $req->password );
                    $req->session()->put( 'id', $id );


                    return redirect()->route( 'admin.dashboard' );
                }
                else if ( $type == "patient" ) {
                    $req->session()->put( 'username', $username );
                    $req->session()->put( 'name', $name );
                    $req->session()->put( 'type', $type );
                    $req->session()->put( 'password', $req->password );
                    $req->session()->put( 'id', $id );

                    return redirect( '/PatientDoctor' );
                }

                else {
                    echo "type error";
                }


        } else {
           session()->flash( 'msg', 'Invalid username or password' );
            return redirect( '/login' );
        }
    }
}
