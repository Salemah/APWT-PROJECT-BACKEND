@extends('Patient.header')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>

       <link rel="stylesheet" href="css/Myprofileedit.css">
        <title>My Profile</title>
    </head>

    <body>
        <div class="container "  style="background-color: #A8ADF4;
        padding:15px 0;width:50% ;display:flex; justify-content:center" >
            <div >
                <form method="post" class="profileedit" action="{{ route('PatientEditMyProfileSubmit') }}">
                    {{ csrf_field() }}

                    <input type="text" style="display: none" value="{{ $user->id }}" id="id" name="id"><br>
                    <label for="name">Name:</label><br>
                    <input type="text" value="{{ $user->name }}" id="name" name="name"><br>
                    @error('name')
                    <span class="text-danger"> {{ $message }}</span><br>
                @enderror
                    <label for="name">User Name:</label><br>
                    <input type="text" disabled value="{{ $user->username }}" id="name" name="name"><br>
                    <label for="email">Email:</label><br>
                    <input type="text" value="{{ $user->email }}" id="email" name="email"><br>
                    @error('email')
                    <span class="text-danger"> {{ $message }}</span><br>
                @enderror
                    <input type="submit" class="btn btn-danger butn my-3" value="Submit"><br>

                </form>
            </div>
        </div>
    </body>

    </html>
@endsection
