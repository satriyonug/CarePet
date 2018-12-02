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

@if($id == 1)
<div id="content" class="col-md-8 col-sm-12 col-xs-12">
<div class="row">
<div class="col-md-5 col-sm-5 col-xs-12">
<div class="product-images">

<a data-rel="prettyPhoto" href="{{ URL::asset('petvet/upload/shop_01.jpg') }}" title="">	
      <img class="img-polaroid" src="{{ URL::asset('petvet/upload/xshop_01.jpg.pagespeed.ic.tEfrtxhhVo.jpg') }}" alt=""/>
  </a>
<ul class="thumbnail">
<li> <a data-rel="prettyPhoto[gallery]" href="{{ URL::asset('petvet/upload/shop_01.jpg') }}" title=""><img class="img-thumbnail" src="{{ URL::asset('petvet/upload/xshop_01.jpg.pagespeed.ic.tEfrtxhhVo.jpg') }}" alt=""/></a></li>
<li> <a data-rel="prettyPhoto[gallery]" href="{{ URL::asset('petvet/upload/shop_03.jpg') }}" title=""><img class="img-thumbnail" src="{{ URL::asset('petvet/upload/xshop_03.jpg.pagespeed.ic.IONcGIjklL.jpg') }}" alt=""/></a></li>
<li> <a data-rel="prettyPhoto[gallery]" href="{{ URL::asset('petvet/upload/shop_04.jpg') }}" title=""><img class="img-thumbnail" src="{{ URL::asset('petvet/upload/xshop_04.jpg.pagespeed.ic.SDayx1DpGB.jpg') }}" alt=""/></a></li>
</ul>
</div>
</div>
<div class="col-md-7 col-sm-7 col-xs-12">
<div class="shop-desc">
<h3>Tempat Tidur Kucing</h3>
<small>Rp 645.000,00</small>
<div class="rating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
<p>Untuk menjauhkan kucing kesayanganmu dari yang namanya stres, tentunya kamu harus menciptakan lingkungan dan suasana yang nyaman untuknya. 
Nah salah satu cara untuk membuatnya merasa nyaman adalah dengan memilih Tempat Tidur Kucing yang nyaman pula. Kasur yang empuk serta halus akan 
membuatnya merasa lebih tenang dan pastinya baik pula untuk kesehatan bulunya. Selain untuk di rumah, Kasur kucing ini juga bisa kamu bawa saat bepergian.
Tempat tidur hangat dan lembut buat peliharaan kesayangan… Bahan kain katun dan mudah dicuci.</p>

<a href="{{ url('/shop-checkout/1') }}" class="btn btn-primary">Add to Cart</a>
<div class="addwish">
<a href="shop-wishlist.html"><i class="fa fa-heart-o"></i> Add to Wishlist</a>
</div>
<div class="shopmeta">
<span><strong>Category:</strong> <a href="#">Hot Foods</a></span>
<span><strong>Tags:</strong> <a href="#">Beef</a>, <a href="#">Tenderloin</a>, <a href="#">food</a></span>
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
<li><a data-toggle="tab" href="#menu2">Extras</a></li>
</ul>
<div class="tab-content">
<div id="home" class="tab-pane fade in active">
<p><img src="{{ URL::asset('petvet/upload/xshop_01.jpg.pagespeed.ic.tEfrtxhhVo.jpg') }}" class="alignleft" alt=""> Kasur dengan Daleman yg bisa dilepas sebanyak 2 pcs… Bisa pilih motif 
yg berbeda untuk dalemannya… Jadi lebih fleksibel kalau hanya ingin daleman saja yg dicuci… Plus karena ada 2 pcs daleman, ada spare/cadangan yg satu lagi selama daleman yg satu dicuci…
Bahan kasur tebal shg peliharaan kesayangan tdk mudah kedinginan dan bahan kasur tetap awet walaupun setelah dicuci.
Masih banyak pilihan warna/motif…</p>
<br>

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
<div id="menu2" class="tab-pane fade">
<p><img src="{{ URL::asset('petvet/upload/xservice_03.png.pagespeed.ic.VBaBmQNb0B.jpg') }}" class="alignleft" alt=""> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
<br>
<p>labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
</div>
</div>
</div>
</div>
</div>
</div>
<hr class="invis">
<!--<div class="row module-wrapper text-center">
<div class="col-md-4 col-sm-6 wdtShop grid cs-style-3">
<div class="img-wrap">
<figure>
<img alt="" src="{{ URL::asset('petvet/upload/xshop_04.jpg.pagespeed.ic.SDayx1DpGB.jpg') }}" class="img-responsive">
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
<div class="col-md-4 col-sm-6 wdtShop grid cs-style-3">
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
<div class="col-md-4 col-sm-6 wdtShop grid cs-style-3">
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
</div>-->
</div>
@elseif ($id == 2)
      
	  <div id="content" class="col-md-8 col-sm-12 col-xs-12">
