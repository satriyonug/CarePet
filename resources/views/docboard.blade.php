@extends('layouts.admintemplate')
@section('maincontent')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Doctor Schedule</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Doctor</li>
                            <li class="breadcrumb-item active">Doctor Schedule</li>
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
                <div class="col-lg-8">
                    <div class="card">
                        <div class="body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="body">
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addevent">Add New Event</button>
                        </div>
                    </div>
                    <div class="card profile-header">
                        <div class="body">
                            <div class="text-center">
                                <img src="assets/images/user.png" class="rounded-circle m-b-15" alt="">
                                <div>
                                    <h4 class="m-b-0">dr. <strong>Dhea</strong> Hana</h4>
                                    <span>Sp.B</span>
                                </div>
                                <div class="progress progress-xs m-b-25 m-t-25">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 89%;">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <h6>17</h6>
                                        <span>Completed</span>
                                    </div>
                                    <div class="col-4">
                                        <h6>34</h6>
                                        <span>ToDo</span>
                                    </div>
                                    <div class="col-4">
                                        <h6>78</h6>
                                        <span>All Tasks</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <span class="badge badge-default mb-2">Pulmonology</span>
                            <span class="badge badge-primary mb-2">Gynecology</span>
                            <span class="badge badge-success mb-2">Neurology</span>
                            <span class="badge badge-info mb-2">Urology</span>
                            <hr>
                            <h6>Team</h6>
                            <ul class="list-unstyled team-info m-t-20">                                
                                <li><img src="assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                <li><img src="assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                <li><img src="assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                <li><img src="assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                <li><img src="assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                            </ul>
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
                                    <img src="assets/images/xs/avatar1.jpg" alt="avatar" />
                                    <div class="about">
                                        <div class="name">Dr. Vincent Porter</div>
                                        <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>                                            
                                    </div>
                                </li>
                                <li class="clearfix active">
                                    <img src="assets/images/xs/avatar2.jpg" alt="avatar" />
                                    <div class="about">
                                        <div class="name">Dr. Aiden Chavez</div>
                                        <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img src="assets/images/xs/avatar3.jpg" alt="avatar" />
                                    <div class="about">
                                        <div class="name">Dr. Mike Bing</div>
                                        <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                    </div>
                                </li>                                    
                                <li class="clearfix">
                                    <img src="assets/images/xs/avatar7.jpg" alt="avatar" />
                                    <div class="about">
                                        <div class="name">Dr. Christian Kelly</div>
                                        <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img src="assets/images/xs/avatar8.jpg" alt="avatar" />
                                    <div class="about">
                                        <div class="name">Dr. Monica Ward</div>
                                        <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img src="assets/images/xs/avatar9.jpg" alt="avatar" />
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
                                            <img src="assets/images/xs/avatar2.jpg" alt="avatar" />
                                        </a>
                                        <div class="chat-about">
                                            <h6 class="m-b-0">dr. Sugeng</h6>
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
                                            <img src="assets/images/xs/avatar7.jpg" alt="avatar">
                                        </div>
                                        <div class="message other-message float-right"> Halo Pak Sugeng </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="message-data">
                                            <span class="message-data-time">10:12 AM, Today</span>
                                        </div>
                                        <div class="message my-message">Are we meeting today?</div>                                    
                                    </li>                               
                                    <li class="clearfix">
                                        <div class="message-data">
                                            <span class="message-data-time">10:15 AM, Today</span>
                                        </div>
                                        <div class="message my-message">Project has been already finished and I have results to show you.</div>
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
    
</div>


<!-- Default Size -->
<div class="modal fade" id="addevent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Add Event</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="form-line">
                        <input type="number" class="form-control" placeholder="Event Date">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" class="form-control" placeholder="Event Title">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <textarea class="form-control no-resize" placeholder="Event Description..."></textarea>
                    </div>
                </div>       
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-simple" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

@endsection
