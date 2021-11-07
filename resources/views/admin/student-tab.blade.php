@extends('layouts.admin.master')
@section('content')


    <!--  SIDE BAR-->

    <div class="dlabnav">
        <div class="dlabnav-scroll">
            <ul class="metismenu" id="menu">
            
                <li class="nav-label first">Main Menu</li>
                
                <li>
                    <a  href="{{ route('admin.home') }}" >
                        <i class="la la-home"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-shield"></i>
                        <span class="nav-text">Admin</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('admin.admin-tab') }}">All Admins</a></li>
                        <li><a href="#">Add Admin</a></li>
                        <!-- <li><a href="#">Edit Professor</a></li>
                        <li><a href="#">Professor Profile</a></li> -->
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-user"></i>
                        <span class="nav-text">Faculties</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('admin.faculty-tab') }}">All Faculties</a></li>
                        <li><a href="#">Add Faculties</a></li>
                        <!-- <li><a href="#">Edit Professor</a></li>
                        <li><a href="#">Professor Profile</a></li> -->
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-users"></i>
                        <span class="nav-text">Students</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('admin.student-tab') }}">All Students</a></li>
                        <li><a href="{{ route('user.register') }}">Add Students</a></li>
                        <!-- <li><a href="edit-student.html">Edit Students</a></li>
                        <li><a href="about-student.html">About Students</a></li> -->
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-graduation-cap"></i>
                        <span class="nav-text">Classes</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('admin.class-tab') }}">All Classes</a></li>
                        <li><a href="add-courses.html">Add Classes</a></li>
                        <!-- <li><a href="edit-courses.html">Edit Courses</a></li>
                        <li><a href="about-courses.html">About Courses</a></li> -->
                    </ul>
                </li>
                <li>
                    <a  href="{{ route('admin.message-tab') }}" >
                        <i class="la la-inbox"></i>
                        <span class="nav-text">Messages</span>
                    </a>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-calendar-o"></i>
                        <span class="nav-text">Calendar</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('admin.calendar-tab') }}">All Events </a></li>
                        <li><a href="add-library.html">Add Event</a></li>
                        <!-- <li><a href="edit-library.html">Edit Library</a></li> -->
                    </ul>
                </li>
                <li>    
                    <a class="nav-label" href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="la la-arrow-circle-right"></i>
                        <span class="nav-text">Logout</span>
                    </a>
                    <form action="{{ route('admin.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                </li>
            </ul>
        </div>
    </div>

     <!-- END OF SIDE BAR -->


    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>All Student</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Students</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Student</a></li>
                    </ol>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">All Students List  </h4>
                                    <a href="{{ route('user.register') }}" class="btn btn-primary">+ Add new</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Age</th>
                                                <th>Gender</th>
                                                <th>Religion</th>
                                                <th>Bloodtype</th>
                                                <th>Guardian</th>
                                                <th>Number</th>
                                                <th>Relation</th>
                                                <th>Bloodtype</th>
                                                <th>Address</th>
                                                <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach ($users as $key => $user)
                                                  <tr>
                                                      <td class="id">{{ ++$key }}</td>
                                                      <td class="name">{{ $user->name }}</td>
                                                      <td class="email">{{ $user->email }}</td>
                                                      <td class="age">{{ $user->age }}</td>
                                                      <td class="gender">{{ $user->gender }}</td>
                                                      <td class="religion">{{ $user->religion }}</td>
                                                      <td class="student_bloodtype">{{ $user->student_bloodtype }}</td>
                                                      <td class="guardian"> {{ $user->guardian }}</td>
                                                      <td class="contact_number">{{ $user->contact_number }}</td>
                                                      <td class="relation">{{ $user->relation }}</td>
                                                      <td class="guardian_bloodtype">{{ $user->guardian_bloodtype }}</td>
                                                      <td class="address">{{ $user->address }}</td>
                                                      <td class="text-center">
                                                        
                                                      <form action="{{ route('user.edit', $user->id)}}" method="GET">  
                                                          @csrf  
                                                          
                                                          <button class="badge bg-success" type="submit"><i class="la la-pencil-square"></i></button>  
                                                      </form>  

                                                      
                                                      <form action="{{ route('admin.student-destroy', $user->id)}}" method="POST">
                                                        @method('DELETE')
                                                          @csrf  
                                                        
                                                        <button class="badge bg-danger" type="submit"> <a  onclick="return confirm('Are you sure to want to delete it?')"><i class="la la-trash"></i></a></button>  
                                                      </form>   

                                                      
                                                      </td>
                                                  </tr>
                                              @endforeach
                                            <tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection