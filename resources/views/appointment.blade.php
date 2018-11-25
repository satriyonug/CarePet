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

<section class="section white" onload="initialize()">
	<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-xs-12">
					<div class="appoform-wrapper">
            <form method="post" action="{{ url('/appointment/create') }}">
            @csrf
							<header class="form-header">
								<h3>Appointment Form</h3>
							</header>
							<div class="post-body-form text-center">
								<p>In order to provide better service to you, PetVet Veterinary Clinic, and Send Pet<br>
							It is working with the appointment system. Please fill in the following form completely.</p>
							</div>
							<fieldset class="row-fluid appoform">
								
								<div class="col-md-6">
									<label class="sr-only">Your name</label>
									<input type="text" id="name" name="name" placeholder="Your full name *" class="form-control" required>
								</div>

								<div class="col-md-6">
									<label class="sr-only">To</label>
									<input type="text" id="tujuan" name="tujuan" placeholder="Destination name *" class="form-control" required>
                </div>
                
                <div class="col-md-6">
									<label class="sr-only">No Telp Pengirim</label>
									<input type="text" id="telp_pengirim" name="telp_pengirim" placeholder="Your Number Telepon *" class="form-control">
                </div>
                
                <div class="col-md-6">
									<label class="sr-only">To</label>
									<input type="text" id="telp_penerima" name="telp_penerima" placeholder="Destination Number Telepon *" class="form-control">
								</div>
								
								<div class="col-md-6">
									<label class="sr-only">Select Vet</label>
									<select class="selectpicker" data-style="btn-white">
										<option value="12">-- Select Vet --</option>
										<option value="amanda">Vet : Amanda JOE</option>
                    <option value="mark">Vet : Mark DOE</option>
                    <option value="none"> None </option>
									</select>
								</div>
								<div class="col-md-6">
									<label class="sr-only">Select Service</label>
									<select class="selectpicker" name="select" id="select" data-style="btn-white">
										<option value="12">-- Select Service --</option>
										<option value="12">Pet Hotel</option>
										<option value="13">Pet Barber</option>
										<option value="15">Pet Clinic</option>
										<option value="14">Pet Send</option>
									</select>
								</div>
								<div class="col-md-12" name="" id="">
                  <br>
                </div>
								<div class="col-md-6" name="" id="">
									<label class="sr-only">Lokasi Jemput</label>
									<input id="origins" name="origins" type="text" placeholder="Pickup Location" class="form-control" required>
								</div>

								<div class="col-md-6" name="" id="">
									<label class="sr-only">Lokasi Tujuan</label>
									<input id="destinations" name="destinations" type="text" placeholder="Destination" class="form-control" required>
								</div>
                
								<div class="input-field col s6">
									<a class="btn btn-success" onclick="return calculateDistances()">Check Price</a>
								</div>

								<div class="col-md-6" >
									<label class="sr-only">Jarak</label>
									<input id="distance" name="distance" type="text" placeholder="Distance" class="form-control">
								</div>

								<div class="col-md-6" >
									<label class="sr-only">Tarif</label>
									<input id="billing" name="billing" type="text" placeholder="Price" class="form-control">
								</div>

								<div class="col-md-12">
									<textarea id="text" name="text" placeholder="Add extra notes" class="form-control"></textarea>
								</div>
								<div class="col-md-12">
									<button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-block btn-lg">Send Now</button>
								</div>
              </fieldset>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation Transaction</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
            <div id="map" style="display:none"></div>
					</div>
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



