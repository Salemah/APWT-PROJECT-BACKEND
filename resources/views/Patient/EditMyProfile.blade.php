@extends('Patient.header')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <form method="post" action="{{ route('PatientEditMyProfileSubmit') }}">
            {{ csrf_field() }}

            <input type="text" style="display: none" value="{{ $user->id }}" id="id" name="id"><br>
            <label for="name">Name:</label><br>
            <input type="text" value="{{ $user->name }}" id="name" name="name"><br>
            <label for="name">User Name:</label><br>
            <input type="text" disabled value="{{ $user->username }}" id="name" name="name"><br>
            <label for="email">Email:</label><br>
            <input type="email" value="{{ $user->email }}" id="email" name="email"><br>
            <input type="submit" value="Submit"><br>

        </form>
    </body>

    </html>
@endsection
