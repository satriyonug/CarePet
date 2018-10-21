@extends('layouts.navbar')

@section('maincontent')
<div id="slider" style="width:1200px;height:800px;margin:0 auto;margin-bottom: 0px;">
   <!-- Slide 2 -->
   <div class="ls-slide" data-ls="duration:4000; transition2d:7; kenburnszoom:out; kenburnsrotate:-5; kenburnsscale:1.2;">
      <!-- bg image  -->
      <img src="{{ URL::asset('carepet/img/slide1.html') }}" class="ls-bg" alt="" />
      <!-- text  -->
      <div class="ls-l header-wrapper" data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; parallaxlevel:0;">
         <div class="header-text dog-elements">
            <h1>Adopt a pet today!</h1>
            <!--the div below is hidden on small screens  -->
            <div class="d-none d-sm-block">
               <p class="header-p">Search our list of dogs, cats and other pets available for adoption near you</p>
               <a class="btn btn-primary " href="adoption.html">Adopt Today</a>
            </div>
            <!--/d-none  -->
         </div>
         <!-- header-text  -->
      </div>
      <!-- ls-l  -->
   </div>
   <!-- ls-slide -->
   <!-- Slide 2 -->
   <div class="ls-slide" data-ls="duration:4000; transition2d:7; kenburnszoom:out; kenburnsrotate:-5; kenburnsscale:1.2;">
      <!-- bg image  -->
      <img src="{{ URL::asset('carepet/img/slide2.html') }}" class="ls-bg" alt="" />
      <!-- text  -->
      <div class="ls-l header-wrapper" data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; parallaxlevel:0;">
         <div class="header-text cat-elements">
		   <h1>High Quality pet food</h1>
            <!--the div below is hidden on small screens  -->
            <div class="d-none d-sm-block">
               <p class="header-p">We have all the best products for your pet, visit our store today!</p>
               <a class="btn btn-primary " href="contact.html">Contact us</a>
            </div>
            <!--/d-none  -->
         </div>
         <!-- header-text  -->
      </div>
      <!-- ls-l  -->
   </div>
   <!-- ls-slide -->
    <!-- Slide 3 -->
   <div class="ls-slide" data-ls="duration:4000; transition2d:7; kenburnszoom:out; kenburnsrotate:-5; kenburnsscale:1.2;">
      <!-- bg image  -->
      <img src="{{ URL::asset('carepet/img/slide3.html') }}" class="ls-bg" alt="" />
      <!-- text  -->
      <div class="ls-l header-wrapper" data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; parallaxlevel:0;">
         <div class="header-text dog-elements">
            <h1>Visit our Pet Hotel</h1>
            <!--the div below is hidden on small screens  -->
            <div class="d-none d-sm-block">
               <p class="header-p">Our facility is designed to meet the unique needs of your pet</p>
               <a class="btn btn-primary " href="services.html">Our services</a>
            </div>
            <!--/d-none  -->
         </div>
         <!-- header-text  -->
      </div>
      <!-- ls-l  -->
   </div>
   <!-- ls-slide -->
   <!-- Slide 4 -->
   <div class="ls-slide" data-ls="duration:4000; transition2d:7; kenburnszoom:out; kenburnsrotate:-5; kenburnsscale:1.2;">
      <!-- bg image  -->
      <img src="{{ URL::asset('carepet/img/slide4.html') }}" class="ls-bg" alt="" />
      <!-- text  -->
      <div class="ls-l header-wrapper" data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; parallaxlevel:0;">
         <div class="header-text cat-elements">
           <h1>Experienced Veterinarians</h1>
            <!-- the div below is hidden on small screens  -->
            <div class="d-none d-sm-block">
               <p class="header-p">Your pet is in good hands, meet our highly qualified professionals</p>
               <a class="btn btn-primary " href="team.html">Our Team</a>
            </div>
            <!--/d-none  -->
         </div>
         <!-- header-text  -->
      </div>
      <!-- ls-l  -->
   </div>
   <!-- ls-slide -->
</div>
   
<section id="services" class="cat-bg3">
   <div class="container">
      <div class="section-heading text-center">
         <h2>Our Services</h2>
      </div>
   
   <!-- services carousel -->
   <div class="bg-light-custom block-padding border-irregular1">
      <div id="owl-services" class="container owl-carousel owl-theme">
         <!-- service 1  -->
         <div class="col-md-12">
            <div class="serviceBox">
               <!-- service icon -->
               <div class="service-icon">
                  <i class="flaticon-people-1"></i>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <h6>Vet Shop</h6>
                  <p>
                     Kamu bisa membelikan apapun untuk hewan kesayanganmu.
                  </p>
                  <a class="btn btn-primary" href="services-single.html">read more</a>
               </div>
            </div>
         </div>
         <!-- service 2  -->
         <div class="col-md-12">
            <div class="serviceBox">
               <!-- service icon -->
               <div class="service-icon">
                  <i class="flaticon-pet-shelter"></i>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <h6>Vet Care</h6>
                  <p>
                     Kamu bisa menitipkan dan juga melakukan perawatan untuk hewan kesayanganmu.
                  </p>
                  <a class="btn btn-primary" href="services-single.html">read more</a>
               </div>
            </div>
         </div>
         
         <!-- service 4 -->
         <div class="col-md-12">
            <div class="serviceBox">
               <!-- service icon -->
               <div class="service-icon">
                  <i class="flaticon-dog-with-first-aid-kit-bag"></i>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <h6>Vet Consultation</h6>
                  <p>
                     Kamu bisa sharing hal apapun tentang hewan kesayanganmu ke dokter hewan kami.
                  </p>
                  <a class="btn btn-primary" href="services-single.html">read more</a>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="serviceBox">
               <!-- service icon -->
               <div class="service-icon">
                  <i class="flaticon-dog-training-3"></i>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <h6>Send Pet</h6>
                  <p>
                     Kamu bisa mengantarkan hewan peliharaanmu kemanapun kamu inginkan.
                  </p>
                  <a class="btn btn-primary" href="services-single.html">read more</a>
               </div>
            </div>
         </div>
         <!-- service 5 -->
         <div class="col-md-12">
            <div class="serviceBox">
               <!-- service icon -->
               
               <!-- service content -->
               <div class="service-content">
                  <h6></h6>
                  <p>
                     
                  </p>
                  
               </div>
            </div>
         </div>
         <!-- service 6 -->
         
         <!--col-md-12  -->
      </div>
      <!-- /owl-services -->
   </div>
   <!-- /bg-light-custom -->   </div>
   <!-- /container -->
