@extends('layouts.template')
@section('maincontent')
<div class="page-title grey">
	<div class="container">
		<div class="title-area pull-left">
			<h2>About CarePet</h2>
			<div class="bread">
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">About</li>
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

@endsection
