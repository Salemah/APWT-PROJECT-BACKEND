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

                @if (Session::get('msg'))
                    <span class="text-success message">{{ Session::get('msg') }}</span><br>
                @endif

                <!-- Register form -->
                <div class="formmm">

                    <form  method="post" action="{{ route('Patient.dctestAppointmentsubmit') }}">
                        {{ csrf_field() }}
                        <!-- Register section title -->
                        <div class="section-title ">
                            <h2>Fill appoinment form</h2>
                        </div>

                        <div class="">
                            <div class="col-md-4 col-sm-4 ">
                                <label for="name">User Name</label>
                                <input type="text" value="{{ Session::get('username') }}" class="form-control" id="name"
                                    name="username" placeholder="Full Name">
                                @error('username')
                                    <span class="text-danger"> {{ $message }}</span><br>
                                @enderror
                            </div>



                            <div class="col-md-4 col-sm-4">
                                <label for="select">Select Problem type </label>
                                <select class="form-control" name="problem">
                                    <option>Eye</option>
                                    <option>Ear</option>
                                    <option>Skin</option>

                                </select>
                                @error('problem')
                                    <span class="text-danger"> {{ $message }}</span><br>
                                @enderror
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label for="select">Doctor </label>
                                <select class="form-control" name="doctor">
                                    <option>{{ $dc->dname }}</option>
                                </select>
                                @error('doctor')
                                    <span class="text-danger"> {{ $message }}</span><br>
                                @enderror
                            </div>
                            {{--  --}}
                            <div class="col-md-4 col-sm-4">
                                <label for="select">Day</label>
                                <select class="form-select " name="day">
                                    <option selected>Day</option>
                                    <option>{{ $dc->day }}</option>
                                  </select>
                                  @error('day')
                                  <span class="text-danger"> {{ $message }}</span><br>
                              @enderror
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label for="select">Slot</label>
                                <select class="form-select " name="slot">
                                    <option selected>Slot</option>
                                    <option>{{ $dc->slot }}</option>
                                  </select>
                                  @error('slot')
                                  <span class="text-danger"> {{ $message }}</span><br>
                              @enderror
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <label for="select">Day2</label>
                                <select class="form-select " name="day2">
                                    <option selected>Day2</option>
                                    <option>{{ $dc->day2 }}</option>
                                  </select>
                                  @error('day2')
                                  <span class="text-danger"> {{ $message }}</span><br>
                              @enderror
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <label for="select">Slot2</label>
                                <select class="form-select " name="slot2">
                                    <option selected>Slot2</option>
                                    <option>{{ $dc->slot2 }}</option>
                                  </select>
                                  @error('slot2')
                                  <span class="text-danger"> {{ $message }}</span><br>
                              @enderror
                            </div>

{{--  --}}

                            <div class="col-md-4 col-sm-4">
                                <label for="date">Select Date</label>
                                <input type="date" name="date" value="{{ old('date') }}" class="form-control">
                                @error('date')
                                    <span class="text-danger"> {{ $message }}</span><br>
                                @enderror
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <label for="Message">Details</label>
                                <textarea class="form-control" rows="3" id="message" name="message" placeholder="Message"></textarea>
                                @error('message.min')
                                    <span class="text-danger"> {{ $message }}</span><br>
                                @enderror
                            </div>


{{--  --}}
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