</section>
<section id="adopt" class="paws-house-bg1 bg-light">
   <div class="container ">
      <div class="section-heading text-center">
         <h2>Adopt a Pet</h2>
      </div>
      <!-- /Section-heading -->
      <div class="col-lg-10 offset-lg-1 text-center">
         <h3>Find a new furry Friend</h3>
      </div>
       <!-- First row: Adopt a pet -->
      <div class="row mt-5">
         <!-- Pet  -->
         <div class="adopt-card col-md-6 col-xl-3 res-margin">
            <div class="card bg-light-custom">
               <div class="thumbnail text-center">
                  <!-- Image -->
                  <img src="{{ URL::asset('carepet/img/adoption/adoption1.html') }}" class="border-irregular1 img-fluid" alt="">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h6 class="adoption-header">Fluffy</h6>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Gender:</strong> Female</li>
                        <li><strong>Neutered: </strong> Yes</li>
                        <li><strong>Age:</strong> 2 years</li>
                     </ul>
                     <!-- Buttons -->								  
                     <div class="text-center">
                        <a href="adoption-single.html" class="btn btn-primary">More Info</a>
                     </div>
                  </div>
               </div>
               <!-- /thumbnail -->
            </div>
            <!-- /card -->
         </div>
         <!-- /adopt-card -->
         <!-- /pet -->
         <!-- Pet  -->
         <div class="adopt-card col-md-6 col-xl-3 res-margin">
            <div class="card bg-light-custom">
               <div class="thumbnail text-center">
                  <!-- Image -->
                  <img src="{{ URL::asset('carepet/img/adoption/adoption2.html') }}" class="border-irregular1 img-fluid" alt="">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h6 class="adoption-header">Charlie</h6>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Gender:</strong> Male</li>
                        <li><strong>Neutered: </strong> Yes</li>
                        <li><strong>Age:</strong> 2 years</li>
                     </ul>
                     <!-- Buttons -->								  
                     <div class="text-center">
                        <a href="adoption-single.html" class="btn btn-primary">More Info</a>
                     </div>
                  </div>
               </div>
               <!-- /thumbnail -->
            </div>
            <!-- /card -->
         </div>
         <!-- /adopt-card -->
         <!-- /pet -->
         <!-- Pet  -->
         <div class="adopt-card col-md-6 col-xl-3 res-margin">
            <div class="card bg-light-custom">
               <div class="thumbnail text-center">
                  <!-- Image -->
                  <img src="{{ URL::asset('carepet/img/adoption/adoption3.html') }}" class="border-irregular1 img-fluid" alt="">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h6 class="adoption-header">Lucky</h6>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Gender:</strong> Male</li>
                        <li><strong>Neutered: </strong> Yes</li>
                        <li><strong>Age:</strong> 5 years</li>
                     </ul>
                     <!-- Buttons -->								  
                     <div class="text-center">
                        <a href="adoption-single.html" class="btn btn-primary">More Info</a>
                     </div>
                  </div>
               </div>
               <!-- /thumbnail -->
            </div>
            <!-- /card -->
         </div>
         <!-- /adopt-card -->
         <!-- /pet -->
         <!-- Pet  -->
         <div class="adopt-card col-md-6 col-xl-3 res-margin">
            <div class="card bg-light-custom">
               <div class="thumbnail text-center">
                  <!-- Image -->
                  <img src="{{ URL::asset('carepet/img/adoption/adoption4.html') }}" class="border-irregular1 img-fluid" alt="">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h6 class="adoption-header">Magdalene</h6>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Gender:</strong> Female</li>
                        <li><strong>Neutered: </strong> No</li>
                        <li><strong>Age:</strong> 2 years</li>
                     </ul>
                     <!-- Buttons -->								  
                     <div class="text-center">
                        <a href="{{ url('/petshop') }}" class="btn btn-primary">More Info</a>
                     </div>
                  </div>
               </div>
               <!-- /thumbnail -->
            </div>
            <!-- /card -->
         </div>
         <!-- /adopt-card -->
         <!-- /pet -->
      </div>
      <!-- /row -->      <div class="text-center mt-5">
         <a href="adoption.html" class="btn btn-secondary btn-lg">See more pets</a>
      </div>
   </div>
   <!-- /container -->
</section>
<!-- / Section Ends -->
            <div style="display: none;" id="map-canvas"></div>
   
@endsection