<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <title>PetVet | A Pet Shop Responsive HTML Template</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/xapple-touch-icon.png.pagespeed.ic.lbIMAdR47L.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="images/xapple-touch-icon-57x57.png.pagespeed.ic.lbIMAdR47L.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/xapple-touch-icon-72x72.png.apagespeed.ic.i-0YYlpEGy.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/xapple-touch-icon-76x76.png.pagespeed.ic.xyE4EWNI5l.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/xapple-touch-icon-114x114.png.pagespeed.ic.46I_5LN6hD.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/xapple-touch-icon-120x120.png.pagespeed.ic.wZ7p39DfnJ.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/xapple-touch-icon-144x144.png.pagespeed.ic.Zf_U5pDbrc.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/xapple-touch-icon-152x152.png.pagespeed.ic.u_OuBhvBU5.png">
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/A.settings.css.pagespeed.cf.0al2lLpEZL.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/A.animate.css%2bbootstrap.css%2bcarousel.css%2bbootstrap-select.css%2bjquery-ui.css%2cMcc.M6_eiQhCjV.css.pagespeed.cf.jFTgbQQLk0.css" />
    <link rel="stylesheet" type="text/css" href="A.style.css%2bcss%2c%2c_custom.css%2cMcc.dJXLFsuLOF.css.pagespeed.cf.UgtDm8q7vQ.css" />
    <style type="text/css">
    	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>


body {
  background-color: #edeff2;
  font-family: "Calibri", "Roboto", sans-serif;
}

.chat_window {
  position: absolute;
  width: calc(100% - 20px);
  height: 400px;
  border-radius: 10px;
  background-color: #fff;
  left: 50%;
  top: 50%;
  transform: translateX(-50%) translateY(-50%);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
  background-color: #f8f8f8;
  overflow: hidden;
}

.top_menu {
  background-color: #fff;
  width: 100%;
  padding: 20px 0 15px;
  box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
}
.top_menu .buttons {
  margin: 3px 0 0 20px;
  position: absolute;
}
.top_menu .buttons .button {
  width: 16px;
  height: 16px;
  border-radius: 50%;
  display: inline-block;
  margin-right: 10px;
  position: relative;
}
.top_menu .buttons .button.close {
  background-color: #f5886e;
}
.top_menu .buttons .button.minimize {
  background-color: #fdbf68;
}
.top_menu .buttons .button.maximize {
  background-color: #a3d063;
}
.top_menu .title {
  text-align: center;
  color: #bcbdc0;
  font-size: 20px;
}

.messages {
  position: relative;
  list-style: none;
  padding: 20px 10px 0 10px;
  margin: 0;
  height: 347px;
  overflow: scroll;
}
.messages .message {
  clear: both;
  overflow: hidden;
  margin-bottom: 20px;
  transition: all 0.5s linear;
  opacity: 0;
}
.messages .message.left .avatar {
  background-color: #f5886e;
  float: left;
}
.messages .message.left .text_wrapper {
  background-color: #ffe6cb;
  margin-left: 20px;
}
.messages .message.left .text_wrapper::after, .messages .message.left .text_wrapper::before {
  right: 100%;
  border-right-color: #ffe6cb;
}
.messages .message.left .text {
  color: #c48843;
}
.messages .message.right .avatar {
  background-color: #fdbf68;
  float: right;
}
.messages .message.right .text_wrapper {
  background-color: #c7eafc;
  margin-right: 20px;
  float: right;
}
.messages .message.right .text_wrapper::after, .messages .message.right .text_wrapper::before {
  left: 100%;
  border-left-color: #c7eafc;
}
.messages .message.right .text {
  color: #45829b;
}
.messages .message.appeared {
  opacity: 1;
}
.messages .message .avatar {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  display: inline-block;
}
.messages .message .text_wrapper {
  display: inline-block;
  padding: 20px;
  border-radius: 6px;
  width: calc(100% - 85px);
  min-width: 100px;
  position: relative;
}
.messages .message .text_wrapper::after, .messages .message .text_wrapper:before {
  top: 18px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}
.messages .message .text_wrapper::after {
  border-width: 13px;
  margin-top: 0px;
}
.messages .message .text_wrapper::before {
  border-width: 15px;
  margin-top: -2px;
}
.messages .message .text_wrapper .text {
  font-size: 18px;
  font-weight: 300;
}

