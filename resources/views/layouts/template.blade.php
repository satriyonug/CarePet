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
<title>CarePet | A Pet Shop</title>
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
<link rel="stylesheet" type="text/css" href="{{ URL::asset('petvet/css/chat.css') }}" media="screen"/>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

  <style type="text/css">
    #map {
      height: 480px;
      width: 100%;
      border: solid thin #333;
      margin-top: 20px;
    }
 
    #map img { 
      max-width: none;
    }
 
    #mapCanvas label { 
      width: auto; display:inline; 
    } 
  </style>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="http://maps.googleapis.com/maps/api/js?libraries=places"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
  <script type="text/javascript">
    var map;
    var geocoder;
    var bounds = new google.maps.LatLngBounds();
    var markersArray = [];
      
    // setting marker untuk marker asal dan tujuan
    var destinationIcon = "http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=D|FF0000|000000";
    var originIcon = "http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=O|FFFF00|000000";
 
    // tentukan terlebih dahulu letak petanya 
    function initialize() {
      var opts = {
        center: new google.maps.LatLng(-7.25009,112.744331),
        zoom: 5,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      map = new google.maps.Map(document.getElementById('map'), opts);
      geocoder = new google.maps.Geocoder();
 
      // setting agar texfield pada kolom asal dan juga tujuan dapat memanggil fungsi autocomplete
      var asal = new google.maps.places.Autocomplete((document.getElementById('origins')),{ types: ['geocode'] });
      var tujuan = new google.maps.places.Autocomplete((document.getElementById('destinations')),{ types: ['geocode'] });
    }
 
    /*      
    menghitung jarak dari data yg dikirim dari form
    disini saya setting untuk mode DRIVING dan menggunakan jalan raya atau juga tol,
    jika ingin mengganti konfigurasinya, silahkan ganti false dengan true
    */
    function calculateDistances() {
      var service = new google.maps.DistanceMatrixService();
      service.getDistanceMatrix(
      { 
        origins: [document.getElementById("origins").value],
        destinations: [document.getElementById("destinations").value],
        travelMode: google.maps.TravelMode.DRIVING, 
        unitSystem: google.maps.UnitSystem.METRIC,
        avoidHighways: false,
        avoidTolls: false
      }, callback);
    }

    function jarak() {
		      document.getElementById("billing").value = 50000;
          document.getElementById("distance").value = 10 km;
    }
      
    // responde dari Googlemaps Distance Matrix akan diolah dan di kirim ke output HTML
    function callback(response, status) {
      if (status != google.maps.DistanceMatrixStatus.OK) {
        alert('Error was: ' + status);
      } else {
        var origins = response.originAddresses;
        var destinations = response.destinationAddresses;
        deleteOverlays();
 
        for (var i = 0; i < origins.length; i++) {
          var results = response.rows[i].elements;
          addMarker(origins[i], false);
          for (var j = 0; j < results.length; j++) {
            addMarker(destinations[j], true);
          }
    
          /*          
            disini perhitungan tarif, pertama hilangkan dulu 'km'
            dan ubah tanda desimal koma dengan titik. 
          */
          var str = results[0].distance.text;
          var distance = str.replace(' km', '');
          var distance = distance.replace(',','.');
 
          /*          
            jumlah kilometer dikalikan dengan 500 
            setelah itu hasilnya kita konversikan kedalam format kurs rupiah
          */
          var tarif = formatNumber(Math.ceil(distance) * 5000); 
          document.getElementById("billing").value = tarif;
          document.getElementById("distance").value = results[0].distance.text;
    
        }
      }
    }
    // fungsi sederhana untuk mengkonversi bilangan bulat menjadi format kurs rupiah
    function formatNumber (num) {
      return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
    }
 
    // menampilkan marker untuk origin dan juga destination
    function addMarker(location, isDestination) {
      var icon;
      if (isDestination) {
        icon = destinationIcon;
      } else {
        icon = originIcon;
      }
      geocoder.geocode({'address': location}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          bounds.extend(results[0].geometry.location);
          map.fitBounds(bounds);
          var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location,
            icon: icon
          });
          markersArray.push(marker);
        } else {
          alert("Terjadi kesalahan: "
            + status);
        }
      });
    }
      
    // menghapus koordinat marker sebelumnya dan menggantinya dengan koordinat yang baru
    function deleteOverlays() {
      if (markersArray) {
        for (i in markersArray) {
          markersArray[i].setMap(null);
        }
        markersArray.length = 0;
      }
    }
  </script>        
<style>
input[type="radio"] {
    display:block;
}

