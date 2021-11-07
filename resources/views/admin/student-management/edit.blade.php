@extends('layouts.admin.master')
@section('content')

     
<div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Update Student Information</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('admin.student-tab') }} ">Students</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Student Update</a></li>
                    </ol>
                </div>
            </div>
           
            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <form action="{{ route('user.update', $user->id)}}" method="POST" autocomplete="off">
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
                                @method('PUT')

                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="name">Name</label></h6>
                                            <input type="text" class="form-control form-control-sm" name="name" placeholder="Enter full name" value="{{ $user->name}}">
                                            <span class="text-danger">@error('name'){{ $message }} @enderror</span><br>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="middle_name">Middle Name</label></h6>
                                            <input type="text" class="form-control form-control-sm" name="middle_name" placeholder="Enter Middle Name" value="">
                                            <!-- <span class="text-danger">@error('email'){{ $message }} @enderror</span><br> -->
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="surname">Surname</label></h6>
                                            <input type="text" class="form-control form-control-sm" name="surname" placeholder="Enter Surname" value="">
                                            <!-- <span class="text-danger">@error('email'){{ $message }} @enderror</span><br> -->
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group ">
                                        <h6> <p style="font-weight:bold">Gender</p></h6>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="Female" value="Female" {{ ($user->gender=="Female")? "checked" : "" }}  >
                                                    <h6><label class="form-check-label" for="female">Female</label></h6>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                <h6><input class="form-check-input" type="radio" name="gender" value="Male" {{ ($user->gender=="Male")? "checked" : "" }}>
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
                                                <input type="number" class="form-control form-control-sm" name="age" min="1" value="{{ $user->age }}">
                                                <span class="text-danger">@error(''){{ $message }} @enderror</span>
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                        <h6> <label for="religion">Religion</label></h6>
                                            <input type="text" class="form-control form-control-sm" name="religion" value="{{ $user->religion }}">
                                            <span class="text-danger">@error('religion'){{ $message }} @enderror</span>
                                        </div>
                                    </div>

                                    

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="bloodtype"> Student Bloodtype</label></h6>
                                            <select name="student_bloodtype" class="form-select form-control form-control-sm" aria-label="Default select example">
                                            <option value="{{$user->student_bloodtype}}" {{ ($user->student_bloodtype ==$user->student_bloodtype) ? 'selected' : '' }}> 
                                                {{ $user->student_bloodtype }}
                                                </option>                                                <option value="A+" >A+</option>
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

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="guardian">Guardian's Name</label></h6>
                                            <input type="text" class="form-control form-control-sm" name="guardian" placeholder="Enter full name" value="{{ $user->guardian }}">
                                            <span class="text-danger">@error('guardian'){{ $message }} @enderror</span><br>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <h6><label for="relation">Relation to student</label></h6>
                                            <input type="text" class="form-control form-control-sm" name="relation" placeholder="Enter your relation" value="{{ $user->relation }}">
                                            <span class="text-danger">@error('relation'){{ $message }} @enderror</span><br>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                    
                                        <div class="form-group">
                                        <h6> <label for="contact_number">Guardian's Contact Number</label></h6>
                                            <input type="tel" class="form-control form-control-sm" name="contact_number" placeholder="09XXXXXXXXX" pattern=[0-9]{11} value="{{ $user->contact_number }}">
                                            <span class="text-danger">@error('contact_number'){{ $message }} @enderror</span><br>
                                        </div>
                                    
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="guardian_bloodtype">Bloodtype</label></h6>  
                                            <select name="guardian_bloodtype" class="form-select form-control form-control-sm" aria-label="Default select example">
                                            <option value="{{$user->guardian_bloodtype}}" {{ ($user->guardian_bloodtype ==$user->guardian_bloodtype) ? 'selected' : '' }}> 
                                                {{ $user->guardian_bloodtype }}
                                                </option>                                                <option value="A+">A+</option>
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
                                            <h6><label for="address">Residential Address</label></h6> 
                                            <input type="text" class="form-control form-control-sm" name="address" placeholder="Enter your complete current address" value="{{ $user->address }}">
                                            <span class="text-danger">@error('address'){{ $message }} @enderror</span><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<!--        STUDENT DETAILS                                 -->

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Student Details</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="email">Email</label></h6>
                                            <input type="email" class="form-control form-control-sm" name="email" placeholder="Enter email address" value="{{ $user->email }}">
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
                                        <h6><label for="adviser">Adviser</label></h6>
                                            <input type="text" class="form-control form-control-sm" name="adviser" placeholder="Depends on section" value="" readonly>
                                            
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="session">Session</label></h6>
                                            <input type="text" class="form-control form-control-sm" name="adviser" placeholder="Depends on section" value="" readonly>
                                            
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                        <button class="btn btn-light"><a href="{{ route('admin.student-tab') }}" >Cancel</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection