@extends('layouts.navbar')

@section('maincontent')
<div class="jumbotron jumbotron-fluid overlay">
   <div class="jumbo-heading">
      <!-- section-heading -->
      <div class="section-heading" data-aos="zoom-in">
         <h1>Our Team</h1>
      </div>
      <!-- /section-heading -->
      <!-- Breadcrumbs -->
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Team</li>
         </ol>
      </nav>
   </div>
   <!-- /jumbo-heading -->
</div>
<!-- /jumbotron -->
<!-- ==== Page Content ==== -->
<div class="page">
   <!-- /container-->
   <div class="bg-light-custom block-padding">
      <!-- Team style 2 -->
      <h3 class="text-center">Team Style 2</h3>
      <div class="container">
         <div id="owl-team2" class="owl-carousel owl-theme">
            <!-- Team member -->
            <figure class="col-lg-12 team-style2">
               <!-- image -->
               <img src="{{ URL::asset('carepet/img/team/team1.html') }}" alt="" class="img-fluid"/>
               <figcaption>
                  <!-- social icons -->
                  <div class="icons">
                     <a href="#"><i class="fa fa-envelope"></i></a>
                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                     <a href="#"><i class="fab fa-instagram"></i></a>
                  </div>
               </figcaption>
               <!-- name -->
               <div class="name">
                  <h4> Mary Smith</h4>
                  <h6>Trainer</h6>
               </div>
               <!-- /name -->
            </figure>
            <!-- /figure- -->
            <!-- Team member -->
            <figure class="col-lg-12 team-style2">
               <!-- image -->
               <img src="{{ URL::asset('carepet/img/team/team2.html') }}" alt="" class="img-fluid"/>
               <figcaption>
                  <!-- social icons -->
                  <div class="icons">
                     <a href="#"><i class="fa fa-envelope"></i></a>
                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                     <a href="#"><i class="fab fa-instagram"></i></a>
                  </div>
               </figcaption>
               <!-- name -->
               <div class="name">
                  <h4>John Doe</h4>
                  <h6>Pet Expert</h6>
               </div>
               <!-- /name -->
            </figure>
            <!-- /figure- -->
            <!-- Team member -->
            <figure class="col-lg-12 team-style2">
               <!-- image -->
               <img src="{{ URL::asset('carepet/img/team/team3.html') }}" alt="" class="img-fluid"/>
               <figcaption>
                  <!-- social icons -->
                  <div class="icons">
                     <a href="#"><i class="fa fa-envelope"></i></a>
                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                     <a href="#"><i class="fab fa-instagram"></i></a>
                  </div>
               </figcaption>
               <!-- name -->
               <div class="name">
                  <h4>Alissa Silva</h4>
                  <h6>Veterinarian</h6>
               </div>
               <!-- /name -->
            </figure>
            <!-- /figure- -->
            <!-- Team member -->
            <figure class="col-lg-12 team-style2">
               <!-- image -->
               <img src="{{ URL::asset('carepet/img/team/team4.html') }}" alt="" class="img-fluid"/>
               <figcaption>
                  <!-- social icons -->
                  <div class="icons">
                     <a href="#"><i class="fa fa-envelope"></i></a>
                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                     <a href="#"><i class="fab fa-instagram"></i></a>
                  </div>
               </figcaption>
               <!-- name -->
               <div class="name">
                  <h4>Ana Doe</h4>
                  <h6>Veterinarian</h6>
               </div>
               <!-- /name -->
         </div>
         <!-- /owl-team2 -->
      </div>
      <!-- /container -->   </div>
   <!-- /bg-light-custom -->
</div>
@endsection