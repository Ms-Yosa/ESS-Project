@extends('layouts.admin.master')
{{-- @section('menu')
@extends('partials.admin.sidebar')
@endsection --}}
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
                        <h4>Register Student Information</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0); ">Students</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Student Add</a></li>
                    </ol>
                </div>
            </div>
           
            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Basic Info</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('user.create')}}"  method="POST" autocomplete="off">
                                @if (Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                @if (Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('fail') }}
                                    </div>
                                @endif

                                @csrf
                               

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ old('name') }}">
                                            <span class="text-danger">@error('name'){{ $message }} @enderror</span><br>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="surname">Surname</label>
                                            <input type="text" class="form-control" name="surname" placeholder="Enter Surname" value="">
                                            <!-- <span class="text-danger">@error('email'){{ $message }} @enderror</span><br> -->
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                                            <span class="text-danger">@error('email'){{ $message }} @enderror</span><br>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="email">Birthday</label>
                                            <input type="text" class="datepicker-default form-control" value="{{ old('dateOfBirth') }}" name="birthday" id="birthday">
                                            <!-- <span class="text-danger">@error('email'){{ $message }} @enderror</span><br> -->
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                                            <span class="text-danger">@error('password'){{ $message }} @enderror</span><br>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="confirm-password">Confirm Password</label>
                                            <input type="password" class="form-control" name="confirm-password" placeholder="Enter confirm password" value="{{ old('confirm-password') }}">
                                            <span class="text-danger">@error('confirm-password'){{ $message }} @enderror</span>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="age">Age</label>
                                                <input type="number" class="form-control" name="age" min="1" value="{{ old('age') }}">
                                                <span class="text-danger">@error(''){{ $message }} @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group ">
                                            <p>Gender</p>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="Female" value="Female"  >
                                                    <label class="form-check-label" for="female">Female</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" value="Male" >
                                                    <label class="form-check-label" for="male" >Male</label>
                                                </div>
                                            <span class="text-danger">@error('gender'){{ $message }} @enderror</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="religion">Religion</label>
                                            <input type="text" class="form-control" name="religion" value="{{ old('religion') }}">
                                            <span class="text-danger">@error('religion'){{ $message }} @enderror</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="bloodtype">Bloodtype</label>
                                            <select name="student_bloodtype" class="form-select" aria-label="Default select example">
                                            <option selected disabled>Open this select menu</option>
                                                <option value="A+" >A+</option>
                                                <option value="O+" >O+</option>
                                                <option value="B+" >B+</option>
                                                <option value="AB+" >AB+</option>
                                                <option value="A-" >A-</option>
                                                <option value="O-" >O-</option>
                                                <option value="B-">B-</option>
                                                <option value="AB-" >AB-</option>
                                                <option value="Unknown" >Unknown</option>
                                            </select>
                                            <span class="text-danger">@error('student_bloodtype'){{ $message }} @enderror</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="guardian">Guardian's Name</label>
                                            <input type="text" class="form-control" name="guardian" placeholder="Enter full name" value="{{ old('guardian') }}">
                                            <span class="text-danger">@error('guardian'){{ $message }} @enderror</span><br>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="relation">Relation to student</label>
                                            <input type="text" class="form-control" name="relation" placeholder="Enter your relation" value="{{ old('relation') }}">
                                            <span class="text-danger">@error('relation'){{ $message }} @enderror</span><br>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                       
                                        <div class="form-group">
                                            <label for="contact_number">Guardian's Contact Number</label>
                                            <input type="tel" class="form-control" name="contact_number" placeholder="09XXXXXXXXX" pattern=[0-9]{11} value="{{ old('contact_number') }}">
                                            <span class="text-danger">@error('contact_number'){{ $message }} @enderror</span><br>
                                         </div>
                                    
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="guardian_bloodtype">Bloodtype</label>
                                            <select name="guardian_bloodtype" class="form-select" aria-label="Default select example">
                                            <option selected disabled>Open this select menu</option>
                                                <option value="A+">A+</option>
                                                <option value="O+">O+</option>
                                                <option value="B+">B+</option>
                                                <option value="AB+">AB+</option>
                                                <option value="A-">A-</option>
                                                <option value="O-">O-</option>
                                                <option value="B-">B-</option>
                                                <option value="AB-">AB-</option>
                                                <option value="Unknown">Unknown</option>
                                            </select>
                                            <span class="text-danger">@error('guardian_bloodtype'){{ $message }} @enderror</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="address">Residential Address</label>
                                            <input type="text" class="form-control" name="address" placeholder="Enter your complete current address" value="{{ old('address') }}">
                                            <span class="text-danger">@error('address'){{ $message }} @enderror</span><br>
                                        </div>

                                    </div>

                                    
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                         <button type="submit" class="btn btn-primary">Register</button>
                                         <button class="btn btn-light"><a href="{{ route('admin.student-tab') }}" >Cancel</a></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection