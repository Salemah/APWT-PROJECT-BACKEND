@extends('Patient.Patientheader')
@section('content')

<!DOCTYPE html>
<html lang="en">

<body id="top" >

   





 <!-- Make Appoinment section -->
 <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
            <span class="text-success">{{Session::get('msg')}}</span><br>
                         <!-- Register form -->
                         <div class="w-75">
                            <form id="appointment-form" role="form" method="post" action="{{route('Patient.Appointment')}}">
                                {{csrf_field()}}
                                <!-- Register section title -->
                                <div class="section-title " >
                                     <h2>Fill appoinment form</h2>
                                </div>

                                <div class="wow fadeInUp" data-wow-delay="0.8s">
                                     <div class="col-md-4 col-sm-4 ">
                                          <label for="name">Name</label>
                                          <input type="text" value="{{Session::get('name')}}" class="form-control" id="name" name="name" placeholder="Full Name">
                                     </div>



                                      <div class="col-md-4 col-sm-4">
                                          <label for="select">Select Problem type </label>
                                          <select class="form-control" name="problem">
                                               <option>Eye</option>
                                               <option>Ear</option>
                                               <option>Skin</option>

                                          </select>
                                     </div>

                                     <div class="col-md-4 col-sm-4">
                                          <label for="date">Select Date</label>
                                          <input type="date" name="date" value="" class="form-control">
                                     </div>

                                     <div class="col-md-4 col-sm-4">
                                     <label for="Message">Details</label>
                                      <textarea class="form-control" rows="3" id="message" name="message" placeholder="Message"></textarea>
                                     </div>


                              <div class="col-md-12 col-sm-12">

                                          <button type="submit" class="form-control" id="cf-submit" name="submit">Create appoinment</button>
                                     </div>


                                </div>
                          </form>
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
