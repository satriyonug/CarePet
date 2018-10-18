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
                  <h6>Fun Activities</h6>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum malesuada.
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
                  <h6>Pet Hotel</h6>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum malesuada.
                  </p>
                  <a class="btn btn-primary" href="services-single.html">read more</a>
               </div>
            </div>
         </div>
         <!-- service 3  -->
         <div class="col-md-12">
            <div class="serviceBox">
               <!-- service icon -->
               <div class="service-icon">
                  <i class="flaticon-animals-2"></i>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <h6>Grooming Services</h6>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum malesuada.
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
                  <h6>Veterinary 24/7</h6>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum malesuada.
                  </p>
                  <a class="btn btn-primary" href="services-single.html">read more</a>
               </div>
            </div>
         </div>
         <!-- service 5 -->
         <div class="col-md-12">
            <div class="serviceBox">
               <!-- service icon -->
               <div class="service-icon">
                  <i class="flaticon-syringe"></i>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <h6>Vaccines</h6>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum malesuada.
                  </p>
                  <a class="btn btn-primary" href="services-single.html">read more</a>
               </div>
            </div>
         </div>
         <!-- service 6 -->
         <div class="col-md-12">
            <div class="serviceBox">
               <!-- service icon -->
               <div class="service-icon">
                  <i class="flaticon-dog-training-3"></i>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <h6>Training</h6>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum malesuada.
                  </p>
                  <a class="btn btn-primary" href="services-single.html">read more</a>
               </div>
            </div>
         </div>
         <!--col-md-12  -->
      </div>
      <!-- /owl-services -->
   </div>
   <!-- /bg-light-custom -->   </div>
   <!-- /container -->
</section>
@endsection