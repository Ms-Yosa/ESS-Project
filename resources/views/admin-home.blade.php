@extends('layouts.admin.master')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>ADMIN DASHBOARD</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body">
                            <div class="media ai-icon">
                                <span class="mr-3">
                                    <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" style="stroke-dasharray: 25, 45; stroke-dashoffset: 0;"></path>
                                        <path d="M8,7A4,4 0,1,1 16,7A4,4 0,1,1 8,7" style="stroke-dasharray: 26, 46; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Students</p>
                                    <h4 class="mb-0">3280</h4>
                                    <span class="badge badge-primary">Enrolled</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body">
                            <div class="media ai-icon">
                                <span class="mr-3">
                                    <svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" style="stroke-dasharray: 66, 86; stroke-dashoffset: 0;"></path>
                                        <path d="M14,2L14,8L20,8" style="stroke-dasharray: 12, 32; stroke-dashoffset: 0;"></path>
                                        <path d="M16,13L8,13" style="stroke-dasharray: 8, 28; stroke-dashoffset: 0;"></path>
                                        <path d="M16,17L8,17" style="stroke-dasharray: 8, 28; stroke-dashoffset: 0;"></path>
                                        <path d="M10,9L9,9L8,9" style="stroke-dasharray: 2, 22; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Faculties</p>
                                    <h4 class="mb-0">2570</h4>
                                    <span class="badge badge-warning">Registered</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body">
                            <div class="media ai-icon">
                                <span class="mr-3">
                                    <svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                        <path d="M12,1L12,23" style="stroke-dasharray: 22, 42; stroke-dashoffset: 0;"></path>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" style="stroke-dasharray: 43, 63; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Revenue</p>
                                    <h4 class="mb-0">364.50K</h4>
                                    <span class="badge badge-danger">-3.5%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body">
                            <div class="media ai-icon">
                                <span class="mr-3">
                                    <svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
                                        <path d="M3,5A9,3 0,1,1 21,5A9,3 0,1,1 3,5" style="stroke-dasharray: 41, 61; stroke-dashoffset: 0;"></path>
                                        <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3" style="stroke-dasharray: 21, 41; stroke-dashoffset: 0;"></path>
                                        <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" style="stroke-dasharray: 49, 69; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Patient</p>
                                    <h4 class="mb-0">364.50K</h4>
                                    <span class="badge badge-success">-3.5%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-xxl-8 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Student List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-xxl-4 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Admin Profile</h4>
                        </div>
                        <div class="student-info">
                            <div class="text-center container-fluid">
                                
                                <h3 class="item-title">{{ Auth::guard('admin')->user()->name }}</h3>
                                    <p>{{ Auth::guard('admin')->user()->email }}</p>
                                    <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                     <form action="{{ route('admin.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Messages</h5>
                        </div>
                        <div class="card-body">
                            <div id="DZ_W_Message" class="widget-message dz-scroll" style="height:350px;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-xxl-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Faculties</h4>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-xxl-4 col-md-6">					
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Events</h4>
                        </div>
                        <div class="py-2">
                            <ul class="list-group list-group-flush dz-scroll" id="DZ_W_Doctor_List" style="height:350px;">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection