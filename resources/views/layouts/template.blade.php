<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
<title>PetVet | A Pet Shop Responsive HTML Template</title>
<link rel="shortcut icon" href="{{ URL::asset('petvet/images/favicon.ico') }}" type="image/x-icon">
<link rel="apple-touch-icon" href="{{ URL::asset('petvet/images/xapple-touch-icon.png.pagespeed.ic.lbIMAdR47L.png') }}"/>
<link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('petvet/images/xapple-touch-icon-57x57.png.pagespeed.ic.lbIMAdR47L.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('petvet/images/xapple-touch-icon-72x72.png.pagespeed.ic.i-0YYlpEGy.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('petvet/images/xapple-touch-icon-76x76.png.pagespeed.ic.xyE4EWNI5l.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('petvet/images/xapple-touch-icon-114x114.png.pagespeed.ic.46I_5LN6hD.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('petvet/images/xapple-touch-icon-120x120.png.pagespeed.ic.wZ7p39DfnJ.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('petvet/images/xapple-touch-icon-144x144.png.pagespeed.ic.Zf_U5pDbrc.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('petvet/images/xapple-touch-icon-152x152.png.pagespeed.ic.u_OuBhvBU5.png') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('petvet/rs-plugin/css/A.settings.css.pagespeed.cf.0al2lLpEZL.css') }}" media="screen"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('petvet/css/animate.css%2bbootstrap.css%2bcarousel.css.pagespeed.cc.DyfOC2Q_i6.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('petvet/A.style.css%2bcss%2c%2c_custom.css%2cMcc.dJXLFsuLOF.css.pagespeed.cf.UgtDm8q7vQ.css') }}"/>
<script src="{{ URL::asset('petvet/js/modernizer.js.pagespeed.jm.1UdTGnoJUM.js') }}"></script>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="loader">
<div class="loader-container">
<img src="{{ URL::asset('petvet/images/xload.png.pagespeed.ic.kE5YiCMdt2.png') }}" alt="" class="loader-site spinner">
</div>
</div>
<div id="wrapper">
<div class="topbar clearfix">
<div class="container">
<div class="row-fluid">
<div class="col-md-6 text-left">
<p>
<strong>Call us:</strong> +90 543 123 45 67 &nbsp;&nbsp;
<strong>Email:</strong> <a href="mailto:info@yoursite.com">info@yoursite.com</a>
</p>
</div>
<div class="col-md-6 text-right">
<div class="social">
<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
</div>
</div>
</div>
</div>
</div>
<header class="header">
<div class="container">
<div class="row mb-5">
<div class="col-md-12">
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-table">
<div class="navbar-cell tight">
<div class="navbar-header">
<a class="navbar-brand" href="{{ url('/index')}}"><img src="{{ URL::asset('petvet/images/xlogo.png.pagespeed.ic.jEZLnjLad0.png') }}" alt="Ova"></a>
<div>
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
<span class="sr-only">Toggle navigation</span>
<span class="fa fa-bars"></span>
</button>
</div>
</div>
</div>
<div class="navbar-cell stretch">
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
<div class="navbar-cell">
<ul class="nav navbar-nav navbar-right">
<li class="dropdown has-submenu">
<a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-expanded="false">Home <span class="fa fa-angle-down"></span></a>
<ul class="dropdown-menu start-left" role="menu">
<li><a href="index-boxed.html">Home Boxed</a></li>
<li><a href="index1.html">Home Version 1</a></li>
<li><a href="index2.html">Home Version 2</a></li>
<li><a href="index3.html">Home Version 3</a></li>
<li><a href="index4.html">Home Version 4</a></li>
<li><a href="index5.html">Home Version 5</a></li>
<li><a href="index6.html">Home Version 6</a></li>
</ul>
</li>
<li><a href="{{ url('vets')}}">Our Vets</a></li>
<li class="dropdown has-submenu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Features <span class="fa fa-angle-down"></span></a>
<ul class="dropdown-menu start-left" role="menu">
<li><a href="services.html">Our Services</a></li>
<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog Pages <span class="fa fa-angle-right"></span></a>
<ul class="dropdown-menu show-left" role="menu">
<li><a href="blog.html">Blog Default</a></li>
<li><a href="blog-1.html">Blog Fullwidth</a></li>
<li><a href="blog-single-1.html">Blog Single</a></li>
<li><a href="blog-single-2.html">Blog Single Alt</a></li>
</ul>
</li>
<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Shop Pages <span class="fa fa-angle-right"></span></a>
<ul class="dropdown-menu show-left" role="menu">
<li><a href="{{ url('/shop') }}">Shop Page</a></li>
<li><a href="{{ url('/shop-detail') }}">Shop Single</a></li>
<li><a href="{{ url('/shop-checkout') }}">Shop Checkout</a></li>
<li><a href="{{ url('/shop-chart') }}">Shopping Cart</a></li>
</ul>
</li>
<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gallery Pages <span class="fa fa-angle-right"></span></a>
<ul class="dropdown-menu show-left" role="menu">
<li><a href="gallery-1.html">Gallery One</a></li>
<li><a href="gallery-2.html">Gallery Two</a></li>
<li><a href="gallery-3.html">Gallery Three</a></li>
<li><a href="gallery-4.html">Gallery Masonry</a></li>
<li><a href="gallery-single.html">Gallery Single</a></li>
</ul>
</li>
<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Other Pages <span class="fa fa-angle-right"></span></a>
<ul class="dropdown-menu show-left" role="menu">
<li><a href="maintenance.html">Maintenance</a></li>
<li><a href="404.html">Not Found (404)</a></li>
<li><a href="page-sidebar.html">Page Sidebar</a></li>
<li><a href="page-fullwidth.html">Page Fullwidth</a></li>
<li><a href="page-sitemap.html">Sitemap</a></li>
</ul>
</li>
<li><a href="pricing.html">Pricing & Plans</a></li>
<li><a href="testimonials.html">Testimonials</a></li>
<li><a href="shortcodes.html">Shortcodes</a></li>
<li><a href="typography.html">Typography</a></li>
</ul>
</li>
<li><a href="gallery-1.html">Gallery</a></li>
<li><a href="shop.html">Shop</a></li>
<li><a href="blog.html">Blog</a></li>
<li><a href="{{ url('/appointment') }}">Appointment</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</nav>
</div>
</div>
</div>
</header>

@yield('maincontent')

<footer class="footer dark">
<div class="container">
<div class="row module-wrapper">
<div class="col-md-4 col-sm-6">
<div class="widget">
<div class="text-center">
<img src="{{ URL::asset('petvet/images/xflogo.png.pagespeed.ic.eNO_4SEZBS.png') }}" alt="" class="img-responsive">
<p>Lorem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet.</p>
<div class="social">
<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Github"><i class="fa fa-github"></i></a>
<a href="#" data-tooltip="tooltip" data-placement="bottom" title="MaxCDN"><i class="fa fa-maxcdn"></i></a>
<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
</div>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="widget">
<div class="widget-title">
<h4>Contact Details</h4>
</div>
<ul>
<li><i class="fa fa-link"></i> www.yoursite.com</li>
<li><i class="fa fa-envelope"></i> info@yoursite.com</li>
<li><i class="fa fa-phone"></i> +90 123 45 67</li>
<li><i class="fa fa-fax"></i> +90 123 45 68</li>
<li><i class="fa fa-home"></i> Envato INC 22 Elizabeth Str 8777.</li>
</ul>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="widget">
<div class="widget-title">
<h4>Useful Links</h4>
</div>
<ul>
<li><a href="index.html">Default Version</a></li>
<li><a href="index-alt.html">Home Alternative</a></li>
<li><a href="index-boxed.html">Boxed Version</a></li>
<li><a href="{{ url('/vets')}}">Our Vets</a></li>
<li><a href="about.html">About Us</a></li>
<li><a href="services.html">Our Services</a></li>
<li><a href="contact.html">Get In Touch</a></li>
</ul>
</div>
</div>
</div>
</div>
</footer>
<section class="copyright">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<p>© 2015 PetVet Pty Ltd. by <a href="#">Template Visual</a></p>
</div>
<div class="col-md-6 text-right">
<ul class="list-inline">
<li><a href="#">Terms of Usage</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Sitemap</a></li>
</ul>
</div>
</div>
</div>
</section>
</div>
<script src="{{ URL::asset('petvet/js/jquery.min.js.pagespeed.jm.J-8M9bCq0j.js') }}"></script>
<script src="{{ URL::asset('petvet/js/bootstrap.js%2bretina.js%2bwow.js.pagespeed.jc.isTtwS3BRA.js') }}"></script><script>eval(mod_pagespeed_QVjN9VLU9A);</script>
<script>eval(mod_pagespeed_MEsUxamUni);</script>
<script>eval(mod_pagespeed_0bkPwSHufl);</script>
<script src="{{ URL::asset('petvet/js/jquery.simple-text-rotator.js%2bparallax.js%2btouch.js%2bcarousel.js.pagespeed.jc.HG-aMDAZDl.js') }}"></script><script>eval(mod_pagespeed_07fmU$$RNq);</script>
<script>eval(mod_pagespeed_XKKesQfpp0);</script>
<script>eval(mod_pagespeed_z83SFsIgz$);</script>
<script>eval(mod_pagespeed_WBv_OkcQEu);</script>
<!-- <script src="{{ URL::asset('js/scriptselect.js') }}"></script> -->
<script>//<![CDATA[
(function($){"use strict";$(window).load(function(){$('#loader').delay(300).fadeOut('slow');$('#loader-container').delay(200).fadeOut('slow');$('body').delay(300).css({'overflow':'visible'});})
new WOW({boxClass:'wow',animateClass:'animated',offset:0,mobile:true,live:true}).init();$('body').tooltip({selector:"[data-tooltip=tooltip]",container:"body"});$('#owl-team').owlCarousel({loop:true,margin:30,nav:true,dots:false,responsive:{0:{items:1},600:{items:2},1000:{items:4}}})
$(".rotate").textrotator({animation:"fade",speed:1000});function toggleChevron(e){$(e.target).prev('.panel-heading').find("i.indicator").toggleClass('fa-minus fa-plus');}$('#accordion').bind('hidden.bs.collapse',toggleChevron);$('#accordion').bind('shown.bs.collapse',toggleChevron);$(".js-height-full").height($(window).height());$(".js-height-parent").each(function(){$(this).height($(this).parent().first().height());});$('#quote-carousel').carousel({pause:true,interval:4000,});})(jQuery);
//]]></script>
<script src="{{ URL::asset('petvet/rs-plugin/js/jquery.themepunch.tools.min.js.pagespeed.jm.0PLSBOOLZa.js') }}"></script>
<script src="{{ URL::asset('petvet/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script>jQuery(document).ready(function(){jQuery('.tp-banner').show().revolution({dottedOverlay:"none",delay:16000,startwidth:1170,startheight:620,hideThumbs:200,thumbWidth:100,thumbHeight:50,thumbAmount:5,navigationType:"none",navigationArrows:"solo",navigationStyle:"preview2",touchenabled:"on",onHoverStop:"on",swipe_velocity:0.7,swipe_min_touches:1,swipe_max_touches:1,drag_block_vertical:false,parallax:"mouse",parallaxBgFreeze:"on",parallaxLevels:[10,7,4,3,2,5,4,3,2,1],parallaxDisableOnMobile:"off",keyboardNavigation:"off",navigationHAlign:"center",navigationVAlign:"bottom",navigationHOffset:0,navigationVOffset:20,soloArrowLeftHalign:"left",soloArrowLeftValign:"center",soloArrowLeftHOffset:20,soloArrowLeftVOffset:0,soloArrowRightHalign:"right",soloArrowRightValign:"center",soloArrowRightHOffset:20,soloArrowRightVOffset:0,shadow:0,fullWidth:"on",fullScreen:"off",spinner:"spinner4",stopLoop:"off",stopAfterLoops:-1,stopAtSlide:-1,shuffle:"off",autoHeight:"off",forceFullWidth:"off",hideThumbsOnMobile:"off",hideNavDelayOnMobile:1500,hideBulletsOnMobile:"off",hideArrowsOnMobile:"off",hideThumbsUnderResolution:0,hideSliderAtLimit:0,hideCaptionAtLimit:0,hideAllCaptionAtLilmit:0,startWithSlide:0,fullScreenOffsetContainer:""});});</script>
</body>
</html>