.bottom_wrapper {
  position: relative;
  width: 100%;
  background-color: #fff;
  padding: 20px 20px;
  position: absolute;
  bottom: 0;
}
.bottom_wrapper .message_input_wrapper {
  display: inline-block;
  height: 50px;
  border-radius: 25px;
  border: 1px solid #bcbdc0;
  width: calc(100% - 160px);
  position: relative;
  padding: 0 20px;
}
.bottom_wrapper .message_input_wrapper .message_input {
  border: none;
  height: 100%;
  box-sizing: border-box;
  width: calc(100% - 40px);
  position: absolute;
  outline-width: 0;
  color: gray;
}
.bottom_wrapper .send_message {
  width: 140px;
  height: 50px;
  display: inline-block;
  border-radius: 50px;
  background-color: #a3d063;
  border: 2px solid #a3d063;
  color: #fff;
  cursor: pointer;
  transition: all 0.2s linear;
  text-align: center;
  float: right;
}
.bottom_wrapper .send_message:hover {
  color: #a3d063;
  background-color: #fff;
}
.bottom_wrapper .send_message .text {
  font-size: 18px;
  font-weight: 300;
  display: inline-block;
  line-height: 48px;
}

.message_template {
  display: none;
}

    </style>
    <script src="js/modernizer.js.pagespeed.jm.1UdTGnoJUM.js"></script>
   
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="loader">
        <div class="loader-container">
            <img src="images/xload.png.pagespeed.ic.kE5YiCMdt2.png" alt="" class="loader-site spinner">
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
                                            <a class="navbar-brand" href="index.html"><img src="images/xlogo.png.pagespeed.ic.jEZLnjLad0.png" alt="Ova"></a>
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
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home <span class="fa fa-angle-down"></span></a>
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
                                                    <li><a href="vets.html">Our Vets</a></li>
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
                                                                    <li><a href="shop.html">Shop Page</a></li>
                                                                    <li><a href="shop-single.html">Shop Single</a></li>
                                                                    <li><a href="shop-checkout.html">Shop Checkout</a></li>
                                                                    <li><a href="shop-cart.html">Shopping Cart</a></li>
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
                                                    <li><a href="appointment.html">Appointment</a></li>
                                                    <li><a class="active" href="contact.html">Contact</a></li>
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
        <section class="section banner" style="background-image:url(upload/xblog_bg.jpg.pagespeed.ic.6FShpY5eNF.jpg)" data-img-width="1688" data-img-height="470" data-diff="100">
        </section>
        <div class="page-title grey">
            <div class="container">
                <div class="title-area pull-left">
                    <h2>Contact Us <small>Get a premium support now!</small></h2>
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Contact</li>
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
                    <div class="col-md-10 col-xs-12">
                        <div class="appoform-wrapper">

                            			<div class="">
										    <div class="top_menu">
										        <div class="buttons">
										            <div class="button close"></div>
										            <div class="button minimize"></div>
										            <div class="button maximize"></div>
										        </div>
										        <div class="title">Chat</div>
										    </div>
										    <ul class="messages"></ul>
										    <div class="bottom_wrapper clearfix">
										        <div class="message_input_wrapper">
										            <input class="message_input" placeholder="Type your message here..." />
										        </div>
										        <div class="send_message">
										            <div class="icon"></div>
										            <div class="text">Send</div>
										        </div>
										    </div>
										</div>
										<div class="message_template">
										    <li class="message">
										        <div class="avatar"></div>
										        <div class="text_wrapper">
										            <div class="text"></div>
										        </div>
										    </li>
										</div>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12">
                    	<div class="row module-wrapper text-center">
		                        <div class="entry">
		                            <img class="img-responsive" src="upload/xvet_04.png.pagespeed.ic._tRn77ilzK.png" alt="">
		                            <div class="magnifier">
		                                <div class="buttons">
		                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-envelope"></span></a>
		                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-google-plus"></span></a>
		                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-twitter"></span></a>
		                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-facebook"></span></a>
		                                </div>
		                            </div>
		                        </div>
		                        <h4><a href="team-single.html"> Adrian STUFA <span>|</span> <small>Veterinary</small></a></h4>
		                        <p>Cras dapibus. Vivamus elementum semper Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae</p>
		                        <a href="team-single.html" class="readmore">Read more</a>
                		</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section grey">
            <div class="container">
                <div class="row">
                    <div id="carousel-reviews" class="carousel slide text-center" data-ride="carousel">
                        <div class="carousel-inner">
                        	<header class="form-header">
                                <h3>Chat us</h3>
                            </header>
                            <div class="item active">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text">
                                        <a title="" href="#">Anna <small>from ThemVet, Poland</small></a>
                                        <p>PetVet looks amazing, Lorem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <img src="upload/xteam_circle_01.png.pagespeed.ic.bUjjbddUk3.png" class="img-thumbnail img-circle" alt="">
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text">
                                        <a title="" href="#">Amy <small>from Envet, Turkey</small></a>
                                        <p>PetVet looks amazing, Lorem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <img src="upload/xteam_circle_02.png.pagespeed.ic.EJ1G0FGfp_.png" class="img-thumbnail img-circle" alt="">
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text">
                                        <a title="" href="#">Jessi <small>from PetVet, Island</small></a>
                                        <p>PetVet looks amazing, Lorem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <img src="upload/xteam_circle_03.png.pagespeed.ic.SbrCGVEy5K.png" class="img-thumbnail img-circle" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text">
                                        <a title="" href="#">Anna <small>from ThemVet, Poland</small></a>
                                        <p>PetVet looks amazing, Lorem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <img src="upload/xteam_circle_01.png.pagespeed.ic.bUjjbddUk3.png" class="img-thumbnail img-circle" alt="">
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text">
                                        <a title="" href="#">Amy <small>from Envet, Turkey</small></a>
                                        <p>PetVet looks amazing, Lorem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <img src="upload/xteam_circle_02.png.pagespeed.ic.EJ1G0FGfp_.png" class="img-thumbnail img-circle" alt="">
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text">
                                        <a title="" href="#">Jessi <small>from PetVet, Island</small></a>
                                        <p>PetVet looks amazing, Lorem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <img src="upload/xteam_circle_03.png.pagespeed.ic.SbrCGVEy5K.png" class="img-thumbnail img-circle" alt="">
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                            <span class="fa fa-angle-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="callout-section dark-yellow">
            <div class="container">
                <div class="row callout">
                    <div class="col-md-9">
                        <h3>Interesting our works and services?</h3>
                        <p class="lead">The standard chunk of Lorem Ipsu from "de Finibus Bonorum et Malorum" by Cicero are also reproduced
                            <br> in their exact original form, accompanied. Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="btn btn-default btn-block btn-lg">Appointment Now</a>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer dark">
            <div class="container">
                <div class="row module-wrapper">
                    <div class="col-md-4 col-sm-6">
                        <div class="widget">
                            <div class="text-center">
                                <img src="images/xflogo.png.pagespeed.ic.eNO_4SEZBS.png" alt="" class="img-responsive">
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
                                <li><a href="vets.html">Our Vets</a></li>
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
    <script src="js/jquery.min.js.pagespeed.jm.J-8M9bCq0j.js"></script>
     <script type="text/javascript">
    	(function () {
		    var Message;
		    Message = function (arg) {
		        this.text = arg.text, this.message_side = arg.message_side;
		        this.draw = function (_this) {
		            return function () {
		                var $message;
		                $message = $($('.message_template').clone().html());
		                $message.addClass(_this.message_side).find('.text').html(_this.text);
		                $('.messages').append($message);
		                return setTimeout(function () {
		                    return $message.addClass('appeared');
		                }, 0);
		            };
		        }(this);
		        return this;
	    	};
		    $(function () {
		        var getMessageText, message_side, sendMessage;
		        message_side = 'right';
		        getMessageText = function () {
		            var $message_input;
		            $message_input = $('.message_input');
		            return $message_input.val();
		        };
		        sendMessage = function (text) {
		            var $messages, message;
		            if (text.trim() === '') {
		                return;
		            }
		            $('.message_input').val('');
		            $messages = $('.messages');
		            message_side = message_side === 'left' ? 'right' : 'left';
		            message = new Message({
		                text: text,
		                message_side: message_side
		            });
		            message.draw();
		            return $messages.animate({ scrollTop: $messages.prop('scrollHeight') }, 300);
		        };
		        $('.send_message').click(function (e) {
		            return sendMessage(getMessageText());
		        });
		        $('.message_input').keyup(function (e) {
		            if (e.which === 13) {
		                return sendMessage(getMessageText());
		            }
		        });
		        sendMessage('Hello Dokter! :)');
		        setTimeout(function () {
		            return sendMessage('Hi Redo! Ada yang bisa dibanting?');
		        }, 1000);
		        return setTimeout(function () {
		            return sendMessage('Anu Dok, ini hewan saya butuh bantuan!');
		        }, 2000);
		    });
		}.call(this));

    </script>

    <script src="js/bootstrap.js%2bretina.js%2bwow.js.pagespeed.jc.isTtwS3BRA.js"></script>
    <script>
        eval(mod_pagespeed_QVjN9VLU9A);
    </script>
    <script>
        eval(mod_pagespeed_MEsUxamUni);
    </script>
    <script>
        eval(mod_pagespeed_0bkPwSHufl);
    </script>
    <script src="js/jquery.simple-text-rotator.js%2bparallax.js%2btouch.js%2bcarousel.js.pagespeed.jc.HG-aMDAZDl.js"></script>
    <script>
        eval(mod_pagespeed_07fmU$$RNq);
    </script>
    <script>
        eval(mod_pagespeed_XKKesQfpp0);
    </script>
    <script>
        eval(mod_pagespeed_z83SFsIgz$);
    </script>
    <script>
        eval(mod_pagespeed_WBv_OkcQEu);
    </script>
    <script src="js/custom.js%2bcontact.js%2bmap.js.pagespeed.jc.gDJwcCfkw1.js"></script>
    <script>
        eval(mod_pagespeed_OFpQ46Wcku);
    </script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script>
        eval(mod_pagespeed_dE_1WRKGcf);
    </script>
    <script>
        eval(mod_pagespeed_9GFjDb6KwW);
    </script>
</body>

</html>