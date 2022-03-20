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
  <div class="container" style="display:flex;justify-content:center">
    <div class=" " style="background-color: rgb(120, 224, 216);padding:5px;margin-bottom:20px" >



        <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Day1</th>
                <th scope="col">Slot1</th>
                <th scope="col">Day2</th>
                <th scope="col">Slot2</th>
              </tr>
            </thead>
            <tbody>
                @foreach($doctor as $s)
              <tr>
                {{-- <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td> --}}
                <td>{{$s->dname}}</td>
                <td>{{$s->day}}</td>
                <td>{{$s->slot}}</td>
                <td>{{$s->day2}}</td>
                <td>{{$s->slot2}}</td>
              </tr>

              @endforeach
            </tbody>
          </table>




    </div>
  </div>
</body>
</html>
@endsection
