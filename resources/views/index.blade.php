@extends('layouts.template')

@section('maincontent')

<div class="slider-section">
<div class="tp-banner-container">
<div class="tp-banner">
<ul>
<li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="{{ URL::asset('petvet/upload/slider_new_01.jpg') }}" data-saveperformance="off" data-title="Vet">
<img src="{{ URL::asset('petvet/upload/xslider_new_01.jpg.pagespeed.ic.NB8444jxiM.jpg') }}" alt="fullslide1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
<div class="tp-caption slider_layer_01 text-center lft tp-resizeme" data-x="center" data-y="220" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><i class="fa fa-paw"></i> Creative <strong>Care Vet</strong>
</div>
<div class="tp-caption slider_layer_02 text-center lft tp-resizeme" data-x="center" data-y="310" data-speed="1000" data-start="800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Menyediakan Layanan bagi Pemilik Hewan Peliharaan agar Lebih Mudah dalam Memenuhi Kebutuhan Hewan Peliharaannya.
</div>
<div class="tp-caption slider_btn text-center lft tp-resizeme" data-x="center" data-y="390" data-speed="1000" data-start="800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#" class="btn btn-primary">Read More</a> <a href="#" class="btn btn-default">Purchase Now</a>
</div>
</li>
<li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="{{ URL::asset('petvet/upload/slider_new_02.jpg') }}" data-saveperformance="off" data-title="Pet">
<img src="{{ URL::asset('petvet/upload/xslider_new_02.jpg.pagespeed.ic.8ll4h8v1Ka.jpg') }}" alt="fullslide1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
<div class="tp-caption slider_layer_01 text-center lft tp-resizeme" data-x="center" data-y="220" data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><strong>PetCare, PetShop, SendPet</strong>
</div>
<div class="tp-caption slider_layer_02 text-center lft tp-resizeme" data-x="center" data-y="310" data-speed="1000" data-start="800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Menyediakan Layanan bagi Pemilik Hewan Peliharaan agar Lebih Mudah dalam Memenuhi Kebutuhan Hewan Peliharaannya.

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
	<h4>CarePet Services</h4>
	<hr>
	<p class="lead">Listed below four reasons to choose us!</p>
	</div>
	<div class="row module-wrapper text-left service-style-2">
	<div class="col-md-6 col-sm-6 why-us wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
	<img class="img-responsive img-circle alignleft" src="{{ URL::asset('petvet/upload/xservice_05.png.pagespeed.ic.Of6gTG40A_.png') }}" alt="">
	<strong>Pet Care</strong>
	<p>Kamu bisa menitipkan dan merawat hewan peliharaan kesayanganmu ketika kamu sedang sibuk. </p>
	<a href="{{'/petcare'}}" class="readmore">Read more</a>
	</div>
	<div class="col-md-6 col-sm-6 why-us wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
	<img class="img-responsive img-circle alignleft" src="{{ URL::asset('petvet/upload/xservice_06.png.pagespeed.ic.4BHvcxtzN3.png') }}" alt="">
	<strong>Send Pet</strong>
	<p>Kamu bisa mengirim hewan peliharaan kesayanganmu kemanapun dan kesiapapun sesuai yang kamu inginkan dengan cepat. </p>
	<a href="{{'/appointment'}}" class="readmore">Read more</a>
	</div>
	<div class="col-md-6 col-sm-6 why-us  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
	<img class="img-responsive img-circle alignleft" src="{{ URL::asset('petvet/upload/xservice_07.png.pagespeed.ic.nmzGaaaTBj.png') }}" alt="">
	<strong>Pet Shop</strong>
	<p>Kamu bisa membelikan apapun untuk hewan peliharaan kesayanganmu. </p>
	<a href="{{'/shop'}}" class="readmore">Read more</a>
	</div>
	<div class="col-md-6 col-sm-6 why-us  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
	<img class="img-responsive img-circle alignleft" src="{{ URL::asset('petvet/upload/xservice_08.png.pagespeed.ic.2nnaazxIsB.png') }}" alt="">
	<strong>Vet Consultation</strong>
	<p>Kamu bisa cerita apapun tentang hewa peliharaan kesayanganmu ke dokter hewan kami. </p>
	<a href="{{'vets'}}" class="readmore">Read more</a>
	</div>
	</div>
	</div>
</section>


@endsection