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

                    <form id="appointment-form"  method="post" action="{{ route('Patient.Appointment') }}">
                        {{ csrf_field() }}
                        <!-- Register section title -->
                        <div class="section-title ">
                            <h2>Fill appoinment form</h2>
                        </div>

                        <div class="" >
                            <div class="col-md-4 col-sm-4 ">
                                <label for="name">Name</label>
                                <input type="text" value="{{ Session::get('name') }}" class="form-control" id="name"
                                    name="name" placeholder="Full Name">
                                    @error('name')
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
                                <label for="date">Select Date</label>
                                <input type="date"  name="date"  value="{{old('date')}}" class="form-control">
                                @error('date')
                                <span class="text-danger"> {{ $message }}</span><br>
                              @enderror
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <label for="Message">Details</label>
                                <textarea class="form-control" rows="3" id="message" name="message" placeholder="Message"></textarea>
                                @error('message')
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









        
        <!-- SCRIPTS -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom.js"></script>

    </body>

    </html>
@endsection
