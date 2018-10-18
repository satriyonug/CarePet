<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
	  <!-- page title -->
      <title>CAREPET</title>
	   <!--[if lt IE 9]>
      <script src="js/respond.js"></script>
      <![endif]-->
	  <!-- Font files -->
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CQuicksand:400,500,700" rel="stylesheet">
      <link href="{{ URL::asset('carepet/fonts/flaticon/flaticon.html') }}" rel="stylesheet" type="text/css">
      <link href="{{ URL::asset('carepet/fonts/fontawesome/fontawesome-all.min.html') }}" rel="stylesheet" type="text/css">
	  <!-- Fav icons -->
      <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('carepet/apple-icon-57x57.html') }}">
      <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('carepet/apple-icon-72x72.html') }}">
      <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('carepet/apple-icon-114x114.html') }}">
      <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('carepet/favicon.html') }}">
      <!-- Bootstrap core CSS -->
      <link href="{{ URL::asset('carepet/vendor/bootstrap/css/bootstrap.min.html') }}" rel="stylesheet">
      <!-- style CSS -->
      <link href="{{ URL::asset('carepet/css/style.html') }}" rel="stylesheet">
      <!-- plugins CSS -->
      <link href="{{ URL::asset('carepet/css/plugins.html') }}" rel="stylesheet">
      <!-- Colors CSS -->
      <link href="{{ URL::asset('carepet/styles/maincolors.html') }}" rel="stylesheet">
      <!-- LayerSlider CSS -->
      <link rel="stylesheet" href="{{ URL::asset('carepet/vendor/layerslider/css/layerslider.html') }}">
	   <!-- Switcher Only -->
	<link rel="stylesheet" id="switcher-css" type="text/css" href="{{ URL::asset('carepet/switcher/css/switcher.html') }}" media="all" />
	<!-- END Switcher Styles -->

	<!-- Demo Examples (For Module #3) -->
	<link rel="alternate stylesheet" type="text/css" href="{{ URL::asset('carepet/styles/agility.html') }}" title="agility" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="{{ URL::asset('carepet/styles/dogwalker.html') }}" title="dogwalker" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="{{ URL::asset('carepet/styles/maincolors.html') }}" title="maincolors" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="{{ URL::asset('carepet/styles/pethotel.html') }}" title="pethotel" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="{{ URL::asset('carepet/styles/petshop.html') }}" title="petshop" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="{{ URL::asset('carepet/styles/vetclinic.html') }}" title="vetclinic" media="all" />
	<!-- END Demo Examples -->
   </head>
   <body id="top">
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
                           <li><i class="fa fa-map-marker"></i>Keputih, Sukolilo, Kota SBY, Jawa Timur</li>
                           <li><i class="fa fa-envelope"></i><a href="mailto:email@site.com">carepet@yoursite.com</a></li>
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
					  <i class="flaticon-dog-20"></i><span>CAREPET!</span>
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

		@yield('maincontent')

	  <footer class="text-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<a class="navbar-brand" href="index.html"><i class="flaticon-dog-20"></i><span>Woof!</span></a>
					<p class="mt-3">Cras enim wisi elit aenean, amet eros curabitur. Wisi ad eget ipsum metus sociis Cras enim wisi elit aenean.</p>
				</div>
				<!--/ col-lg -->
				<div class="col-lg-3">
					<h6><i class="fas fa-envelope margin-icon"></i>Contact Us</h6>
					<ul class="list-unstyled">
					<li>(123) 456-789</li>
					<li><a href="mailto:email@yoursite.com">email@yoursite.com</a></li>
					<li>Pet Street 123 - New York </li>
					</ul>
					<!--/ul -->
				</div>
				<!--/ col-lg -->
				<div class="col-lg-3">
					<h6><i class="far fa-clock margin-icon"></i>Working Hours</h6>
					<ul class="list-unstyled">
					<li>Open 9am - 10pm</li>
					<li>Holidays - Closed</li>
					<li>Weekends - Closed</li>
					</ul>
					<!--/ul -->
				</div>
				<!--/ col-lg -->
			</div>
			<!--/ row-->
			<div class="row">
				<div class="credits col-sm-12">
					<p>Copyright 2018 / Designed by <a href="http://www.ingridkuhn.com/">Ingrid Kuhn</a></p>
				</div>
			</div>
			<!--/ row -->
		</div>
		<!--/ container -->
		<!-- Go To Top Link -->
		<div class="page-scroll hidden-sm hidden-xs">
			<a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
		</div>
		<!--/page-scroll-->
		</footer>

		<script src="{{ URL::asset('carepet/vendor/jquery/jquery.min.html') }}"></script>
		<script src="{{ URL::asset('carepet/vendor/bootstrap/js/bootstrap.min.html') }}"></script>
		<!-- Custom Js -->
		<script src="{{ URL::asset('carepet/js/custom.html') }}"></script>
		<script src="{{ URL::asset('carepet/js/plugins.html') }}"></script>
		<!-- Prefix free -->
		<script src="{{ URL::asset('carepet/js/prefixfree.min.html') }}"></script>
		<!-- Bootstrap Select Tool (For Module #4) -->
		<script src="{{ URL::asset('carepet/switcher/js/bootstrap-select.html') }}"></script>
		<!-- All Scripts & Plugins -->
		<script src="{{ URL::asset('carepet/switcher/js/dmss.html') }}"></script>	
   </body>
</html>

<script src="{{ URL::asset('carepet/vendor/layerslider/js/greensock.html') }}"></script>
<!-- LayerSlider script files -->
<script src="{{ URL::asset('carepet/vendor/layerslider/js/layerslider.transitions.html') }}"></script>
<script src="{{ URL::asset('carepet/vendor/layerslider/js/layerslider.kreaturamedia.jquery.html') }}"></script>
<script src="{{ URL::asset('carepet/vendor/layerslider/js/layerslider.load.html') }}"></script>
<!-- Google maps -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script src="{{ URL::asset('carepet/js/map.html') }}"></script>
<!-- Mailchimp script -->
<script src="{{ URL::asset('carepet/js/mailchimp.html') }}"></script>
<!-- number counter script -->
<script src="{{ URL::asset('carepet/js/counter.html') }}"></script>
<!-- Contact Form script -->
<script src="{{ URL::asset('carepet/js/contact.html') }}"></script>