@extends('layouts.template')

@section('maincontent')

<section class="section banner" style="background-image:url({{ URL::asset('petvet/upload/xblog_bg.jpg.pagespeed.ic.6FShpY5eNF.jpg') }})" data-img-width="1688" data-img-height="470" data-diff="100">
</section>
<div class="page-title grey">
<div class="container">
<div class="title-area pull-left">
<h2>Sign In <small>Get a premium support now!</small></h2>
<div class="bread">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active">Sign In</li>
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
<div class="col-md-6 col-md-offset-3 col-xs-12">
<div class="appoform-wrapper">
<form method="POST" action="{{ URL('/masuk') }}">
@csrf
<header class="form-header">
<h3>Sign In Form</h3>
</header>
<div class="post-body-form text-center">
</div>
<fieldset class="row-fluid appoform">
<div class="col-md-12">
<label class="sr-only">Email</label>
<input id="email" name="email" type="text" placeholder="Email" class="form-control">
</div>
<div class="col-md-12">
<label class="sr-only">Password</label>
<input type="password" id="password" name="password" placeholder="Password" class="form-control">
</div>

<div class="col-md-6">
<button type="submit"  class="btn btn-primary btn-block btn-lg">Sign In</button>
</div>
<div class="col-md-6">
<a href="{{ '/sign-up'}}"><button type="button"  class="btn btn-success btn-block btn-lg">Sign Up</button></a>
</div>

</fieldset>
</form>

</div>
</div>
</div>
</div>
</section>
@endsection