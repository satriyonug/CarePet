@extends('layouts.template')

@section('maincontent')
        <section class="section banner" style="background-image:url({{ URL::asset('/petvet/upload/xblog_bg.jpg.pagespeed.ic.6FShpY5eNF.jpg') }} )" data-img-width="1688" data-img-height="470" data-diff="100">
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
		                            <img class="img-responsive" src="{{ URL::asset('/petvet/upload/xvet_04.png.pagespeed.ic._tRn77ilzK.png') }}" alt="">
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
        
  @endsection        