@extends('Patient.Patientheader')
@section('content')

<!DOCTYPE html>
<html lang="en">

<body id="top" >







 <!-- Make Appoinment section -->
 <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
            <div class="container">
                <div class=" row  d-flex mt-5">
                    {{-- @foreach($st as $s) --}}
                  <div class="col bg-primary text-white m-1 p-2 rounded ">
                  <div class="ms-5 py-2">
                      <p>hello</p>
                    {{-- <p>{{$s->name}}</p>
                    <p>Problem-Type:{{$s->problemtype}}</p>
                    <p>Date:{{$s->date}}</p> --}}
                    {{-- <button type="button" class="btn btn-danger"> <a style="text-decoration: none" href="{{route('Appointment.Delete',['id'=>$s->id])}}">Delete</a></button> --}}
                  </div>


                  </div>
                  {{-- @endforeach --}}
                </div>
              </div>

                    </div>

               </div>
          </div>
     </section>









     <!-- FOOTER section-->
     <footer data-stellar-background-ratio="5">

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text">
                                   <p>Copyright &copy; 2018 Your Company

                                   | Design: Tooplate</p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link">
                                   <a href="#">Laboratory Tests</a>
                                   <a href="#">Departments</a>
                                   <a href="#">Insurance Policy</a>
                                   <a href="#">Careers</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn">
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>

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
