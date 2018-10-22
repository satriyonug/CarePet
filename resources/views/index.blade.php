@extends('layouts.template')

@section('maincontent')

<div class="slider-section">
<div class="tp-banner-container">
<div class="tp-banner">
<ul>
<li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="{{ URL::asset('petvet/upload/slider_new_01.jpg') }}" data-saveperformance="off" data-title="Vet">
<img src="{{ URL::asset('petvet/upload/xslider_new_01.jpg.pagespeed.ic.NB8444jxiM.jpg') }}" alt="fullslide1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
<div class="tp-caption slider_layer_01 text-center lft tp-resizeme" data-x="center" data-y="220" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-paw"></i> Creative <strong>Pet Vet</strong> Template
</div>
<div class="tp-caption slider_layer_02 text-center lft tp-resizeme" data-x="center" data-y="310" data-speed="1000" data-start="800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Great Theme For Pet Shop, Veterinarian Websites with tons of options<br> custom elements and custom sections!
</div>
<div class="tp-caption slider_btn text-center lft tp-resizeme" data-x="center" data-y="390" data-speed="1000" data-start="800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#" class="btn btn-primary">Read More</a> <a href="#" class="btn btn-default">Purchase Now</a>
</div>
</li>
<li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="{{ URL::asset('petvet/upload/slider_new_02.jpg') }}" data-saveperformance="off" data-title="Pet">
<img src="{{ URL::asset('petvet/upload/xslider_new_02.jpg.pagespeed.ic.8ll4h8v1Ka.jpg') }}" alt="fullslide1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
<div class="tp-caption slider_layer_01 text-center lft tp-resizeme" data-x="center" data-y="220" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><strong>Beautiful Design</strong> Clean Codes
</div>
<div class="tp-caption slider_layer_02 text-center lft tp-resizeme" data-x="center" data-y="310" data-speed="1000" data-start="800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Great Theme For Pet Shop, Veterinarian Websites with tons of options<br> custom elements and custom sections!
</div>
<div class="tp-caption slider_btn text-center lft tp-resizeme" data-x="center" data-y="390" data-speed="1000" data-start="800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#" class="btn btn-primary">Read More</a> <a href="#" class="btn btn-default">Purchase Now</a>
</div>
</li>
</ul>
</div>
</div>
</div>

<section class="section white">
	<div class="container">
	<div class="general-title text-center">
	<h4>Clinic Deparments</h4>
	<hr>
	<p class="lead">Listed below four reasons to choose us!</p>
	</div>
	<div class="row module-wrapper text-left service-style-2">
	<div class="col-md-6 col-sm-6 why-us wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
	<img class="img-responsive img-circle alignleft" src="{{ URL::asset('petvet/upload/xservice_05.png.pagespeed.ic.Of6gTG40A_.png') }}" alt="">
	<strong>Surgical Operations</strong>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus rabitur euismod enim a metus aadipiscing aliquam. </p>
	<a href="#" class="readmore">Read more</a>
	</div>
	<div class="col-md-6 col-sm-6 why-us wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
	<img class="img-responsive img-circle alignleft" src="{{ URL::asset('petvet/upload/xservice_06.png.pagespeed.ic.4BHvcxtzN3.png') }}" alt="">
	<strong>Patient Department</strong>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus rabitur euismod enim a metus aadipiscing aliquam. </p>
	<a href="#" class="readmore">Read more</a>
	</div>
	<div class="col-md-6 col-sm-6 why-us  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
	<img class="img-responsive img-circle alignleft" src="{{ URL::asset('petvet/upload/xservice_07.png.pagespeed.ic.nmzGaaaTBj.png') }}" alt="">
	<strong>Laboratory Services</strong>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus rabitur euismod enim a metus aadipiscing aliquam. </p>
	<a href="#" class="readmore">Read more</a>
	</div>
	<div class="col-md-6 col-sm-6 why-us  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
	<img class="img-responsive img-circle alignleft" src="{{ URL::asset('petvet/upload/xservice_08.png.pagespeed.ic.2nnaazxIsB.png') }}" alt="">
	<strong>Pet Barber Service</strong>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus rabitur euismod enim a metus aadipiscing aliquam. </p>
	<a href="#" class="readmore">Read more</a>
	</div>
	</div>
	</div>
</section>

