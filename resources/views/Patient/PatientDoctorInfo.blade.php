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
    <div class="" >
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Day</th>


            </tr>
        @foreach($doctor as $s)
            <tr>


                <td>{{$s->email}}</td>
                <td>{{$s->name}}</td>
                <td>{{$s->slot}}</td>

                {{-- <td> <a href="{{route('students.edit',['id'=>encrypt($s->id)])}}"><button class="btn btn-primary"> edit</button></td>
                <td> <a href="{{route('students.delete',['id'=>encrypt($s->id)])}}"><button class="btn btn-primary"> Delete</button></td> --}}
            </tr>
        @endforeach
    </table>
    </div>
  </div>
</body>
</html>
@endsection
