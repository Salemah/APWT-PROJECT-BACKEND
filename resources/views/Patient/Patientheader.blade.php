<html>
    <head>

        <title> patient </title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Tooplate">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">


        <!-- MAIN CSS -->
        <link rel="stylesheet" href="css/tooplate-style.css">

        <title>Document</title>
   </head>
   <body>
<header>
    <div class="container">
         <div class="row">

              <div class="col-md-4 col-sm-5">
                   <p>Patient Page</p>
              </div>

              <div class="col-md-8 col-sm-7 text-align-right">
                   <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>
                   <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                   <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></span>
              </div>

         </div>
    </div>
</header>


<!-- MENU -->
<section class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

         <div class="navbar-header">
              <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="icon icon-bar"></span>
                   <span class="icon icon-bar"></span>
                   <span class="icon icon-bar"></span>
              </button>

              <!-- lOGO TEXT HERE -->
              <a class="navbar-brand">E-Healthcare System</a>
         </div>


         {{--  --}}


         {{-- / --}}

         <!-- MENU LINKS -->
         <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                   <li class="DoctorInfo-btn"><a href="/PatientDoctorInfo"> See doctor Info</a></li>
                   <li class="DoctorSchedule-btn"><a href="{{route('Doctor.Info')}} "> See Doctor Schedule</a></li>
                   <li class="DoctorReview-btn"><a href="{{route('Patient.Review')}}"> Review Doctor</a></li>
                    <li class="DoctorContact-btn"><a href="{{route('Doctor.Conatct')}} "> Contact Doctor</a></li>
                    <li class="DoctorContact-btn"><a href="{{route('PatientDoctorPage')}} "> Get Appointment</a></li>
                    <li class="DoctorContact-btn"><a href="{{route('Patient.Myappointment')}} "> My Appointment</a></li>
                    <li><a href="{{route('logout')}}"><i class="flaticon-logout" aria-hidden="true" style="padding-right: 15px;"></i>logout</a></li>
                </ul>
         </div>

    </div>
</section>
@yield('content')

</body>
</html>