<section class="section grey">
<div class="container">
<div class="general-title text-center">
<h4>Our Working Process</h4>
<hr>
<p class="lead">Listed below our awesome services & departments</p>
</div>
<div class="row module-wrapper">
<div class="col-md-7 col-sm-12">
<div class="service-style-1">
<div class="tabbed-widget">
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#home">Surgical</a></li>
<li><a data-toggle="tab" href="#menu1">PetBarber</a></li>
<li><a data-toggle="tab" href="#menu2">Patient</a></li>
<li><a data-toggle="tab" href="#menu3">Laboratory</a></li>
</ul>
<div class="tab-content">
<div id="home" class="tab-pane fade in active">
<p><img src="{{ URL::asset('petvet/upload/xservice_01.png.pagespeed.ic.Mg2uwHHPBq.jpg') }}" class="alignleft" alt=""> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
<br>
<p>labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore..</p>
</div>
<div id="menu1" class="tab-pane fade">
<p><img src="{{ URL::asset('petvet/upload/xservice_02.png.pagespeed.ic.DUNe2VyiJk.jpg') }}" class="alignright" alt=""> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
<br>
<p>labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
</div>
<div id="menu2" class="tab-pane fade">
<p><img src="{{ URL::asset('petvet/upload/xservice_03.png.pagespeed.ic.VBaBmQNb0B.jpg') }}" class="alignleft" alt=""> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
<br>
<p>labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
</div>
<div id="menu3" class="tab-pane fade">
<p><img src="{{ URL::asset('petvet/upload/xservice_04.png.pagespeed.ic.cPJu2_kVMc.jpg') }}" class="alignright" alt=""> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
<br>
<p>labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-5 col-sm-12">
<div class="workinghours">
<ul>
<li>Monday <span>9:00am - 7:00pm</span></li>
<li>Tuesday <span>9:00am - 7:00pm</span></li>
<li>Wednesday <span>9:00am - 7:00pm</span></li>
<li>Thursday <span>9:00am - 7:00pm</span></li>
<li>Friday <span>9:00am - 7:00pm</span></li>
<li>Saturday <span>10:00am - 7:00pm</span></li>
<li>Sunday <span>11:00am - 7:00pm</span></li>
</ul>
</div>
</div>
</div>
</div>
</section>
<section class="section white">
<div class="container">
<div class="general-title text-center">
<h4>Meet Our Vets</h4>
<hr>
<p class="lead">Listed below our awesome vets and professional doctors!</p>
</div>
<div class="row module-wrapper text-center">
<div class="col-md-3 col-sm-3 team-member">
<div class="entry">
<img class="img-responsive" src="{{ URL::asset('petvet/upload/xvet_01.png.pagespeed.ic.VC2I-hFxDb.png') }}" alt="">
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
<a href="team-single.html" class="readmore">Read more</a>
</div>
<div class="col-md-3 col-sm-3 team-member">
<div class="entry">
<img class="img-responsive" src="{{ URL::asset('petvet/upload/xvet_02.png.pagespeed.ic.u3f5II8tdG.png') }}" alt="">
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
<a href="team-single.html" class="readmore">Read more</a>
</div>
<div class="col-md-3 col-sm-3 team-member">
<div class="entry">
<img class="img-responsive" src="{{ URL::asset('petvet/upload/xvet_03.png.pagespeed.ic.k5Xd6OzKiQ.png') }}" alt="">
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
<a href="team-single.html" class="readmore">Read more</a>
</div>
<div class="col-md-3 col-sm-3 team-member">
<div class="entry">
<img class="img-responsive" src="{{ URL::asset('petvet/upload/xvet_04.png.pagespeed.ic._tRn77ilzK.png') }}" alt="">
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
<a href="team-single.html" class="readmore">Read more</a>
</div>
</div>
</div>
</section>
<section class="section fullscreen paralbackground parallax" style="background-image:url({{ URL::asset('petvet/upload/xparallax_01.jpg.pagespeed.ic.bbBOmU960x.jpg') }}" data-img-width="1922" data-img-height="795" data-diff="100">
<div class="overlay"></div>
<div class="container">
<div class="messagebox text-center">
<h2>PetVet is a <mark class="rotate">High-Quality, Powerful, Professional</mark> Veterinary Template</h2>
<p class="lead">Hey Everyone! We are PetVet and we make really beautiful and amazing stuff. This can be used to describe what you do,<br>
how you do it, & who you do it for. Don’t Miss the Awesome Template</p>
<a class="btn btn-primary" href="#">Purchase Now</a> <a class="btn btn-default" href="#">View Our Vets</a>
</div>
</div>
</section>
<section class="section dark">
<div class="container">
<div class="general-title text-center">
<h4>Our Shopping</h4>
<hr>
<p class="lead">We offer high-quality dog eats, cat eats and more..</p>
</div>
<div class="row module-wrapper text-center">
<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">
<div class="img-wrap">
<figure>
<img alt="" src="{{ URL::asset('petvet/upload/xshop_01.jpg.pagespeed.ic.tEfrtxhhVo.jpg') }}" class="img-responsive">
<figcaption>
<p><strong>$43.00</strong></p>
<a class="blogging" title="Add to Cart" href="{{ url('/shop-detail') }}"><i class="fa fa-shopping-cart"></i></a>
</figcaption>
</figure>
</div>
<h4><a href="{{ url('/shop-detail') }}" title="">Beautiful Cat Bed</a></h4>
<div class="rating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
</div>
<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">
<div class="img-wrap">
<figure>
<img alt="" src="{{ URL::asset('petvet/upload/xshop_02.jpg.pagespeed.ic.c2WuvOxE4K.jpg') }}" class="img-responsive">
<figcaption>
<p><strong>$12.00</strong></p>
<a class="blogging" title="Add to Cart" href="{{ url('/shop-detail') }}"><i class="fa fa-shopping-cart"></i></a>
</figcaption>
</figure>
</div>
<h4><a href="{{ url('/shop-detail') }}" title="">Prof Cat House</a></h4>
<div class="rating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
</div>
<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">
<div class="img-wrap">
<figure>
<img alt="" src="{{ URL::asset('petvet/upload/xshop_03.jpg.pagespeed.ic.IONcGIjklL.jpg') }}" class="img-responsive">
<figcaption>
<p><strong>$55.00</strong></p>
<a class="blogging" title="Add to Cart" href="{{ url('/shop-detail') }}"><i class="fa fa-shopping-cart"></i></a>
</figcaption>
</figure>
</div>
<h4><a href="{{ url('/shop-detail') }}" title="">Gorgeous dog house</a></h4>
<div class="rating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
</div>
<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">
<div class="img-wrap">
<figure>
<img alt="" src="{{ URL::asset('petvet/upload/xshop_04.jpg.pagespeed.ic.SDayx1DpGB.jpg') }}" class="img-responsive">
<figcaption>
<p><strong>$124.00</strong></p>
<a class="blogging" title="Add to Cart" href="{{ url('/shop-detail') }}"><i class="fa fa-shopping-cart"></i></a>
</figcaption>
</figure>
</div>
<h4><a href="{{ url('/shop-detail') }}" title="">Dog food bowl</a></h4>
<div class="rating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
</div>
</div>
</div>
</section>
<section class="section grey">
<div class="container">
<div class="general-title text-center">
<h4>From the Blog</h4>
<hr>
<p class="lead">We shared best articles for pet lowers</p>
</div>
<div class="row module-wrapper blog-widget">
<div class="col-md-4 col-sm-6">
<div class="blog-wrapper">
<div class="blog-image">
<a href="blog-single-1.html" title=""><img src="{{ URL::asset('petvet/upload/xblog_01.jpg.pagespeed.ic.If1K3SXod7.jpg') }}" alt="" class="img-responsive"></a>
</div>
<div class="blog-title">
<a class="category_title" href="#" title="">PET SUPPLIES</a>
<h2><a href="blog-single-1.html" title="">How to find best dog food?</a></h2>
<div class="post-meta">
<span>
<i class="fa fa-user"></i>
<a href="#">John</a>
</span>
<span>
<i class="fa fa-tag"></i>
<a href="#">Pet</a>
</span>
<span>
<i class="fa fa-comments"></i>
<a href="#">19 Comments</a>
</span>
</div>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since theown printer took.</p>
<a href="blog-single-1.html" class="readmore">Read more</a>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="blog-wrapper">
<div class="blog-image">
<a href="blog-single-1.html" title=""><img src="{{ URL::asset('petvet/upload/xblog_02.jpg.pagespeed.ic.BdEP9kqNRA.jpg') }}" alt="" class="img-responsive"></a>
</div>
<div class="blog-title">
<a class="category_title" href="#" title="">PET MARKETING</a>
<h2><a href="blog-single-1.html" title="">2015 Tips - Cat and dog health</a></h2>
<div class="post-meta">
<span>
<i class="fa fa-user"></i>
<a href="#">Jenny</a>
</span>
<span>
<i class="fa fa-tag"></i>
<a href="#">Market</a>
</span>
<span>
<i class="fa fa-comments"></i>
<a href="#">44 Comments</a>
</span>
</div>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since theown printer took.</p>
<a href="blog-single-1.html" class="readmore">Read more</a>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="blog-wrapper">
<div class="blog-image">
<a href="blog-single-1.html" title=""><img src="{{ URL::asset('petvet/upload/xblog_03.jpg.pagespeed.ic.mNAEK9nADS.jpg') }}" alt="" class="img-responsive"></a>
</div>
<div class="blog-title">
<a class="category_title" href="#" title="">PET SHOPPING</a>
<h2><a href="blog-single-1.html" title="">Sand choice in Cats</a></h2>
<div class="post-meta">
<span>
<i class="fa fa-user"></i>
<a href="#">Bob Doe</a>
</span>
<span>
<i class="fa fa-tag"></i>
<a href="#">Shop</a>
</span>
<span>
<i class="fa fa-comments"></i>
<a href="#">0 Comment</a>
</span>
</div>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since theown printer took.</p>
<a href="blog-single-1.html" class="readmore">Read more</a>
</div>
</div>
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