@extends('layouts.template')

@section('maincontent')
<div class="page-title grey">
	<div class="container">
		<div class="title-area pull-left">
			<h2>Appointment Form <small>Get a premium appointment now!</small></h2>
			<div class="bread">
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Appointment Form</li>
				</ol>
			</div>
		</div>
		<div class="search pull-right">
			<form>
				<div class="input-group">
					<input class="form-control" name="s" type="search" placeholder=" Search... ">
					<span class="input-group-btn">
					<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
					</span>
				</div>
			</form>
		</div>
	</div>
</div>

<section class="section white">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-xs-12">
				<div class="appoform-wrapper">
					<form method="post">
						<header class="form-header">
							<h3>Appointment Form</h3>
						</header>
						<div class="post-body-form text-center">
							<p>In order to provide better service to you, PetVet Veterinary Clinic, and Send Pet<br>
						It is working with the appointment system. Please fill in the following form completely.</p>
						</div>
						<fieldset class="row-fluid appoform">
							<div class="col-md-6">
								<label class="sr-only">Appointment time</label>
								<input id="datepicker" type="text" placeholder="Appointment time" class="form-control">
							</div>
							<div class="col-md-6">
								<label class="sr-only">Your name</label>
								<input type="text" placeholder="Your full name *" class="form-control">
							</div>
							<div class="col-md-6">
								<label class="sr-only">Phone number</label>
								<input type="text" placeholder="Phone number *" class="form-control">
							</div>
							<div class="col-md-6">
								<label class="sr-only">Email address</label>
								<input type="email" placeholder="Email address *" class="form-control">
							</div>
							<div class="col-md-6">
								<label class="sr-only">Select Vet</label>
								<select class="selectpicker" data-style="btn-white">
									<option value="12">-- Select Vet --</option>
									<option value="amanda">Vet : Amanda JOE</option>
									<option value="mark">Vet : Mark DOE</option>
								</select>
							</div>
							<div class="col-md-6">
								<label class="sr-only">Select Service</label>
								<select class="selectpicker" name="select" id=select" data-style="btn-white">
									<option value="12">-- Select Service --</option>
									<option value="12">Pet Hotel</option>
									<option value="13">Pet Barber</option>
									<option value="15">Pet Clinic</option>
									<option value="14">Pet Send</option>
								</select>
							</div>

							<div class="col-md-12" name="" id="">
								<img src="{{ URL::asset('petvet/upload/maps.png') }}" alt="" style="height: 400px; width: 100%; padding: 20px;" class="loader-site spinner">
							</div>
							<div class="col-md-6" name="" id="">
								<label class="sr-only">Lokasi Jemput</label>
								<input type="text" placeholder="Pickup Location" class="form-control">
							</div>
							<div class="col-md-6" name="" id="">
								<label class="sr-only">Lokasi Tujuan</label>
								<input type="text" placeholder="Destination" class="form-control">
							</div>
							<div class="col-md-12" ">
								<h5 style="background: #ffa81d;  color: #fff!important; font-weight: 700;  padding: 10px 0;text-align: center; border-radius: 3px;">Price : Rp. 35.000</h5>
							</div>

							<div class="col-md-12">
								<textarea placeholder="Add extra notes" class="form-control"></textarea>
							</div>
							<div class="col-md-12">
								<button type="reset" class="btn btn-primary btn-block btn-lg">Send Now</button>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section grey">
	<div class="container">
		<div class="row">
			<div id="carousel-reviews" class="carousel slide text-center" data-ride="carousel">
				<div class="carousel-inner">
					<div class="item active">
						<div class="col-md-4 col-sm-6">
							<div class="block-text">
									<a title="" href="#">Anna <small>from ThemVet, Poland</small></a>
									<p>PetVet looks amazing, Lorem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet.</p>
							</div>
							<img src="{{ URL::asset('petvet/upload/xteam_circle_01.png.pagespeed.ic.bUjjbddUk3.png')}}" class="img-thumbnail img-circle" alt="">
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="block-text">
								<a title="" href="#">Amy <small>from Envet, Turkey</small></a>
								<p>PetVet looks amazing, Lorem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet.</p>
							</div>
							<img src="{{ URL::asset('petvet/upload/xteam_circle_02.png.pagespeed.ic.EJ1G0FGfp_.png')}}" class="img-thumbnail img-circle" alt="">
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="block-text">
								<a title="" href="#">Jessi <small>from PetVet, Island</small></a>
									<p>PetVet looks amazing, Lorem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet.</p>
							</div>
							<img src="{{ URL::asset('petvet/upload/xteam_circle_03.png.pagespeed.ic.SbrCGVEy5K.png')}}" class="img-thumbnail img-circle" alt="">
						</div>
					</div>
					<div class="item">
						<div class="col-md-4 col-sm-6">
							<div class="block-text">
								<a title="" href="#">Anna <small>from ThemVet, Poland</small></a>
								<p>PetVet looks amazing, Lorem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet.</p>
							</div>
							<img src="{{ URL::asset('petvet/upload/xteam_circle_01.png.pagespeed.ic.bUjjbddUk3.png')}}" class="img-thumbnail img-circle" alt="">
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="block-text">
								<a title="" href="#">Amy <small>from Envet, Turkey</small></a>
								<p>PetVet looks amazing, Lorem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet.</p>
							</div>
							<img src="{{ URL::asset('petvet/upload/xteam_circle_02.png.pagespeed.ic.EJ1G0FGfp_.png')}}" class="img-thumbnail img-circle" alt="">
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="block-text">
								<a title="" href="#">Jessi <small>from PetVet, Island</small></a>
								<p>PetVet looks amazing, Lorem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet.</p>
							</div>
							<img src="{{ URL::asset('petvet/upload/xteam_circle_03.png.pagespeed.ic.SbrCGVEy5K.png')}}" class="img-thumbnail img-circle" alt="">
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
				<span class="fa fa-angle-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
				<span class="fa fa-angle-right"></span>
				</a>
			</div>
		</div>
	</div>
</section>
<section class="callout-section dark-yellow">
	<div class="container">
		<div class="row callout">
			<div class="col-md-9">
				<h3>Interesting our works and services?</h3>
				<p class="lead">The standard chunk of Lorem Ipsu from "de Finibus Bonorum et Malorum" by Cicero are also reproduced<br> in their exact original form, accompanied. Donec id elit non mi porta gravida at eget metus.</p>
			</div>
			<div class="col-md-3">
				<a href="#" class="btn btn-default btn-block btn-lg">Appointment Now</a>
			</div>
		</div>
	</div>
</section>

@endsection

<script type="text/javascript">
	$(document).ready(function(){
		$('#select').on('change',function(){
	    	if( $(this).val()==="14"){
	    	$("#sendType").show()
	    	}
	    	else{
	    	$("#sendType").hide()
	    	}
		});
	});
</script>