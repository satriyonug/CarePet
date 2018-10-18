@extends('layouts.navbar')

@section('maincontent')
<div>
	   <!-- <div class="demo-icon">
		  <i class="fa fa-cog fa-spin fa-2x"></i>
	   </div> -->
	   <!-- end opener icon -->
	   <div class="form_holder text-center">
		  <div class="row">
			 <div class="col-lg-12">
				<div class="predefined_styles">
				 <h4>Template Options</h4>
				 <hr>
				   <p>Choose a Color Skin</p>
				   <!-- MODULE #3 -->
				    <div class="col-lg-12">
				   <a href="agility.html" class="styleswitch"><img src="switcher/images/agility.html" alt="Agility"></a>		
				   <a href="pethotel.html" class="styleswitch"><img src="switcher/images/pethotel.html" alt="Pet Hotel"></a>		
				   <a href="petshop.html" class="styleswitch"><img src="switcher/images/petshop.html" alt="Pet Shop"></a>		
				   </div>
				    <div class="col-lg-12">
				   <a href="dogwalker.html" class="styleswitch"><img src="switcher/images/dogwalker.html" alt="Dog walker"></a>	
                    <a href="vetclinic.html" class="styleswitch"><img src="switcher/images/vetclinic.html" alt="Vet Clinic"></a>				   
				   <a href="maincolors.html" class="styleswitch"><img src="switcher/images/maincolors.html" alt="Main Colors"></a>
                   </div>				   
				   <!-- END MODULE #3 -->
				</div>
				<!-- end predefined_styles -->
				<p>Change Home Header</p>
				<select id="headers" class="show-menu-arrow selectpicker" onchange="document.location = this.value">
				   <option value="">Select</option>
				   <option value="index2.html">Video Header</option>
				   <option value="index.html">Layerslider Header</option>
				</select>
				<p>Layout</p>
					<a href="index_boxed.html" class="btn btn-primary btn-sm">Boxed</a>
				<a href="index.html" class="btn btn-primary btn-sm">Full Width</a>
			 </div>
			 <!-- end col -->
		  </div>
		  <!-- end row -->
	   </div>
	   <!-- end form_holder -->
	</div>
	<!-- end demo_changer -->
	<!-- End Switcher -->
      <!-- Preloader -->
      <div id="preloader">
         <div class="spinner">
            <div class="bounce1"></div>
         </div>
		  <!-- /spinner -->
      </div>
      <!-- /Preloader ends -->
      <nav id="main-nav" class="navbar-expand-xl fixed-top">
         <div class="row">
            <!-- Start Top Bar -->
            <div class="container-fluid top-bar">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <!-- Start Contact Info -->
                        <ul class="contact-details float-left">
                           <li><i class="fa fa-map-marker"></i>Pet Street 123 - New York</li>
                           <li><i class="fa fa-envelope"></i><a href="mailto:email@site.com">email@yoursite.com</a></li>
                           <li><i class="fa fa-phone"></i>(123) 456-789</li>
                        </ul>
                        <!-- End Contact Info -->
                        <!-- Start Social Links -->
                        <ul class="social-list float-right list-inline">
                           <li class="list-inline-item"><a title="Facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                           <li class="list-inline-item"><a title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                           <li class="list-inline-item"><a  title="Instagram" href="#"><i class="fab fa-instagram"></i></a></li>								
                        </ul>
                        <!-- /End Social Links -->
                     </div>
					  <!-- col-md-12 -->
                  </div>
				   <!-- /row -->
               </div>
			    <!-- /container -->
            </div>
            <!-- End Top bar -->
            <!-- Navbar Starts -->
            <div class="navbar container-fluid">
               <div class="container ">
			     <!-- logo -->
                  <a class="navbar-brand" href="index.html">
					  <i class="flaticon-dog-20"></i><span>Woof!</span>
				  </a>
                 <!-- Navbartoggler -->
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggle-icon">
					 <i class="fas fa-bars"></i>
					</span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                     <ul class="navbar-nav ml-auto">
					  <!-- menu item -->
                        <li class="nav-item">
                           <a class="nav-link" href="index.html">Home
                           </a>
                        </li>
						  <!-- menu item -->
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="services-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Services
                           </a>
                           <div class="dropdown-menu" aria-labelledby="services-dropdown">
                              <a class="dropdown-item" href="services.html">Services Style 1</a>
                              <a class="dropdown-item" href="services2.html">Services Style 2</a>
                              <a class="dropdown-item" href="services-single.html">Services Single</a>
                           </div>
                        </li>
						  <!-- menu item -->
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="about-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           About
                           </a>
                           <div class="dropdown-menu" aria-labelledby="about-dropdown">
                              <a class="dropdown-item" href="about.html">About Style 1</a>
                              <a class="dropdown-item" href="about2.html">About Style 2</a>
                           </div>
                        </li>					
						  <!-- menu item -->
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="adopt-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Adopt
                           </a>
                           <div class="dropdown-menu" aria-labelledby="adopt-dropdown">
                              <a class="dropdown-item" href="adoption.html">Adoption Gallery</a>
                              <a class="dropdown-item" href="adoption-single.html">Adoption Single Page</a>
                           </div>
                        </li>
						  <!-- menu item -->
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="gallery-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Gallery
                           </a>
                           <div class="dropdown-menu" aria-labelledby="gallery-dropdown">
                              <a class="dropdown-item" href="gallery.html">Gallery Style 1</a>
                              <a class="dropdown-item" href="gallery2.html">Gallery Style 2</a>
                           </div>
                        </li>
						  <!-- menu item -->
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="contact-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Contact
                           </a>
                           <div class="dropdown-menu" aria-labelledby="contact-dropdown">
                              <a class="dropdown-item" href="contact.html">Contact Style 1</a>
                              <a class="dropdown-item" href="contact2.html">Contact Style 2</a>
                           </div>
                        </li>
						 <!-- menu item -->
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="others-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Other pages
                           </a>
                           <div class="dropdown-menu" aria-labelledby="others-dropdown">
                              <a class="dropdown-item" href="team.html">Our Team</a>
                              <a class="dropdown-item" href="blog.html">Blog Home</a>
                              <a class="dropdown-item" href="blog-single.html">Blog Single</a>
							  <a class="dropdown-item" href="elements.html">Elements Page</a>
							  <a class="dropdown-item" href="404.html">404 Page</a>
                           </div>
                        </li>
                     </ul>
					 <!--/ul -->
                  </div>
				   <!--collapse -->
               </div>
			    <!-- /container -->
            </div>
			 <!-- /navbar -->
         </div>
		  <!--/row -->
      </nav>
	   <!-- /nav --><!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid overlay">
   <div class="jumbo-heading">
      <!-- section-heading -->
      <div class="section-heading" data-aos="zoom-in">
         <h1>Our Services</h1>
      </div>
      <!-- /section-heading -->
      <!-- Breadcrumbs -->
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Services 1</li>
         </ol>
      </nav>
      <!-- /nav -->
   </div>
   <!-- /jumbo-heading -->
</div>
<!-- /jumbotron -->
<!-- ==== Page Content ==== -->
<div class="page">
	<div class="container">
   <div class="container block-padding pt-0">
      <div class="row">
         <div class="col-xl-6">
            <h3>The best for your pet!</h3>
            <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
            <p><strong>Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall Maecenas at arcu risus scelerisque laoree.</strong></p>
            <!-- ul custom-->
            <ul class="custom pl-0">
               <li>Aliquam erat volut pat.</li>
               <li>Ibu lum orci eget, viverra elit liquam erat volut pat phas ellus ac.</li>
               <li>Aliquam erat volut pat phas ellu</li>
            </ul>
         </div>
         <!-- /col-xl-->
         <div class="col-xl-6">
            <img src="img/services2.html" alt=""   data-aos="fade-down"  data-aos-duration="1500"  class="img-fluid border-irregular1 border-double">
         </div>
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->

    
@endsetion