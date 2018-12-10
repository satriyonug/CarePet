
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
<table border=1 id="chart-shop-table" class="table table-condensed">
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

@foreach ($transaksi as $t)
<tr>
    <th class="product-remove">
        <a class="btn btn-danger" style="padding:0px;">
            <form action="/chart/delete" method="POST">
            {{csrf_field()}}
            <input name="id" type="hidden" value="{{$t->id}}">
            <button type="submit" class="btn btn-danger btn-block"><strong>X</strong></button>
            </form>
        </a>
    </th>
    <th>
        <div class="media">
            <div class="relative">
            <img src="{{ URL::asset('produk/' . $t->gambar) }}" alt="{{$t->gambar}}" />
            </div>
        </div>
    </th>
    <th>
        {{$t->nama}}
    </th>
    <td>{{$t->harga}}</td>
    <td>{{$t->jumlah_barang}}</td>
    <td id="harga">{{$t->harga * $t->jumlah_barang}}</td>
    
</tr>
@endforeach

    <th class="product-remove"></th>
    <th></th>
    <th>
    </th>
    <td style="display:none">    
    <?php
        $a=0;
    ?> 
    @foreach ($transaksi as $t)
    {{$a += $t->harga * $t->jumlah_barang}}
    @endforeach
    </td>
    <td></td>
    <td>Total Harga</td>
    <td id="totalshop">
    

    {{$a}}
    </td>
</tbody>

</table>

<div style="text-align: right; padding-right:50px;">
<br>
    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Chechkout</button>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6><strong>Total harga     :   {{$a}}</strong></h6>
        <h6>Silahkan transfer ke rekening BNI</h6>
        <table class="table table-condensed">
        <tbody>
        <tr>
            <td>Atas Nama</td>
            <td>CarePet</td>
        </tr>
        <tr>
            <td>No Rekening</td>
            <td>0123456789</td>
        </tr>
        </tbody>
    </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Checkout</button>
      </div>
    </div>
  </div>
</div>
</div>

@elseif(str_contains(url()->current(), '/chart/2'))

<div class="table-responsive margin-top">
<h2 class="text-center">Pet Care</h2>
<table id="cart-table" class="table table-condensed">
<thead>
<tr>
<th>Action</th>
<th>Photo</th>
<th>Name</th>
<th>Animal</th>
<th>Price</th>
<th>Duration</th>
<th>Total Price</th>
</tr>
</thead>
<tbody>
@foreach ($transaksi_care as $tc)
<tr>
    <th class="product-remove">
        <a class="btn btn-danger" style="padding:0px;">
            <form action="/chart_care/delete" method="POST">
            {{csrf_field()}}
            <input name="id" type="hidden" value="{{$tc->id}}">
            <button type="submit" class="btn btn-danger btn-block"><strong>X</strong></button>
            </form>
        </a>
    </th>
    <th>
        <div class="media">
            <div class="relative">
            <img src="{{ URL::asset('produk/' . $tc->gambar) }}" alt="{{$tc->gambar}}" />
            </div>
        </div>
    </th>
    <th>
        {{$tc->nama}}
    </th>
    <th>
        {{$tc->jenis_binatang}}
    </th>
    <td>{{$tc->harga / $tc->lama_penitipan}}</td>
    <td>{{$tc->lama_penitipan}}</td>
    <td id="harga">{{$tc->harga}}</td>
    
</tr>
@endforeach

    <th class="product-remove"></th>
    <th></th>
    <th>
    </th>
    <th>
    </th>
    <td style="display:none">    
    <?php
        $a=0;
    ?> 
    @foreach ($transaksi_care as $tc)
    {{$a += $tc->harga}}
    @endforeach
    </td>
    <td></td>
    <td>Total Harga</td>
    <td id="totalshop">
    

    {{$a}}
    </td>
</tbody>

</table>

<div style="text-align: right; padding-right:50px;">
<br>
    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Chechkout</button>
</div></div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6><strong>Total harga     :   {{$a}}</strong></h6>
        <h6>Silahkan transfer ke rekening BNI</h6>
        <table class="table table-condensed">
        <tbody>
        <tr>
            <td>Atas Nama</td>
            <td>CarePet</td>
        </tr>
        <tr>
            <td>No Rekening</td>
            <td>0123456789</td>
        </tr>
        </tbody>
    </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Checkout</button>
      </div>
    </div>
  </div>
</div>
</div>

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

