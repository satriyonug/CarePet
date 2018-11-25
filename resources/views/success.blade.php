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
								<h3>Success</h3>
							</header>
							<center><h3>Transaction Success</h3></center>
            </form>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
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



