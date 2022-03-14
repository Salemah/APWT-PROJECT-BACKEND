@extends('Patient.header')
@section('demo')

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/PatientDoctor.css">

    </head>
<body id="top">
    {{--  --}}
    <section  >
    <div class="container">
        <div class=" row  justify-content-center ">
            @foreach($st as $s)
          <div class=" col-4 bg-primary text-white  rounded gy-3 me-1  ">
         <div class="py-2 ">
            <p>User Name : {{$s->username}}</p>
            <p>Problem-Type:{{$s->problemtype}}</p>
            <p>Date:{{$s->date}}</p>
            <button type="button" class="btn btn-danger"> <a style="text-decoration: none" href="{{route('Appointment.Delete',['id'=>$s->id])}}">Delete</a></button>
          </div>


          </div>
          @endforeach
        </div>
      </div>


</body>
</html>
@endsection

