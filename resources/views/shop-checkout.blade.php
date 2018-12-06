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
<form action="{{ url('/shop-checkout/create') }}" method="post" class="shopform" enctype="multipart/form-data">
    @csrf
<div class="col-md-6">
<div class="widget-title">
<h4>Billing Details</h4>
</div>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<label>Nama *</label>
<input type="text" name="nama" id="nama" class="form-control" placeholder="Name">
</div>
<input type="hidden" name="id" id="id" class="form-control" placeholder="Name" value="{{$id}}">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<label>Alamat *</label>
<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Address">
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<label>Kota *</label>
<input type="text" name="kota" id="kota" class="form-control" placeholder="Kota">
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<label>Provinsi *</label>
<input type="text" name="provinsi" id="provinsi" class="form-control" placeholder="Provinsi">
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<label>Kode Pos *</label>
<input type="text" name="kodepos" id="kodepos" class="form-control" placeholder="Kode Pos">
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<label>Phone Number *</label>
<input type="text" name="telpon" id="telpon" class="form-control" placeholder="Phone Number">
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<label>Jumlah Barang *</label>
<input type="number" name="jumlah_barang" id="jumlah_barang" class=" form-control" placeholder="Jumlah Barang"  min="0" max="100">
</div>
</div>
</div>
<div class="col-md-6">
<div class="widget-title">
<h4>Shipping to another address</h4>
</div>
<label>Catatan</label>
<textarea name="catatan" id="catatan" rows="6" class="form-control" placeholder="Add extra notes..."></textarea>
</div>
</div>

<!--<hr class="invis">
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

</form>
</div>-->
</div>
</div>
</div>
 <div style="text-align: center;">
  <button style="" type="submit" class="btn btn-primary">Place an order</button>
</div>
</form>
</section>

@endsection