<div class="row">
<div class="col-md-5 col-sm-5 col-xs-12">
<div class="product-images">

<a data-rel="prettyPhoto" href="{{ URL::asset('petvet/upload/shop_01.jpg') }}" title="">	
      <img alt="" src="http://localhost:8000/petvet/upload/xshop_02.jpg.pagespeed.ic.c2WuvOxE4K.jpg" class="img-responsive">
  </a>
<ul class="thumbnail">
<li> <a data-rel="prettyPhoto[gallery]" href="{{ URL::asset('petvet/upload/shop_01.jpg') }}" title=""><img class="img-thumbnail" src="{{ URL::asset('petvet/upload/xshop_02.jpg.pagespeed.ic.c2WuvOxE4K.jpg') }}" alt=""/></a></li>
<li> <a data-rel="prettyPhoto[gallery]" href="{{ URL::asset('petvet/upload/shop_03.jpg') }}" title=""><img class="img-thumbnail" src="{{ URL::asset('petvet/upload/xshop_03.jpg.pagespeed.ic.IONcGIjklL.jpg') }}" alt=""/></a></li>
<li> <a data-rel="prettyPhoto[gallery]" href="{{ URL::asset('petvet/upload/shop_04.jpg') }}" title=""><img class="img-thumbnail" src="{{ URL::asset('petvet/upload/xshop_04.jpg.pagespeed.ic.SDayx1DpGB.jpg') }}" alt=""/></a></li>
</ul>
</div>
</div>
<div class="col-md-7 col-sm-7 col-xs-12">
<div class="shop-desc">
<h3>Tempat Tidur Kucing Tingkat</h3>
<small>Rp 180.000,00</small>
<div class="rating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
<p>Untuk menjauhkan kucing kesayanganmu dari yang namanya bosan, tentunya kamu harus menciptakan suasana yang nyaman untuknya dan seperti tempat bermain. 
Nah salah satu cara untuk membuatnya tidak merasa bosan adalah dengan memilih Tempat Tidur Kucing tingkat seperti tempat bermainnya. Selain untuk di rumah, tempat tidur kucing ini.
Tempatmenarik memiliki nilai seni buat peliharaan kesayangan Bahan tanah liat.</p>

<a href="{{ url('/shop-checkout/1') }}" class="btn btn-primary">Add to Cart</a>
<div class="addwish">
<a href="shop-wishlist.html"><i class="fa fa-heart-o"></i> Add to Wishlist</a>
</div>
<div class="shopmeta">
<span><strong>Category:</strong> <a href="#">Hot Foods</a></span>
<span><strong>Tags:</strong> <a href="#">Beef</a>, <a href="#">Tenderloin</a>, <a href="#">food</a></span>
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
<li><a data-toggle="tab" href="#menu2">Extras</a></li>
</ul>
<div class="tab-content">
<div id="home" class="tab-pane fade in active">
<p><img alt="" src="http://localhost:8000/petvet/upload/xshop_02.jpg.pagespeed.ic.c2WuvOxE4K.jpg" class="alignleft" alt="">Warna: Coklat dan Krem
Bahan: polyester faux bulu; sisal rope; MDF papan; logam dan plastik aksesoris
Dimensi keseluruhan: 21.7 inches W x 17.7 inches D x 60.6 inches H (55 cm W x 45 cm D x 154 cm H)
Dimensi Condo: 13.7 inches W x 11.8 inches D x 9.8 inches H (35 cm W x 30 cm D x 25 cm H)
Kondominium Membuka Ukuran: 6.7 inci W x 7 inches H (17 cm W x 18 cm H)
Berat bersih: 31.2 lbs (14.1 kg)
Kapasitas: 3 kucing (Setiap kucing tidak boleh melebihi 15lbs/7 kg)</p>
<br>

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
<div id="menu2" class="tab-pane fade">
<p><img src="{{ URL::asset('petvet/upload/xservice_03.png.pagespeed.ic.VBaBmQNb0B.jpg') }}" class="alignleft" alt=""> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
<br>
<p>labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
</div>
</div>
</div>
</div>
</div>
</div>
<hr class="invis">
<!--<div class="row module-wrapper text-center">
<div class="col-md-4 col-sm-6 wdtShop grid cs-style-3">
<div class="img-wrap">
<figure>
<img alt="" src="{{ URL::asset('petvet/upload/xshop_04.jpg.pagespeed.ic.SDayx1DpGB.jpg') }}" class="img-responsive">
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
<div class="col-md-4 col-sm-6 wdtShop grid cs-style-3">
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
<div class="col-md-4 col-sm-6 wdtShop grid cs-style-3">
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
</div>-->
</div>
@endif

<div id="sidebar" class="col-md-4 col-sm-12 col-xs-12">
<!--<div class="widget">
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
</div>-->
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