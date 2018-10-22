@extends('layouts.template')

@section('maincontent')
<section class="section banner" style="background-image:url({{ URL::asset('petvet/upload/xblog_bg.jpg.pagespeed.ic.6FShpY5eNF.jpg') }})" data-img-width="1688" data-img-height="470" data-diff="100">
</section>
<div class="page-title grey">
<div class="container">
<div class="title-area pull-left">
<h2>Contact Us <small>Get a premium support now!</small></h2>
<div class="bread">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active">Contact</li>
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
<div class="col-md-6 col-xs-12">
<div class="appoform-wrapper">
<header class="form-header">
<h3>Find on Map</h3>
</header>
<div id="map"></div>
</div>
</div>
<div class="col-md-6 col-xs-12">
<div class="appoform-wrapper">
<div id="message"></div>
<form id="contactform" action="http://templatevisual.com/demo/petvet/contact.php" name="contactform" method="post">
<header class="form-header">
<h3>Contact Form</h3>
</header>
<div class="post-body-form text-center">
<p>In order to provide better service to you, PetVet Veterinary<br> Clinic
It is working with the appointment system. Please fill in the<br> following form completely.</p>
</div>
<fieldset class="row-fluid appoform">
<div class="col-md-12">
<label class="sr-only">Your name</label>
<input type="text" name="name" id="name" class="form-control" placeholder="Name *">
</div>
<div class="col-md-12">
<label class="sr-only">Email address</label>
<input type="email" name="email" id="email" class="form-control" placeholder="Email *">
</div>
<div class="col-md-12">
<label class="sr-only">Phone number</label>
<input type="text" name="name" id="website" class="form-control" placeholder="Website">
</div>
<div class="col-md-12">
<textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Extra notes.."> </textarea>
</div>
<div class="col-md-12">
<button type="submit" value="SEND" id="submit" class="btn btn-primary btn-block">Send Message</button>
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
<img src="{{ URL::asset('petvet/upload/xteam_circle_01.png.pagespeed.ic.bUjjbddUk3.png') }}" class="img-thumbnail img-circle" alt="">
</div>
<div class="col-md-4 col-sm-6">
<div class="block-text">
<a title="" href="#">Amy <small>from Envet, Turkey</small></a>
<p>PetVet looks amazing, Lorem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet.</p>
</div>
<img src="{{ URL::asset('petvet/upload/xteam_circle_02.png.pagespeed.ic.EJ1G0FGfp_.png') }}" class="img-thumbnail img-circle" alt="">
</div>
<div class="col-md-4 col-sm-6">
<div class="block-text">
<a title="" href="#">Jessi <small>from PetVet, Island</small></a>
<p>PetVet looks amazing, Lorem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet.</p>
</div>
<img src="{{ URL::asset('petvet/upload/xteam_circle_03.png.pagespeed.ic.SbrCGVEy5K.png') }}" class="img-thumbnail img-circle" alt="">
</div>
</div>
<div class="item">
<div class="col-md-4 col-sm-6">
<div class="block-text">
<a title="" href="#">Anna <small>from ThemVet, Poland</small></a>
<p>PetVet looks amazing, Lorem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet.</p>
</div>
<img src="{{ URL::asset('petvet/upload/xteam_circle_01.png.pagespeed.ic.bUjjbddUk3.png') }}" class="img-thumbnail img-circle" alt="">
</div>
<div class="col-md-4 col-sm-6">
<div class="block-text">
<a title="" href="#">Amy <small>from Envet, Turkey</small></a>
<p>PetVet looks amazing, Lorem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet.</p>
</div>
<img src="{{ URL::asset('petvet/upload/xteam_circle_02.png.pagespeed.ic.EJ1G0FGfp_.png') }}" class="img-thumbnail img-circle" alt="">
</div>
<div class="col-md-4 col-sm-6">
<div class="block-text">
<a title="" href="#">Jessi <small>from PetVet, Island</small></a>
<p>PetVet looks amazing, Lorem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet.</p>
</div>
<img src="{{ URL::asset('petvet/upload/xteam_circle_03.png.pagespeed.ic.SbrCGVEy5K.png') }}" class="img-thumbnail img-circle" alt="">
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