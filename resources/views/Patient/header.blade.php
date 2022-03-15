<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="css/PatientHeader.css">
   <link rel="stylesheet" href="css/Footer.css">
    <title>Document</title>
</head>
<body>
    <header style="background:#89DCFC">
        <div class="container" >
             <div class="row ">

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
  <div class="menu-nav">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('PatientDoctorPage')}} ">E-Healthcare System</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

              <li class="nav-item">
                <a class="nav-link" href="{{route('Doctor.Info')}} "> See Doctor Schedule</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('PatientDoctorPage')}} "> Get Appointment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Patient.Myappointment')}} "> My Appointment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}"><i class="flaticon-logout" aria-hidden="true" style="padding-right: 15px;"></i>logout</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  My Profile
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="{{route('PatientMyProfile')}}">Profile</a></li>
                  <li><a class="dropdown-item" href="{{route('logout')}}">logout</a></li>
                  <li><a href="{{route('Relation.PatientApointmt')}}"><i class="flaticon-logout" aria-hidden="true" style="padding-right: 15px;"></i>My Profile</a></li>
                  <li><a href="{{route('Patient.testAppointment')}}"><i class="flaticon-logout" aria-hidden="true" style="padding-right: 15px;"></i>My Profile</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  </div>


      @yield('content')
      @yield('demo')



      <footer >
        {{--  --}}
        <div class="container fotter-bottom">
            <div class="row">
              <div class="col-md-4 col-sm-12">
                <div class="footer-link">
                    <a href="#">Laboratory Tests</a><br>
                    <a href="#">Departments</a><br>
                    <a href="#">Insurance Policy</a><br>
                    <a href="#">Careers</a><br>
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="footer-link">
                    <a href="#">Laboratory Tests</a><br>
                    <a href="#">Departments</a><br>
                    <a href="#">Insurance Policy</a><br>
                    <a href="#">Careers</a><br>
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="footer-link">
                    <a href="#">Laboratory Tests</a><br>
                    <a href="#">Departments</a><br>
                    <a href="#">Insurance Policy</a><br>
                    <a href="#">Careers</a><br>
                </div>
              </div>
            </div>

          </div>
          <div class="copyright-text">
            <p>Copyright &copy; 2022 Salem Ahmed

                </p>
        </div>
        {{--  --}}



    </footer>

      <script src="https://kit.fontawesome.com/5301593776.js" crossorigin="anonymous"></script>
</body>
</html>
