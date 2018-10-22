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
<div class="shop-top clearfix">
<div class="title-area pull-left">
<p>Showing 1–9 of 23 results</p>
</div>
<div class="pull-right">
<select class="selectpicker btn btn-primary">
<option value="menu_order">Default sorting</option>
<option value="popularity">Sort by popularity</option>
<option value="rating">Sort by average rating</option>
<option value="date">Sort by newness</option>
<option value="price">Sort by price: low to high</option>
<option value="price-desc">Sort by price: high to low</option>
</select>
</div>
</div>
<div class="row module-wrapper shop-layout text-center">
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
<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">
<div class="img-wrap">
<figure>
<img alt="" src="{{ URL::asset('petvet/upload/xshop_05.jpg.pagespeed.ic.7zLQOUZl_L.jpg') }}" class="img-responsive">
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
<img alt="" src="{{ URL::asset('petvet/upload/xshop_06.jpg.pagespeed.ic.odvCiC7IZQ.jpg') }}" class="img-responsive">
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
<img alt="" src="{{ URL::asset('petvet/upload/xshop_07.jpg.pagespeed.ic.0Nl_iwjSRg.jpg') }}" class="img-responsive">
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
<img alt="" src="{{ URL::asset('petvet/upload/xshop_08.jpg.pagespeed.ic.zou2F0j3sX.jpg') }}" class="img-responsive">
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
<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">
<div class="img-wrap">
<figure>
<img alt="" src="{{ URL::asset('petvet/upload/xshop_09.jpg.pagespeed.ic.ABw_vz3wn4.jpg') }}" class="img-responsive">
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
<img alt="" src="{{ URL::asset('petvet/upload/xshop_10.jpg.pagespeed.ic.kB0PrUYJF7.jpg') }}" class="img-responsive">
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
<img alt="" src="{{ URL::asset('petvet/upload/xshop_11.jpg.pagespeed.ic.cElt2PDR7X.jpg') }}" class="img-responsive">
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
<img alt="" src="{{ URL::asset('petvet/upload/xshop_12.jpg.pagespeed.ic.NS_1sIYAoi.jpg') }}" class="img-responsive">
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
<hr class="invis">
<nav class="pagi clearfix text-center">
<ul class="pagination">
<li><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
</ul>
</nav>
</div>
</section>

@endsection