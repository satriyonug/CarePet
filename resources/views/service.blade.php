@extends('layouts.template')

@section('maincontent')

<section class="section banner" style="background-image:url({{ URL::asset('petvet/upload/xvet_bg.jpg.pagespeed.ic.1-BunXP9Bo.jpg') }})" data-img-width="1688" data-img-height="470" data-diff="100">
</section>
<div class="page-title grey">
<div class="container">
<div class="title-area pull-left">
<h2>Our Services <small>Listed all our awesome services</small></h2>
<div class="bread">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active">Services</li>
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

<section class="section grey">
<div class="container">
<div class="row module-wrapper text-left service-style-2">
<div class="col-md-6 col-sm-6 why-us wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
<img class="img-responsive img-circle alignleft" src="{{ URL::asset('petvet/upload/xservice_05.png.pagespeed.ic.Of6gTG40A_.png') }}" alt="">
<strong>Pet Care</strong>
<p>Kamu bisa menitipkan dan merawat hewan peliharaan kesayanganmu ketika kamu sedang sibuk. </p>
<a href="#" class="readmore">Read more</a>
</div>
<div class="col-md-6 col-sm-6 why-us wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
<img class="img-responsive img-circle alignleft" src="{{ URL::asset('petvet/upload/xservice_06.png.pagespeed.ic.4BHvcxtzN3.png') }}" alt="">
<strong>Send Pet</strong>
<p>Kamu bisa mengirim hewan peliharaan kesayanganmu kemanapun dan kesiapapun sesuai yang kamu inginkan dengan cepat. </p>
<a href="#" class="readmore">Read more</a>
</div>
<div class="col-md-6 col-sm-6 why-us  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
<img class="img-responsive img-circle alignleft" src="{{ URL::asset('petvet/upload/xservice_07.png.pagespeed.ic.nmzGaaaTBj.png') }}" alt="">
<strong>Pet Shop</strong>
	<p>Kamu bisa membelikan apapun untuk hewan peliharaan kesayanganmu. </p>
<a href="#" class="readmore">Read more</a>
</div>
<div class="col-md-6 col-sm-6 why-us  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
<img class="img-responsive img-circle alignleft" src="{{ URL::asset('petvet/upload/xservice_08.png.pagespeed.ic.2nnaazxIsB.png') }}" alt="">
<strong>Vet Consultation</strong>
	<p>Kamu bisa cerita apapun tentang hewa peliharaan kesayanganmu ke dokter hewan kami. </p>
<a href="#" class="readmore">Read more</a>
</div>
</div>
</div>
</section>

@endsection