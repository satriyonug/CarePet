@extends('layouts.navbar')

@section('maincontent')
<div class="jumbotron jumbotron-fluid overlay">
   <div class="jumbo-heading">
      <!-- section-heading -->
      <div class="section-heading" data-aos="zoom-in">
         <h1>Contact Us</h1>
      </div>
      <!-- /section-heading -->
      <!-- Breadcrumbs -->
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
         </ol>
      </nav>
   </div>
   <!-- /jumbo-heading -->
</div>
<!-- /jumbotron -->
<!-- ==== Page Content ==== -->
<div class="page pb-0">
   <div class="container">
      <div class="row">
	   <!-- contact-info-->
         <div class="contact-info col-lg-5">
            <h4>Send us a message!</h4>
            <!-- Form Starts -->
            <div id="contact_form">
               <div class="form-group">
                  <div class="row">
                     <div class="col-md-6">
                        <label>Name<span class="required">*</span></label>
                        <input type="text" name="name" class="form-control input-field" required=""> 
                     </div>
                     <div class="col-md-6">
                        <label>Email Adress <span class="required">*</span></label>
                        <input type="email" name="email" class="form-control input-field" required=""> 
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control input-field"> 
                     </div>
                     <div class="col-md-12">
                        <label>Message<span class="required">*</span></label>
                        <textarea name="message" id="message" class="textarea-field form-control" rows="3"  required=""></textarea>
                     </div>
                  </div>
                  <button type="submit" id="submit_btn" value="Submit" class="btn btn-primary">Send message</button>
               </div>
			    <!-- /form-group-->
               <!-- Contact results -->
               <div id="contact_results"></div>
            </div>
			 <!-- /contact)form-->
         </div>
		  <!-- /contact-info-->
         <div class="col-lg-6 offset-lg-1 h-50 card bg-secondary res-margin ">
            <div class="contact-info text-light ">
                <!-- contact-info-->
			   <div class="text-light">
                  <h5>Information </h5>
                  <p>Mei te apeirian omittantur reformidans, duo in appetere interesset concludaturque. Est eruditi erroribus liberavisse in.
                  </p>
				   <!-- contact icons-->
                  <ul class="list-unstyled mt-5 list-contact">
                     <li class="h7"><i class="fa fa-envelope margin-icon"></i><a href="mailto:email@yoursite.com">email@yoursite.com</a></li>
                     <li class="h7"><i class="fa fa-phone margin-icon"></i>(123) 456-789</li>
                     <li class="h7" ><i class="fa fa-map-marker margin-icon"></i>Pet Street 123 - New York</li>
                  </ul>
				   <!-- /list-->
               </div>
			    <!-- /text-light -->
            </div>
            <!-- /contact-info-->
         </div>
         <!-- /col-lg-->
      </div>
	   <!-- /row-->
   </div>
   <!-- /container -->
</div>

@endsection