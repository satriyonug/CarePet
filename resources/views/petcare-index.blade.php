@extends('layouts.template')

@section('maincontent')

<div class="page-title grey">
<div class="container">
<div class="title-area pull-left">
<h2>Petcare <small>Best pet hotels</small></h2>
<div class="bread">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active">Petcare</li>
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
<p>Showing 4 of 4 results</p>
</div>
<div class="pull-right">
<select class="selectpicker btn btn-primary">
<option value="menu_order">Default filter</option>
<option value="popularity">Filter By Cat's Care</option>
<option value="rating">Filter by Dog's Care</option>
<option value="date">Filter by Bird's Care</option>
</select>
</div>
</div>
<div class="row module-wrapper shop-layout text-center">

<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">
<div class="img-wrap">
<figure>
<img alt="" src="{{ URL::asset('petvet/upload/canila.jpg') }}" class="img-responsive">
<figcaption>
<p><strong>2 types of pet</strong></p>
<a class="blogging" title="See Details" href="{{ url('/petcare-detail') }}"><i class="fa fa-bars"></i></a>
</figcaption>
</figure>
</div>
<h4><a href="{{ url('/petcare-detail') }}" title="">Vanilla Petcare</a></h4>
<p style="margin-bottom: 15px;">Perumahan Wisma Lidah Kulon A No.89, Lidah Kulon, Lakarsantri, Surabaya</p>
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
<img alt="" src="{{ URL::asset('petvet/upload/moeza.jpg') }}" class="img-responsive">
<figcaption>
<p><strong>5 types of pet</strong></p>
<a class="blogging" title="See Details" href="{{ url('/petcare-detail') }}"><i class="fa fa-bars"></i></a>
</figcaption>
</figure>
</div>
<h4><a href="{{ url('/petcare-detail') }}" title="">Moeza Pet Care</a></h4>
<p style="margin-bottom: 15px;">Medaeng Kulon, Taman, Sidoarjo</p>
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
<img alt="" src="{{ URL::asset('petvet/upload/sby.jpg') }}" class="img-responsive">
<figcaption>
<p><strong>3 types of pet</strong></p>
<a class="blogging" title="See Details" href="{{ url('/petcare-detail') }}"><i class="fa fa-bars"></i></a>
</figcaption>
</figure>
</div>
<h4><a href="{{ url('/petcare-detail') }}" title="">Surabayapets Pet Salon and Care</a></h4>
<p style="margin-bottom: 15px;">Jl. Semolowaru Elok Blok V No.11, Semolowaru, Sukolilo, Surabaya</p>
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
<img alt="" src="{{ URL::asset('petvet/upload/pradika.jpg') }}" class="img-responsive">
<figcaption>
<p><strong>1 types of pet</strong></p>
<a class="blogging" title="See Details" href="{{ url('/petcare-detail') }}"><i class="fa fa-bars"></i></a>
</figcaption>
</figure>
</div>
<h4><a href="{{ url('/petcare-detail') }}" title="">Pradika Rabbit Pet Shop, Vet & Care</a></h4>
<p style="margin-bottom: 15px;">Jl. Karah Agung III No.16, Karah, Jambangan, Surabaya</p>
<div class="rating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
</div>


</div>
<hr class="invis">
<nav class="pagi clearfix text-center">
<ul class="pagination">
<li><a href="#">1</a></li>
<!-- <li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
 --></ul>
</nav>
</div>
</section>

@endsection