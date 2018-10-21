@extends('layouts.navbar')

@section('maincontent')
<div class="jumbotron jumbotron-fluid overlay">
   <div class="jumbo-heading">
      <!-- section-heading -->
      <div class="section-heading" data-aos="zoom-in">
         <h1>About Us</h1>
      </div>
      <!-- /section-heading -->
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About us</li>
         </ol>
      </nav>
   </div>
   <!-- /jumbo-heading -->
</div>
<!-- /jumbotron -->
<!-- ==== Page Content ==== -->
<div class="page">
   <div class="container block-padding pt-0">
      <div class="row">
         <div class="col-lg-6">
            <h3>Caring for your pets</h3>
            <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
            <p>Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall Maecenas at arcu risus scelerisque laoree.</p>
            <ul class="custom pl-0">
               <li>Orci eget, viverra elit liquam erat volut pat phas ellus ac</li>
               <li>Ipuset phas ellus ac sodales Lorem ipsum dolor Phas ell</li>
               <li>Aliquam erat volut pat phas ellu</li>
            </ul>
            <!-- /ul -->
         </div>
		  <!-- image -->
         <div class="col-lg-6">
            <img src="img/about2.html" alt="" class="img-fluid border-irregular1"   data-aos="zoom-in">
         </div>
      </div>
	   <!-- /row -->
   </div>
   <!-- /container -->
   <div class="bg-light-custom block-padding">
      <div class="container">
         <div id="counter" class="row">
            <!-- Counter -->
            <div class="col-xl-3 col-md-6">
               <div class="counter">
                  <i class="counter-icon fa fa-users"></i>
				<!-- insert your final value on data-count= -->
				  <div class="counter-value" data-count="1500">0</div>
                  <h3 class="title">Happy Clients</h3>
               </div>
               <!-- /counter -->
            </div>
            <!-- /col-lg -->
            <!-- Counter -->
            <div class="col-xl-3 col-md-6">
               <div class="counter">
                  <i class="counter-icon flaticon-dog-in-front-of-a-man"></i>
				  <!-- insert your final value on data-count= -->
				  <div class="counter-value" data-count="14">0</div>
                  <h3 class="title">Professionals</h3>
               </div>
               <!-- /counter -->
            </div>
            <!-- /col-lg -->
            <!-- Counter -->
            <div class="col-xl-3 col-md-6">
               <div class="counter">
                  <i class="counter-icon flaticon-dog-2"></i>
				 <!-- insert your final value on data-count= -->
				  <div class="counter-value" data-count="900">0</div>
                  <h3 class="title">Adopted Pets</h3>
               </div>
               <!-- /counter -->
            </div>
            <!-- /col-lg -->
            <!-- Counter -->
            <div class="col-xl-3 col-md-6">
               <div class="counter">
                  <i class="counter-icon flaticon-prize-badge-with-paw-print"></i>
				<!-- insert your final value on data-count= -->
				  <div class="counter-value" data-count="12">0</div>
                  <h3 class="title">Prizes</h3>
               </div>
               <!-- /counter -->
            </div>
            <!-- /col-lg -->
         </div>
		  <!-- /row -->
      </div>
	   <!-- /container -->
   </div>
    <!-- /block-padding -->
	 <div class="container bottom-block-padding">
      <h3 class="text-center">What our clients say</h3>
      <div class="col-md-12 mt-5">
         <div id="owl-testimonial" class="owl-carousel owl-theme">
            <!-- testimonial -->
            <div class="testimonial">
               <div class="content">
                  <p class="description">
                     Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.                        
                  </p>
               </div>
               <!-- /content -->
               <div class="testimonial-pic">
                  <img src="img/team/team1.html" class="img-fluid" alt="">
               </div>
               <!-- /testimonial-pic -->
               <div class="testimonial-review">
                  <h5 class="testimonial-title">Lucianna Smith</h5>
                  <span>Teacher</span>
               </div>
               <!-- /testimonial-review -->
            </div>
            <!-- /testimonial -->
            <!-- testimonial -->
            <div class="testimonial">
               <div class="content">
                  <p class="description">
                     Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.                        
                  </p>
               </div>
               <!-- /content -->
               <div class="testimonial-pic">
                  <img src="img/team/team2.html" class="img-fluid" alt="">
               </div>
               <!-- /testimonial-pic -->
               <div class="testimonial-review">
                  <h5 class="testimonial-title">John Sadana</h5>
                  <span>Doctor</span>
               </div>
               <!-- /testimonial-review -->
            </div>
            <!-- /testimonial -->
            <!-- testimonial -->
            <div class="testimonial">
               <div class="content">
                  <p class="description">
                     Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.                        
                  </p>
               </div>
               <!-- /content -->
               <div class="testimonial-pic">
                  <img src="img/team/team3.html" class="img-fluid" alt="">
               </div>
               <!-- /testimonial-pic -->
               <div class="testimonial-review">
                  <h5 class="testimonial-title">Jane Janeth</h5>
                  <span>Librarian</span>
               </div>
               <!-- /testimonial-review -->
            </div>
            <!-- /testimonial -->
         </div>
         <!-- /owl-testimonial -->
      </div>
      <!-- /col-md-12 -->
   </div>
   <!-- /container --></div>
   @endsection