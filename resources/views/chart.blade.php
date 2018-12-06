@extends('layouts.template')

@section('maincontent')

<div class="page-title grey">
<div class="container">
<div class="title-area pull-left">
<h2>Transaction Chart</h2>
<div class="bread">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active">Chart</li>
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
<div class="col-md-12">

@if(str_contains(url()->current(), '/chart/1'))

<div class="table-responsive margin-top">
<h2 class="text-center">Shopping Chart</h2>
<table id="cart-table" class="table table-condensed">
<thead>
<tr>
<th>Action</th>
<th>Image</th>
<th>Product</th>
<th>Price</th>
<th>Quanity</th>
<th>Total</th>
</tr>
</thead>
<tbody>
@foreach ($produk as $p)
<tr>
<th class="product-remove">
<a class="remove" title="Remove this product" href="#">×</a>
</th>
<th>
<div class="media">
<div class="relative">
<a href="{{ url('/shop-detail') }}" title="">
<img src="{{ URL::asset('petvet/upload/xshop_12.jpg.pagespeed.ic.NS_1sIYAoi.jpg') }}" alt="">
</a>
</div>
</div>
</th>
<th>
<a href="{{ url('/shop-detail') }}">Big Vanillia Color - #000455</a>
</th>
<td>$21.00</td>
<td>
5
</td>
<td>
$21.00
</td>
</tr>
<tr>
<th class="product-remove">
<a class="remove" title="Remove this product" href="#">×</a>
</th>
<th>
<div class="media">
<div class="relative">
<a href="{{ url('/shop-detail') }}" title="">
<img src="{{ URL::asset('petvet/upload/xshop_03.jpg.pagespeed.ic.IONcGIjklL.jpg') }}" alt="">
</a>
</div>
</div>
</th>
<th>
<a href="{{ url('/shop-detail') }}">Custom Color Bluz - #2212344</a>
</th>
<td>$21.00</td>
<td>
3
</td>
<td>
$21.00
</td>
</tr>
</tbody>
</table>
</div>

@elseif(str_contains(url()->current(), '/chart/2'))
<form method="post" class="shopform">
<div class="table-responsive margin-top">
<h2 class="text-center">Pet Care</h2>
<table id="cart-table" class="table table-condensed">
<thead>
<tr>
<th>Action</th>
<th>Image</th>
<th>Product</th>
<th>Price</th>
<th>Quanity</th>
<th>Total</th>
</tr>
</thead>
<tbody>
<tr>
<th class="product-remove">
<a class="remove" title="Remove this product" href="#">×</a>
</th>
<th>
<div class="media">
<div class="relative">
<a href="{{ url('/shop-detail') }}" title="">
<img src="{{ URL::asset('petvet/upload/xshop_12.jpg.pagespeed.ic.NS_1sIYAoi.jpg') }}" alt="">
</a>
</div>
</div>
</th>
<th>
<a href="{{ url('/shop-detail') }}">Big Vanillia Color - #000455</a>
</th>
<td>$21.00</td>
<td>
5
</td>
<td>
$21.00
</td>
</tr>
<tr>
<th class="product-remove">
<a class="remove" title="Remove this product" href="#">×</a>
</th>
<th>
<div class="media">
<div class="relative">
<a href="{{ url('/shop-detail') }}" title="">
<img src="{{ URL::asset('petvet/upload/xshop_03.jpg.pagespeed.ic.IONcGIjklL.jpg') }}" alt="">
</a>
</div>
</div>
</th>
<th>
<a href="{{ url('/shop-detail') }}">Custom Color Bluz - #2212344</a>
</th>
<td>$21.00</td>
<td>
3
</td>
<td>
$21.00
</td>
</tr>
</tbody>
</table>
</div>
</form>
@endif
<hr class="invis">
<div class="checkout row">
<div class="col-md-12 text-center">
<a href="{{'/chart/1'}}" class="btn btn-default" id="1">PET SHOP</a> <a href="{{'/chart/2'}}" id="2" class="btn btn-primary">PET CARE</a> <a href="{{'/chart/3'}}" id="3" class="btn btn-default">SEND PET</a>
</div>
</div>
</div>
</div>
</div>
</section>

@endsection