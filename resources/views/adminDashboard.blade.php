@extends('layouts.admintemplate')
@section('maincontent')
 <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Dashboard</li>
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
                <div class="col-lg-3 col-md-12">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div id="top_counter1" class="carousel vert slide" data-ride="carousel" data-interval="2500">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="icon"><i class="fa fa-user"></i> </div>
                                                <div class="content">
                                                    <div class="text">Total Mitra</div>
                                                    <h5 class="number">215</h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i class="fa fa-user"></i> </div>
                                                <div class="content">
                                                    <div class="text">Mitra Baru</div>
                                                    <h5 class="number">21</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div id="top_counter2" class="carousel vert slide" data-ride="carousel" data-interval="2100">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="icon"><i class="fa fa-user-md"></i> </div>
                                                <div class="content">
                                                    <div class="text">Konsultasi</div>
                                                    <h5 class="number">06</h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i class="fa fa-user-md"></i> </div>
                                                <div class="content">
                                                    <div class="text">Shopping</div>
                                                    <h5 class="number">94</h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i class="fa fa-user-md"></i> </div>
                                                <div class="content">
                                                    <div class="text">Pet Service</div>
                                                    <h5 class="number">23</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div id="top_counter3" class="carousel vert slide" data-ride="carousel" data-interval="2300">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="icon"><i class="fa fa-eye"></i> </div>
                                                <div class="content">
                                                    <div class="text">Total Visitors</div>
                                                    <h5 class="number">10K</h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i class="fa fa-eye"></i> </div>
                                                <div class="content">
                                                    <div class="text">Today Visitors</div>
                                                    <h5 class="number">142</h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="icon"><i class="fa fa-eye"></i> </div>
                                                <div class="content">
                                                    <div class="text">Month Visitors</div>
                                                    <h5 class="number">2,087</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <hr>
                                    <div class="icon"><i class="fa fa-university"></i> </div>
                                    <div class="content">
                                        <div class="text">Revenue</div>
                                        <h5 class="number">Rp 40,243.00M</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon"><i class="fa fa-thumbs-o-up"></i> </div>
                                    <div class="content">
                                        <div class="text">Happy Clients</div>
                                        <h5 class="number">528</h5>
                                    </div>
                                    <hr>
                                    <div class="icon"><i class="fa fa-smile-o"></i> </div>
                                    <div class="content">
                                        <div class="text">Smiley Faces</div>
                                        <h5 class="number">2,528</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Total Revenue</h2>
                            <ul class="header-dropdown">
                                <li><a class="tab_btn" href="javascript:void(0);" title="Weekly">W</a></li>
                                <li><a class="tab_btn" href="javascript:void(0);" title="Monthly">M</a></li>
                                <li><a class="tab_btn active" href="javascript:void(0);" title="Yearly">Y</a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="body bg-success text-light">
                                        <h4><i class="icon-wallet"></i> Rp10,003.00M</h4>
                                        <span>Mitra Income</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="body bg-warning text-light">
                                        <h4><i class="icon-wallet"></i> Rp14,140.00M</h4>
                                        <span>Shopping Income</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="body bg-danger text-light">
                                        <h4><i class="icon-wallet"></i> Rp16,100.00M</h4>
                                        <span>Service Income</span>
                                    </div>
                                </div>
                            </div>
                            <div id="total_revenue" class="ct-chart m-t-20"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Visitors Statistics</h2>
                            <ul class="header-dropdown">
                                <li><a class="tab_btn" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Weekly">W</a></li>
                                <li><a class="tab_btn" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Monthly">M</a></li>
                                <li><a class="tab_btn active" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Yearly">Y</a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="Visitors_chart" class="flot-chart m-b-20"></div>
                            <div class="row text-center">
                                <div class="col-lg-3 col-md-3 col-6">
                                    <div id="Visitors_chart1" class="carousel slide" data-ride="carousel" data-interval="2000">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="body xl-turquoise">
                                                    <h4>2,025</h4>
                                                    <span>Surabaya</span>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="body xl-parpl">
                                                    <h4>1,100</h4>
                                                    <span>Malang</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-6">
                                    <div id="Visitors_chart2" class="carousel slide" data-ride="carousel" data-interval="2200">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="body xl-parpl">
                                                    <h4>1,025</h4>
                                                    <span>Pasuruan</span>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="body xl-slategray">
                                                    <h4>582</h4>
                                                    <span>Sidoarjo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="col-lg-3 col-md-3 col-6">
                                    <div class="body xl-salmon">                                        
                                        <h4>3,845</h4>
                                        <span>Lumajang</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-6">
                                    <div class="body xl-slategray">                                        
                                        <h4>863</h4>
                                        <span>Other</span>
                                    </div>
                                </div>                      
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>ToDo List <small>This Month task list</small></h2>
                        </div>
                        <div class="body todo_list">
                            <ul class="list-unstyled">
                                <li>
                                    <label class="fancy-checkbox mb-0">
                                        <input type="checkbox" name="checkbox" checked>
                                        <span>A Brief History Of Anesthetics</span>
                                    </label>
                                    <div class="m-l-35 m-b-30">
                                        <small class="text-muted">SCHEDULED FOR 3:00 P.M. ON JUN 2018</small>
                                        <ul class="list-unstyled team-info">
                                            <li><img src="assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Chris Fox" alt="Avatar"></li>
                                            <li><img src="assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Joge Lucky" alt="Avatar"></li>
                                            <li><img src="assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Isabella" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <label class="fancy-checkbox mb-0">
                                        <input type="checkbox" name="checkbox">
                                        <span>Using Laser Teatment to Help</span>
                                    </label>
                                    <div class="m-l-35 m-b-30">
                                        <small class="text-muted">SCHEDULED FOR 4:30 P.M. ON JUN 2018</small>
                                    </div>
                                </li>
                                <li>
                                    <label class="fancy-checkbox mb-0">
                                        <input type="checkbox" name="checkbox">
                                        <span>Selecting the Apnea Treatment</span>
                                    </label>
                                    <div class="m-l-35 m-b-30">
                                        <small class="text-muted">SCHEDULED FOR 4:30 P.M. ON JUN 2018</small><br>
                                        <small class="text-warning">ICU PATIENT - LAST 2 DAYS</small><br>
                                        <small>Patient Name: <a href="#">Hossein</a></small>                                        
                                    </div>
                                </li>
                                <li>
                                    <label class="fancy-checkbox mb-0">
                                        <input type="checkbox" name="checkbox">
                                        <span>Using Laser Teatment to Help</span>
                                    </label>
                                    <div class="m-l-35">
                                        <small class="text-muted">SCHEDULED FOR 4:30 P.M. ON JUN 2018</small>
                                        <ul class="list-unstyled team-info">
                                            <li><img src="assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Chris Fox" alt="Avatar"></li>
                                            <li><img src="assets/images/xs/avatar6.jpg" data-toggle="tooltip" data-placement="top" title="Dr. Joge Lucky" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Customer  Status</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <p class="float-md-right">
                                <span class="badge badge-success">3 Admit</span>
                                <span class="badge badge-default">2 Discharge</span>
                            </p>
                            <div class="table-responsive table_middel">
                                <table class="table m-b-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Customer</th>
                                            <th>Adress</th>
                                            <th>START Date</th>
                                            <th>END Date</th>
                                            <th>Priority</th>
                                            <th>Progress</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="{{ URL::asset('backend/light/assets/images/xs/avatar1.jpg') }}" class="rounded-circle width30 m-r-15" alt="profile-image"><span>John Pantau</span></td>
                                            <td><span class="text-info">Jl. Keputih Tegal Timur</span></td>
                                            <td>Sept 13, 2018</td>
                                            <td>Sept 16, 2018</td>
                                            <td><span class="badge badge-warning">MEDIUM</span></td>
                                            <td><div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">40% Complete</span> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success">Admit</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><img src="{{ URL::asset('backend/light/assets/images/xs/avatar1.jpg') }}" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Riko Kucing</span></td>
                                            <td><span class="text-info">Jl. Keputih Tegal Barat</span></td>
                                            <td>Sept 13, 2018</td>
                                            <td>Sept 22, 2018</td>
                                            <td><span class="badge badge-warning">MEDIUM</span></td>
                                            <td><div class="progress progress-xs">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-default">Discharge</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><img src="{{ URL::asset('backend/light/assets/images/xs/avatar1.jpg') }}" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Otto Budiman</span></td>
                                            <td><span class="text-info">Jl. Keputih Tegal Tenggara</span></td>
                                            <td>Sept 13, 2018</td>
                                            <td>Sept 23, 2018</td>
                                            <td><span class="badge badge-warning">MEDIUM</span></td>
                                            <td><div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"> <span class="sr-only">15% Complete</span> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success">Admit</span></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
@endsection