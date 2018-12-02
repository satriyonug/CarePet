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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Service  Status</h2>
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
                                            <td><img src="assets/images/xs/avatar1.jpg" class="rounded-circle width30 m-r-15" alt="profile-image"><span>John Pantau</span></td>
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
                                            <td><img src="assets/images/xs/avatar1.jpg" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Riko Kucing</span></td>
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
                                            <td><img src="assets/images/xs/avatar1.jpg" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Otto Budiman</span></td>
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
            <div class="row clearfix">   
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Order  Status</h2>
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
                                            <th>Item name</th>
                                            <th>Order Date</th>
                                            <th>END Date</th>
                                            <th>Kurir</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="assets/images/xs/avatar1.jpg" class="rounded-circle width30 m-r-15" alt="profile-image"><span>John Pantau</span></td>
                                            <td><span class="text-info">Jl. Keputih Tegal Timur</span></td>
                                            <td>Sept 13, 2018</td>
                                            <td>Sept 16, 2018</td>
                                            <td>Mitra Kurir</td>
                                            <td>
                                                   RP50.000 
                                            </td>
                                            <td> <button type="button" class="btn btn-success"><i class="fa fa-check-circle"></i> <span>Accept</span></button>
                                            <button type="button" class="btn btn-warning"><i class="fa fa-warning"></i> <span>Tolak</span></button>
                                            </td>

<!--    IF ORDER ACEPTED                                         <td><span class="badge badge-default">in Progress</span></td>
 -->
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><img src="assets/images/xs/avatar1.jpg" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Riko Kucing</span></td>
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
                                            <td><img src="assets/images/xs/avatar1.jpg" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Otto Budiman</span></td>
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
    
</div>

@endsection