</style>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body onload="initialize()">
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
<strong>Call us:</strong> 0812-3456-7890 &nbsp;&nbsp;
<strong>Email:</strong> <a href="mailto:carepet@yoursite.com">carepet@yoursite.com</a>
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
<a class="navbar-brand" href="{{ url('/index')}}"><img height="60 px" width="160 px" src="{{ URL::asset('petvet/images/carepetnewlogo.png') }}" alt="Ova"></a>
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
<!-- <a href="{{ url('/index')}}" class="dropdown-toggle" role="button" aria-expanded="false">Home</a> -->

</li>
<!-- <li><a href="{{ url('vets')}}">Our Vets</a></li> -->
<li class="dropdown has-submenu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Features <span class="fa fa-angle-down"></span></a>
<ul class="dropdown-menu start-left" role="menu">
<li><a href="{{ url('/service') }}">Our Services</a></li>
<li><a href="{{ url('/shop') }}">Pet Shop</a></li>
<li><a href="{{ url('/petcare') }}">Pet Care</a></li>

<!-- <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pet Shop <span class="fa fa-angle-right"></span></a>
<ul class="dropdown-menu show-left" role="menu">
<li><a href="{{ url('/shop') }}">Shop Page</a></li>
<li><a href="{{ url('/shop-detail') }}">Shop Detail</a></li>
<li><a href="{{ url('/shop-checkout') }}">Shop Checkout</a></li>
<li><a href="{{ url('/shop-chart') }}">Shopping Cart</a></li>
</ul>
</li>

<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pet Care <span class="fa fa-angle-right"></span></a>
<ul class="dropdown-menu show-left" role="menu">
<li><a href="{{ url('/petcare') }}">Pet Care</a></li>
<li><a href="{{ url('/petcare-detail') }}">Pet Care Detail</a></li>
<li><a href="{{ url('/petcare-checkout') }}">Pet Care Checkout</a></li>
<li><a href="{{ url('/petcare-chart') }}">Pet Care Cart</a></li>
</ul>
</li> -->

<li><a href="{{ url('/appointment') }}">Send Pet</a></li>
<li><a href="{{ url('/vets') }}">Vet Consultation</a></li>


</ul>
</li>

<!-- <li class="dropdown has-submenu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pets <span class="fa fa-angle-down"></span></a>
<ul class="dropdown-menu start-left" role="menu">

<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pet Care <span class="fa fa-angle-right"></span></a>
<ul class="dropdown-menu show-left" role="menu">
<li><a href="{{ url('/petcare') }}">Pet Care</a></li>
<li><a href="{{ url('/petcare-detail') }}">Pet Care Detail</a></li>
<li><a href="{{ url('/petcare-checkout') }}">Pet Care Checkout</a></li>
<li><a href="{{ url('/petcare-chart') }}">Pet Care Cart</a></li>
</ul>
</li> -->

<!-- <li><a href="{{ url('/appointment') }}">Send Pet</a></li> -->





<!-- </ul>
</li>
<li><a href="{{ url('/shop') }}">Shop</a></li> -->
<li><a href="{{ url('/blog') }}">Blog</a></li>
<li><a href="{{ url('/contact')}}">Contact</a></li>
<li><a href="{{ url('/about')}}">About</a></li>
@if(session()->get('userSession'))
<li class="dropdown has-submenu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{session()->get('userSession')['name']}} <span class="fa fa-angle-down"></span></a>

<ul class="dropdown-menu start-left" role="menu">

<li><a href="{{'/sign-out'}}" role="button" aria-expanded="false">Log Out</span></a>
</ul>

</li>
<li><a class="blogging" title="Add to Cart" href="{{ url('/chart/1') }}"><i class="fa fa-shopping-cart"></i></a></li>

@else
<li><a href="{{ url('/sign-in')}}">Login</a></li>

@endif

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
<img height="100" width="250" src="{{ URL::asset('petvet/images/carepetputih.png') }}" alt="" class="img-responsive">
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
<li><a href="{{'/index'}}">Home</a></li>
<li><a href="{{'/about'}}">About Us</a></li>
<li><a href="{{'/service'}}">Our Services</a></li>

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
<script src="{{ URL::asset('petvet/js/custom.js%2bcontact.js%2bmap.js.pagespeed.jc.gDJwcCfkw1.js') }}"></script><script>eval(mod_pagespeed_OFpQ46Wcku);</script>
<script src="{{ url('http://maps.google.com/maps/api/js?sensor=false') }}"></script>
<script src="{{ URL::asset('petvet/js/chat.js') }}"></script><script>eval(mod_pagespeed_OFpQ46Wcku);</script>
<script>eval(mod_pagespeed_dE_1WRKGcf);</script>
<script>eval(mod_pagespeed_9GFjDb6KwW);</script>
</body>
</html>
