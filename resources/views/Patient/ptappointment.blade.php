@extends('Patient.header')
@section('demo')

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/PatientDoctor.css">

    </head>
<body id="top">
    {{--  --}}
 
    <div class="container ">
        @if(Session::get('msg') )
                <span class="text-success message">{{ Session::get('msg') }}</span><br>


            @endif

        <div class=" row  justify-content-center  " style="background-color: rgba(100, 148, 237, 0.623);">
            @foreach($st as $s)
          <div class=" col-4 bg-primary text-white  rounded gy-3 me-1  " style="background-color: rgba(100, 148, 237, 0.623)">
         <div class="py-2 " >
            <p>User Name : {{$s->username}}</p>
            <p>Problem-Type:{{$s->problemtype}}</p>
            <p>Date:{{$s->date}}</p>
            <p>Day:{{$s->day}}</p>
            <p>Slot:{{$s->slot}}</p>
            <button type="button" class="btn btn-danger"> <a style="text-decoration: none ;color:white" href="{{route('Appointment.Delete',['id'=>$s->id])}}">Delete</a></button>
          </div>


          </div>
          @endforeach
        </div>
      </div>


</body>
</html>
@endsection

