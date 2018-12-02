@extends('layouts.admintemplate')
@section('maincontent')

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Chat</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">App</li>
                            <li class="breadcrumb-item active">Chat</li>
                        </ul>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <div class="bh_chart hidden-xs">
                            <div class="float-left m-r-15">
                                <small>Visitors</small>
                                <h6 class="mb-0 mt-1"><i class="icon-user"></i> 1,784</h6>
                            </div>
                            <span class="bh_visitors float-right">2,5,1,8,3,6,7,5</span>
                        </div>
                        <div class="bh_chart hidden-sm">
                            <div class="float-left m-r-15">
                                <small>Visits</small>
                                <h6 class="mb-0 mt-1"><i class="icon-globe"></i> 325</h6>
                            </div>
                            <span class="bh_visits float-right">10,8,9,3,5,8,5</span>
                        </div>
                        <div class="bh_chart hidden-sm">
                            <div class="float-left m-r-15">
                                <small>Chats</small>
                                <h6 class="mb-0 mt-1"><i class="icon-bubbles"></i> 13</h6>
                            </div>
                            <span class="bh_chats float-right">1,8,5,6,2,4,3,2</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card chat-app">
                        <div id="plist" class="people-list">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                            <ul class="list-unstyled chat-list mt-2 mb-0">
                                <li class="clearfix">
                                    <img src="{{ URL::asset('backend/light/assets/images/xs/avatar1.jpg') }}" alt="avatar" />
                                    <div class="about">
                                        <div class="name">Dr. Vincent Porter</div>
                                        <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>                                            
                                    </div>
                                </li>
                                <li class="clearfix active">
                                    <img src="{{ URL::asset('backend/light/assets/images/xs/avatar2.jpg') }}" alt="avatar" />
                                    <div class="about">
                                        <div class="name">Dr. Sugeng Sudrajat</div>
                                        <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img src="{{ URL::asset('backend/light/assets/images/xs/avatar3.jpg') }}" alt="avatar" />
                                    <div class="about">
                                        <div class="name">Dr. Mike Bing</div>
                                        <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                    </div>
                                </li>                                    
                                <li class="clearfix">
                                    <img src="{{ URL::asset('backend/light/assets/images/xs/avatar7.jpg') }}" alt="avatar" />
                                    <div class="about">
                                        <div class="name">Dr. Christian Kelly</div>
                                        <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img src="{{ URL::asset('backend/light/assets/images/xs/avatar8.jpg') }}" alt="avatar" />
                                    <div class="about">
                                        <div class="name">Dr. Monica Ward</div>
                                        <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img src="{{ URL::asset('backend/light/assets/images/xs/avatar9.jpg') }}" alt="avatar" />
                                    <div class="about">
                                        <div class="name">Dr. Dean Henry</div>
                                        <div class="status"> <i class="fa fa-circle offline"></i> offline since Oct 28 </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="chat">
                            <div class="chat-header clearfix">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                            <img src="{{ URL::asset('backend/light/assets/images/xs/avatar2.jpg') }}" alt="avatar" />
                                        </a>
                                        <div class="chat-about">
                                            <h6 class="m-b-0">dr. Sugeng Sudrajat</h6>
                                            <small>Last seen: 2 hours ago</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 hidden-sm text-right">
                                        <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="icon-camera"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-outline-primary"><i class="icon-camcorder"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-outline-info"><i class="icon-settings"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-outline-warning"><i class="icon-question"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-history">
                                <ul class="m-b-0">
                                    <li class="clearfix">
                                        <div class="message-data text-right">
                                            <span class="message-data-time" >10:10 AM, Today</span>
                                            <img src="{{ URL::asset('backend/light/assets/images/xs/avatar7.jpg') }}" alt="avatar">
                                        </div>
                                        <div class="message other-message float-right"> Halo Pak Sugeng </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="message-data">
                                            <span class="message-data-time">10:12 AM, Today</span>
                                        </div>
                                        <div class="message my-message">Halo ada yang bisa dibanting?</div>                                    
                                    </li>                               
                                    
                                </ul>
                            </div>
                            <div class="chat-message clearfix">
                                <div class="input-group mb-0">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-paper-plane"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Enter text here...">                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection