@extends('layouts.admin.master')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Admin Dashboard</h4>
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
                                <i class="la la-users"></i>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Students</p>
                                    <h4 class="mb-0">{{$user}}</h4>
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
                                <i class="la la-user"></i>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Faculties</p>
                                    <h4 class="mb-0">{{$faculty}}</h4>
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
                                <i class="la la-shield"></i>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Admins</p>
                                    <h4 class="mb-0">{{$admin}}</h4>
                                    <span class="badge badge-danger">Registered</span>
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
                                <i class="la la-book"></i>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Classes</p>
                                    <h4 class="mb-0">{{$class}}</h4>
                                    <span class="badge badge-success">Registered</span>
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

                                <h3 class="item-title">{{ Auth::guard('admin')->user()->name }} {{ Auth::guard('admin')->user()->middle_name }} {{ Auth::guard('admin')->user()->surname }}</h3>
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