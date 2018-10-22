@extends('layouts.template')

@section('maincontent')

<div class="page-title grey">
<div class="container">
<div class="title-area pull-left">
<h2>Shop Checkout <small>Please complete your order.</small></h2>
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
<div class="col-md-12">
<form method="post" class="shopform">
<div class="row">
<div class="col-md-6">
<div class="widget-title">
<h4>Billing Details</h4>
</div>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<label>First Name *</label>
<input type="text" name="name" id="name" class="form-control" placeholder="First Name">
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<label>Last Name *</label>
<input type="text" name="name" id="name1" class="form-control" placeholder="Last Name">
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<label>Company Name</label>
<input type="text" name="name" id="name2" class="form-control" placeholder="Company Name">
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<label>Address *</label>
<input type="text" name="name" id="name3" class="form-control" placeholder="Address Line 1">
<label>Address Line 2</label>
<input type="text" name="name" id="name4" class="form-control" placeholder="Address Line 2">
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<label>Town / City *</label>
<input type="text" name="name" id="name5" class="form-control" placeholder="Town / City">
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<label>County *</label>
<input type="text" name="name" id="name6" class="form-control" placeholder="County">
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<label>Zip Code *</label>
<input type="text" name="name" id="name7" class="form-control" placeholder="Zip Code">
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<label>Email *</label>
<input type="text" name="name" id="name8" class="form-control" placeholder="Email Address">
<label>Phone Number *</label>
<input type="text" name="name" id="name9" class="form-control" placeholder="Phone Number">
</div>
</div>
</div>
<div class="col-md-6">
<div class="widget-title">
<h4>Shipping to another address</h4>
</div>
<label>Other Notes</label>
<textarea rows="6" class="form-control" placeholder="Add extra notes..."></textarea>
</div>
</div>
</form>
<hr class="invis">
<div class="table-responsive margin-top">
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
<a href="shop-single.html" title="">
<img src="{{ URL::asset('petvet/upload/xshop_12.jpg.pagespeed.ic.NS_1sIYAoi.jpg') }}" alt="">
</a>
</div>
</div>
</th>
<th>
<a href="shop-single.html">Big Vanillia Color - #000455</a>
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
<a href="shop-single.html" title="">
<img src="{{ URL::asset('petvet/upload/xshop_03.jpg.pagespeed.ic.IONcGIjklL.jpg') }}" alt="">
</a>
</div>
</div>
</th>
<th>
<a href="shop-single.html">Custom Color Bluz - #2212344</a>
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
<br>
<div class="couponarea clearfix">
<form class="form-inline">
<div class="form-group">
<input type="email" class="form-control" placeholder="Coupon code">
</div>
<button type="submit" class="btn btn-primary">Apply Coupon</button>
<button type="submit" class="pull-right btn btn-primary">Update Cart</button>
</form>
</div>
<div class="totalarea margin-top row">
<div class="col-md-6">
<form class="shipping">
<div class="widget-title">
<h4>Calculate Shipping</h4>
</div>
<select class="form-control">
<option>-- Select Country --</option>
<option>United States</option>
<option>United Kingdom</option>
<option>Turkey</option>
<option>Germany</option>
<option>Greece</option>
<option>United States</option>
<option>United Kingdom</option>
<option>Turkey</option>
<option>Germany</option>
<option>Greece</option>
</select>
<input type="text" class="form-control" placeholder="State / City">
<input type="text" class="form-control" placeholder="Post Code">
<button type="submit" class="btn btn-primary">Update Total</button>
</form>
</div>
<div class="col-md-6">
<div class="totalprice">
<div class="widget-title">
<h4>Order Total</h4>
</div>
<p>Subtotal : $44.22</p>
<p>Shipping : Free Shipping</p>
<p>Total : $44.22</p>
</div>
</div>
</div>
<div class="totalarea margin-top row">
<form id="payment" class="clearfix">
<label class="checkbox payment-method inline">
<input type="checkbox" id="customCheck1" value="option1" class=""> Direct Bank Transfer
<span class="custom2">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order wont be shipped until the funds have cleared in our account.</span>
</label>
<label class="checkbox payment-method inline">
<input type="checkbox" id="customCheck2" value="option2"> Cheque Payment
</label>
<label class="checkbox payment-method inline">
<input type="checkbox" id="customCheck4" value="option2"> PayPal Payment
</label>
<label class="checkbox payment-method inline">
<input type="checkbox" id="customCheck3" value="option3"> Google Checkout
</label>
<a class="btn btn-primary pull-right" href="#">PLACE AN ORDER</a>
</form>
</div>
</div>
</div>
</div>
</section>

@endsection