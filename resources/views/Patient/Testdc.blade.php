@extends('Patient.header')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <link rel="stylesheet" href="css/PatientDoctor.css">

        </head>

    <body id="top">







        <!-- Make Appoinment section -->
        <section>
            <div class="container">

                @if(Session::get('msg') )
                <span class="text-success message">{{ Session::get('msg') }}</span><br>


            @endif

                <!-- Register form -->
                <div class="formmm">

                    <form id="appointment-form"  method="post" action="{{ route('Patient.testAppointmentsubmit') }}">
                        {{ csrf_field() }}
                        <!-- Register section title -->
                        <div class="section-title ">
                            <h2>Select Doctor</h2>
                        </div>
                           <div class="col-md-4 col-sm-4">
                                <label for="select">Doctor </label>
                                <select class="form-control" name="doctor">
                                    @foreach($dc as $s)
                                    <option>{{$s->name}}</option>
                                    @endforeach


                                </select>
                                @error('doctor')
                                <span class="text-danger"> {{ $message }}</span><br>
                              @enderror
                            </div>








                            <div class="col-md-4col-sm-4">

                                <button type="submit" class="btn btn-primary" id="cf-submit" name="submit">Create
                                    appoinment</button>
                            </div>


                        </div>
                    </form>
                </div>
            </div>

            </div>
            </div>
        </section>


    </body>

    </html>
@endsection
