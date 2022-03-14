@extends('Patient.header')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/Myprofile.css">
    <title>Document</title>
</head>
<body>

    <div class="container myprofile">
        @if(Session::get('msg') )
        <span class="text-danger message">{{ Session::get('msg') }}</span><br>


    @endif
        <h5>User Name : {{$user->username}}</h5>
        <h5>Name : {{$user->name}}</p>
            <h5>Email : {{$user->email}}</h5>
            <button class="btn btn-danger edit-button"><a id="edit-link" href="{{route('PatientEditMyProfile',['id'=>$user->id])}}">Edit</a> </button>
    </div>


</body>
</html>
@endsection
