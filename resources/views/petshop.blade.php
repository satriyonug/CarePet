@extends('layouts.navbar')

@section('maincontent')

<div class="jumbotron jumbotron-fluid overlay">
   <div class="jumbo-heading">
      <!-- section-heading -->
      <div class="section-heading" data-aos="zoom-in">
         <h1>Adoption</h1>
      </div>
      <!-- /section-heading -->
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pet Shop</li>
         </ol>
      </nav>
   </div>
   <!-- /jumbo-heading -->
</div>
<!-- /jumbotron -->
<!-- ==== Page Content ==== -->
<div class="page">
   <div class="container block-padding pt-0">
      <div class="section-heading text-center">
         <h2>Adopt a Pet</h2>
      </div>
      <!-- First row: Adopt a pet -->
      <div class="row">
         <div class="col-sm-4">
            <div class="row">
               <div class="col-sm-6">
                  <div class="dropdown">
                     <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Category</button>
                     <ul class="dropdown-menu">
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                     </ul>   
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="dropdown">
                     <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Filter</button>
                     <ul class="dropdown-menu">
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                     </ul>   
                  </div>
               </div>        
            </div>    
         </div>

         <div class="col-sm-8">               
                  <div class="card-body">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
               
            
         </div>
      </div>
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
      </div>
      <!-- /row -->      <!-- Second row: Adopt a pet -->
      <div class="row mt-5">
         <!-- Pet  -->
         <div class="adopt-card col-md-6 col-xl-3 res-margin">
            <div class="card bg-light-custom">
               <div class="thumbnail text-center">
                  <!-- Image -->
                  <img src="{{ URL::asset('carepet/img/adoption/adoption5.html') }}" class="border-irregular1 img-fluid" alt="">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h6 class="adoption-header">Joanne</h6>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Gender:</strong> Female</li>
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
         <!-- Pet  -->
         <div class="adopt-card col-md-6 col-xl-3 res-margin">
            <div class="card bg-light-custom">
               <div class="thumbnail text-center">
                  <!-- Image -->
                  <img src="{{ URL::asset('carepet/img/adoption/adoption6.html') }}" class="border-irregular1 img-fluid" alt="">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h6 class="adoption-header">Cutesy</h6>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Gender:</strong>Male</li>
                        <li><strong>Neutered: </strong> Yes</li>
                        <li><strong>Age:</strong> 3 months</li>
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
         <!-- Pet  -->
         <div class="adopt-card col-md-6 col-xl-3 res-margin">
            <div class="card bg-light-custom">
               <div class="thumbnail text-center">
                  <!-- Image -->
                  <img src="{{ URL::asset('carepet/img/adoption/adoption7.html') }}" class="border-irregular1 img-fluid" alt="">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h6 class="adoption-header">Kittie</h6>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Gender:</strong>Male</li>
                        <li><strong>Neutered: </strong>No</li>
                        <li><strong>Age:</strong> 1 year</li>
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
         <!-- Pet  -->
         <div class="adopt-card col-md-6 col-xl-3 res-margin">
            <div class="card bg-light-custom">
               <div class="thumbnail text-center">
                  <!-- Image -->
                  <img src="{{ URL::asset('carepet/img/adoption/adoption8.html') }}" class="border-irregular1 img-fluid" alt="">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h6 class="adoption-header">Jack</h6>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Gender:</strong> Male</li>
                        <li><strong>Neutered: </strong> Yes</li>
                        <li><strong>Age:</strong> 8 months</li>
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
      </div>
      <!-- /row -->
      <div class="col-md-12 mt-5">
	    <!-- pagination -->
         <nav aria-label="pagination">
            <ul class="pagination float-right">
               <li class="page-item"><a class="page-link active" href="#">1</a></li>
               <li class="page-item"><a class="page-link" href="#">2</a></li>
               <li class="page-item"><a class="page-link" href="#">3</a></li>
               <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
         </nav>
		   <!-- /nav -->
      </div>
	   <!-- /col-md -->
   </div>
   <!-- /container -->
</div>

@endsection