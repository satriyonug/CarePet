@extends('layouts.template')

@section('maincontent')

<section class="section banner" style="background-image:url({{ URL::asset('petvet/upload/xvet_bg.jpg.pagespeed.ic.1-BunXP9Bo.jpg') }})" data-img-width="1688" data-img-height="470" data-diff="100">
</section>
<div class="page-title grey">
<div class="container">
<div class="title-area pull-left">
<h2>Our Veterinarians <small>Listed all our awesome Veterinarians</small></h2>
<div class="bread">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active">Veterinarians</li>
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

<section class="section dark">
<div class="container">
<div id="owl-team" class="owl-custom text-center">
<div class="owl-featured team-member">
<div class="entry">
<img class="img-responsive img-circle" src="{{ URL::asset('petvet/upload/xteam_circle_01.png.pagespeed.ic.bUjjbddUk3.png') }}" alt="">
<div class="magnifier">
<div class="buttons">
<a class="st" rel="bookmark" href="#"><span class="fa fa-envelope"></span></a>
<a class="st" rel="bookmark" href="#"><span class="fa fa-google-plus"></span></a>
<a class="st" rel="bookmark" href="#"><span class="fa fa-twitter"></span></a>
<a class="st" rel="bookmark" href="#"><span class="fa fa-facebook"></span></a>
</div>
</div>
</div>
<h4><a href="team-single.html"> Amanda Jessi <span>|</span> <small>Veterinary</small></a></h4>
<p>Cras dapibus. Vivamus elementum semper Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae</p>
<a href="#" class="btn btn-primary btn-xs">Ask Me</a>
</div>
<div class="owl-featured team-member">
<div class="entry">
<img class="img-responsive img-circle" src="{{ URL::asset('petvet/upload/xteam_circle_02.png.pagespeed.ic.EJ1G0FGfp_.png') }}" alt="">
<div class="magnifier">
<div class="buttons">
<a class="st" rel="bookmark" href="#"><span class="fa fa-envelope"></span></a>
<a class="st" rel="bookmark" href="#"><span class="fa fa-google-plus"></span></a>
<a class="st" rel="bookmark" href="#"><span class="fa fa-twitter"></span></a>
<a class="st" rel="bookmark" href="#"><span class="fa fa-facebook"></span></a>
</div>
</div>
</div>
<h4><a href="team-single.html"> Jessica DEO <span>|</span> <small>Veterinary</small></a></h4>
<p>Cras dapibus. Vivamus elementum semper Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae</p>
<a href="#" class="btn btn-primary btn-xs">Ask Me</a>
</div>
<div class="owl-featured team-member">
<div class="entry">
<img class="img-responsive img-circle" src="{{ URL::asset('petvet/upload/xteam_circle_03.png.pagespeed.ic.SbrCGVEy5K.png') }}" alt="">
<div class="magnifier">
<div class="buttons">
<a class="st" rel="bookmark" href="#"><span class="fa fa-envelope"></span></a>
<a class="st" rel="bookmark" href="#"><span class="fa fa-google-plus"></span></a>
<a class="st" rel="bookmark" href="#"><span class="fa fa-twitter"></span></a>
<a class="st" rel="bookmark" href="#"><span class="fa fa-facebook"></span></a>
</div>
</div>
</div>
<h4><a href="team-single.html"> Linda MARTIN <span>|</span> <small>Veterinary</small></a></h4>
<p>Cras dapibus. Vivamus elementum semper Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae</p>
<a href="#" class="btn btn-primary btn-xs">Ask Me</a>
</div>
<div class="owl-featured team-member">
<div class="entry">
<img class="img-responsive img-circle" src="{{ URL::asset('petvet/upload/xteam_circle_04.png.pagespeed.ic.J28V31gmRm.png') }}" alt="">
<div class="magnifier">
<div class="buttons">
<a class="st" rel="bookmark" href="#"><span class="fa fa-envelope"></span></a>
<a class="st" rel="bookmark" href="#"><span class="fa fa-google-plus"></span></a>
<a class="st" rel="bookmark" href="#"><span class="fa fa-twitter"></span></a>
<a class="st" rel="bookmark" href="#"><span class="fa fa-facebook"></span></a>
</div>
</div>
</div>
<h4><a href="team-single.html"> Adrian STUFA <span>|</span> <small>Veterinary</small></a></h4>
<p>Cras dapibus. Vivamus elementum semper Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae</p>
<a href="#" class="btn btn-primary btn-xs">Ask Me</a>
</div>
</div>
</div>
</section>

@endsection