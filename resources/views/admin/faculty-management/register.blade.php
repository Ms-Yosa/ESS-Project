@extends('layouts.admin.master')
@section('content')

     
<div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Register Faculty Information</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('admin.faculty-tab') }} ">Faculties</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);"> Faculty Add</a></li>
                    </ol>
                </div>
            </div>
           
            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <form action="{{ route('admin.faculty-create')}}"  method="POST" autocomplete="off">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Personal Details</h5>
                            </div>
                            <div class="card-body">
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
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="name">Name</label></h6>
                                            <input type="text" class="form-control form-control-sm" name="name" placeholder="Enter full name" value="{{ old('name') }}">
                                            <span class="text-danger">@error('name'){{ $message }} @enderror</span><br>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="middle_name">Middle Name</label></h6>
                                            <input type="text" class="form-control form-control-sm" name="middle_name" placeholder="Enter Middle Name" value="{{ old('middle_name') }}">
                                            <span class="text-danger">@error('middle_name'){{ $message }} @enderror</span><br>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="surname">Surname</label></h6>
                                            <input type="text" class="form-control form-control-sm" name="surname" placeholder="Enter Surname" value="{{ old('surname') }}">
                                            <span class="text-danger">@error('surname'){{ $message }} @enderror</span><br>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group ">
                                        <h6> <p style="font-weight:bold">Gender</p></h6>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="Female" value="Female"  >
                                                    <h6><label class="form-check-label" for="female">Female</label></h6>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                <h6><input class="form-check-input" type="radio" name="gender" value="Male" >
                                            <h6><label class="form-check-label" for="male" >Male</label></h6>
                                                </div>
                                            <span class="text-danger">@error('gender'){{ $message }} @enderror</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="birthday">Birthday</label></h6>
                                            <input type="date" class="form-control form-control-sm" value="" name="birthday" id="birthday">
                                            <!-- <span class="text-danger">@error('email'){{ $message }} @enderror</span><br> -->
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <h6><label for="age">Age</label></h6>
                                                <input type="number" class="form-control form-control-sm" name="age" min="1" value="{{ old('age') }}">
                                                <span class="text-danger">@error('age'){{ $message }} @enderror</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="bloodtype">Bloodtype</label></h6>
                                            <select name="bloodtype" class="form-select form-control form-control-sm" aria-label="Default select example">
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
                                            <span class="text-danger">@error('bloodtype'){{ $message }} @enderror</span>
                                        </div>
                                    </div>

                                    
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                    
                                        <div class="form-group">
                                        <h6> <label for="contact_number">Contact Number</label></h6>
                                            <input type="tel" class="form-control form-control-sm" name="contact_number" placeholder="09XXXXXXXXX" pattern=[0-9]{11} value="{{ old('contact_number') }}">
                                            <span class="text-danger">@error('contact_number'){{ $message }} @enderror</span><br>
                                        </div>
                                    
                                    </div>


                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <h6><label for="address">Residential Address</label></h6> 
                                            <input type="text" class="form-control form-control-sm" name="address" placeholder="Enter your complete current address" value="{{ old('address') }}">
                                            <span class="text-danger">@error('address'){{ $message }} @enderror</span><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<!--        FACULTY DETAILS                                 -->

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Faculty Details</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="email">Email</label></h6>
                                            <input type="email" class="form-control form-control-sm" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                                            <span class="text-danger">@error('email'){{ $message }} @enderror</span><br>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="password">Password</label></h6>
                                            <input type="password" class="form-control form-control-sm" name="password" placeholder="Enter password" value="{{ old('password') }}">
                                            <span class="text-danger">@error('password'){{ $message }} @enderror</span><br>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="confirm-password">Confirm Password</label></h6>
                                            <input type="password" class="form-control form-control-sm" name="confirm-password" placeholder="Enter confirm password" value="{{ old('confirm-password') }}">
                                            <span class="text-danger">@error('confirm-password'){{ $message }} @enderror</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="class"> Class</label></h6>
                                            <select name="class" class="form-select form-control form-control-sm" aria-label="Default select example">
                                            <option selected disabled>Open this select class</option>
                                                <option value="A" >A</option>
                                                <option value="O" >O</option>
                                            </select>
                                            <!-- <span class="text-danger">@error('student_bloodtype'){{ $message }} @enderror</span> -->
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="session">Session</label></h6>
                                            <input type="text" class="form-control form-control-sm" name="adviser" placeholder="Depends on section" value="" readonly>
                                            <!-- <span class="text-danger">@error('email'){{ $message }} @enderror</span><br> -->
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-primary">Register</button>
                            <button class="btn btn-light"><a href="{{ route('admin.faculty-tab') }}" >Cancel</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection