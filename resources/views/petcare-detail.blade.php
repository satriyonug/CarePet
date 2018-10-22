@extends('layouts.template')

@section('maincontent')

<div class="page-title grey">
<div class="container">
<div class="title-area pull-left">
<h2>Shop <small>Best pet supplies, materials and eats</small></h2>
<div class="bread">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active">Shop</li>
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
<div id="content" class="col-md-8 col-sm-12 col-xs-12">
<div class="row">
<div class="col-md-5 col-sm-5 col-xs-12">
<div class="product-images">
<a data-rel="prettyPhoto" href="{{ URL::asset('petvet/images/petcare.jpg') }}" title="">
<img class="img-polaroid" src="{{ URL::asset('petvet/images/petcare.jpg') }}" alt=""/>
</a>
<ul class="thumbnail" style="margin-top: 50px;">
<li> <a data-rel="prettyPhoto[gallery]" href="{{ URL::asset('petvet/images/dog-cage.jpg') }}" title=""><img class="img-thumbnail" src="{{ URL::asset('petvet/images/dog-cage.jpg') }}" alt=""/></a></li>
<li> <a data-rel="prettyPhoto[gallery]" href="{{ URL::asset('petvet/images/cat-cage.jpg') }}" title=""><img class="img-thumbnail" src="{{ URL::asset('petvet/images/cat-cage.jpg') }}" alt=""/></a></li>
<li> <a data-rel="prettyPhoto[gallery]" href="{{ URL::asset('petvet/images/bird-cage.jpg') }}" title=""><img class="img-thumbnail" src="{{ URL::asset('petvet/images/bird-cage.jpg') }}" alt=""/></a></li>
</ul>
</div>
</div>
<div class="col-md-7 col-sm-7 col-xs-12">
<div class="shop-desc">
<h3>Prof Benjamin Franklin Pet Care </h3>
<small>Keputih Perintis I no 48, Sukolilo Surabaya</small>
<div class="rating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
<p>Lorem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet orem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet orem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet..</p>
<!-- <a href="{{ url('/shop-checkout') }}" class="btn btn-primary">Choose Service</a> -->
<div class="addwish">
<a href="shop-wishlist.html"><i class="fa fa-heart-o"></i> Add to Wishlist</a>
</div>
<div class="shopmeta">
<span><strong>Category:</strong> <a href="#">Pet Hotels</a></span>
<span><strong>Tags:</strong> <a href="#">Dog</a>, <a href="#">Cat</a>, <a href="#">Bird</a></span>
</div>
</div>
</div>
</div>
<hr class="invis">
<div class="row">
<div class="col-md-12">
<div class="service-style-1">
<div class="tabbed-widget">
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#home">Descriptions</a></li>
<li><a data-toggle="tab" href="#menu1">Reviews</a></li>
</ul>
<div class="tab-content">
<div id="home" class="tab-pane fade in active">
<div class="row">
<p><img src="{{ URL::asset('petvet/images/dog-cage.jpg') }}" class="alignleft" alt=""> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
<br><strong><small>$1/day</small></strong>
<br>
<a href="{{ url('/shop-checkout') }}" class="btn btn-primary" style="float:right;">Checkout</a>
</p>
<br><br>
</div>
<div class="row">
<p><img src="{{ URL::asset('petvet/images/cat-cage.jpg') }}" class="alignleft" alt="">labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
<br><strong><small>$1/day</small></strong>
<br>
<a href="{{ url('/shop-checkout') }}" class="btn btn-primary" style="float:right;">Checkout</a>
<br><br>
</p>
</div>
<div class="row">
<p><img src="{{ URL::asset('petvet/images/bird-cage.jpg') }}" class="alignleft" alt="">labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
<br><strong><small>$1/day</small></strong>
<br>
<a href="{{ url('/shop-checkout') }}" class="btn btn-primary" style="float:right;">Checkout</a>
<br><br>
</p>
</div>
</div>
<div id="menu1" class="tab-pane fade">
<div id="reviews" class="feedbacks">
<div>
<div class="well">
<div class="media">
<div class="media-left">
<a href="#">
<img class="media-object" src="{{ URL::asset('petvet/upload/xstudent_01.png.pagespeed.ic.756JwMcqdq.jpg') }}" alt="Generic placeholder image">
</a>
</div>
<div class="media-body">
<h4 class="media-heading">John DOE</h4>
<div class="time-comment clearfix">
<small class="pull-left">21 Jun 2015</small>
<a class="pull-right btn btn-primary btn-xs">Reply</a>
</div>
<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
</div>
</div>
<div class="media comment-reply">
<div class="media-left">
<a href="#">
<img class="media-object" src="{{ URL::asset('petvet/upload/xstudent_02.png.pagespeed.ic.y-PM-y4pVj.jpg') }}" alt="Generic placeholder image">
</a>
</div>
<div class="media-body">
<h4 class="media-heading">Amanda FOXOE</h4>
<div class="time-comment clearfix">
<small class="pull-left">21 Jun 2015</small>
<a class="pull-right btn btn-primary btn-xs">Reply</a>
</div>
<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
</div>
</div>
<div class="media">
<div class="media-left">
<a href="#">
<img class="media-object" src="{{ URL::asset('petvet/upload/xstudent_03.png.pagespeed.ic.uCQY3WNMCJ.jpg') }}" alt="Generic placeholder image">
</a>
</div>
<div class="media-body">
<h4 class="media-heading">Mark BOBS</h4>
<div class="time-comment clearfix">
<small class="pull-left">21 Jun 2015</small>
<a class="pull-right btn btn-primary btn-xs">Reply</a>
</div>
<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
</div>
</div>
<div class="widget-title">
<h4>Leave a Comment</h4>
<hr>
</div>
<div class="commentform">
<form>
<input type="text" class="form-control" placeholder="Your name">
<input type="email" class="form-control" placeholder="Your email">
<input type="text" class="form-control" placeholder="Your website">
<textarea type="text" class="form-control" placeholder="Message goes here"></textarea>
<input type="submit" value="Send Comment" class="btn btn-primary btn-block"/>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<hr class="invis">

</div>
<div id="sidebar" class="col-md-4 col-sm-12 col-xs-12">
<div class="widget">
<div class="widget-title">
<h4>Recent posts</h4>
<hr>
</div>
<div class="recent-post-widget">
<ul class="recent-posts">
<li>
<p><a href="blog-single-1.html" title=""><img src="{{ URL::asset('petvet/upload/xblog_05.jpg.pagespeed.ic.xii_pYKsfM.jpg') }}" alt="" class="alignleft">How to find best dog food?</a></p>
<span>12 May 2014</span>
</li>
<li>
<p><a href="blog-single-1.html" title=""><img src="{{ URL::asset('petvet/upload/xblog_04.jpg.pagespeed.ic.QCtoVlXGPf.jpg') }}" alt="" class="alignleft">What About Your Dog Toths?</a></p>
<span>06 May 2014</span>
</li>
<li>
<p><a href="blog-single-1.html" title=""><img src="{{ URL::asset('petvet/upload/xblog_03.jpg.pagespeed.ic.mNAEK9nADS.jpg') }}" alt="" class="alignleft">We Will Help You About Your Pet Health</a></p>
<span>06 May 2014</span>
</li>
</ul>
</div>
</div>
<div class="widget">
<div class="widget-title">
<h4>Blog Categories</h4>
<hr>
</div>
<div class="cats-widget">
<ul>
<li><a href="blog.html" title="">Pet Vet Videos</a></li>
<li><a href="blog.html" title="">Pet Healt Care</a></li>
<li><a href="blog.html" title="">Vet Education</a></li>
<li><a href="blog.html" title="">Our News</a></li>
<li><a href="blog.html" title="">Released & Updates</a></li>
</ul>
</div>
</div>
<div class="widget">
<div class="widget-title">
<h4>Recent Tweets</h4>
<hr>
</div>
<div class="twitter-widget">
<ul class="latest-tweets">
<li>
<p><a href="#" title="">@Mark</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</p>
<span>2 hours ago</span>
</li>
<li>
<p><a href="#" title="">@Envato</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</p>
<span>2 hours ago</span>
</li>
</ul>
</div>
</div>
<div class="widget">
<div class="widget-title">
<h4>Popular Tags</h4>
<hr>
</div>
<div class="tag-widget">
<a href="#">Responsive</a>
<a href="#">Modern</a>
<a href="#">Corporate</a>
<a href="#">Creative</a>
<a href="#">Business</a>
<a href="#">Fresh</a>
<a href="#">Awesome</a>
<a href="#">Logger Theme</a>
<a href="#">Responsive</a>
<a href="#">Modern</a>
</div>
</div>
</div>
</div>
</div>
</section>

@endsection