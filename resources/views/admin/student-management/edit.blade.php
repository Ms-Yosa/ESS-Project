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
                    <form action="{{ route('admin.student-update', $user->id)}}" method="POST" autocomplete="off">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Personal Details</h5>
                            </div>
                            <div class="card-body">
                                <!-- @if (Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                @if (Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('fail') }}
                                    </div>
                                @endif -->

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
                                            <input type="text" class="form-control form-control-sm" name="middle_name" placeholder="Enter Middle Name" value="{{ $user->middle_name}}">
                                            <span class="text-danger">@error('middle_name'){{ $message }} @enderror</span><br>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="surname">Surname</label></h6>
                                            <input type="text" class="form-control form-control-sm" name="surname" placeholder="Enter Surname" value="{{ $user->surname}}">
                                            <span class="text-danger">@error('surname'){{ $message }} @enderror</span><br>
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
                                        <h6><label for="birth_year">Birth Year</label></h6>
                                            <select name="birth_year" class="form-select form-control form-control-sm" aria-label="Default select example">
                                            <option value="{{$user->birth_year}}" {{ ($user->birth_year ==$user->birth_year) ? 'selected' : '' }}> 
                                                {{ $user->birth_year }}
                                                </option>
                                                <option value="2019" >2019</option>
                                                <option value="2018" >2018</option>
                                                <option value="2021" >2017</option>
                                                <option value="2017" >2016</option>
                                                <option value="2015" >2015</option>
                                                <option value="2014" >2014</option>
                                                <option value="2013" >2013</option>
                                                <option value="2012" >2012</option>
                                                <option value="2011" >2011</option>
                                                <option value="2010" >2010</option>
                                            </select>
                                            <span class="text-danger">@error('birth_year'){{ $message }} @enderror</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="birth_month">Month</label></h6>
                                            <select name="birth_month" class="form-select form-control form-control-sm" aria-label="Default select example">
                                            <option value="{{$user->birth_month}}" {{ ($user->birth_month ==$user->birth_month) ? 'selected' : '' }}> 
                                                {{ $user->birth_month }}
                                                </option>
                                                <option value="January" >January</option>
                                                <option value="February" >February</option>
                                                <option value="March" >March</option>
                                                <option value="April" >April</option>
                                                <option value="May" >May</option>
                                                <option value="June" >June</option>
                                                <option value="July" >July</option>
                                                <option value="August" >August</option>
                                                <option value="September" >September</option>
                                                <option value="October" >October</option>
                                                <option value="November" >November</option>
                                                <option value="December" >December</option>
                                            </select>
                                            <span class="text-danger">@error('birth_month'){{ $message }} @enderror</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="birth_day">Day</label></h6>
                                            <select name="birth_day" class="form-select form-control form-control-sm" aria-label="Default select example">
                                            <option value="{{$user->birth_day}}" {{ ($user->birth_day ==$user->birth_day) ? 'selected' : '' }}> 
                                                {{ $user->birth_day }}
                                                </option>
                                                <option value="1" >1</option>
                                                <option value="2" >2</option>
                                                <option value="3" >3</option>
                                                <option value="4" >4</option>
                                                <option value="5" >5</option>
                                                <option value="6" >6</option>
                                                <option value="7" >7</option>
                                                <option value="8" >8</option>
                                                <option value="9" >9</option>
                                                <option value="10" >10</option>
                                                <option value="11" >11</option>
                                                <option value="12" >12</option>
                                                <option value="13" >13</option>
                                                <option value="14" >14</option>
                                                <option value="15" >15</option>
                                                <option value="16" >16</option>
                                                <option value="17" >17</option>
                                                <option value="18" >18</option>
                                                <option value="19" >19</option>
                                                <option value="20" >20</option>
                                                <option value="21" >21</option>
                                                <option value="22" >22</option>
                                                <option value="23" >23</option>
                                                <option value="24" >24</option>
                                                <option value="25" >25</option>
                                                <option value="26" >26</option>
                                                <option value="27" >27</option>
                                                <option value="28" >28</option>
                                                <option value="29" >29</option>
                                                <option value="30" >30</option>
                                                <option value="31" >31</option>
                                            </select>
                                            <span class="text-danger">@error('birth_day'){{ $message }} @enderror</span>
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
                                        <h6><label for="guardian_middle_name">Guardian's Middle Name</label></h6>
                                            <input type="text" class="form-control form-control-sm" name="guardian_middle_name" placeholder="Enter Middle Name" value="{{ $user->guardian_middle_name }}">
                                            <span class="text-danger">@error('guardian_middle_name'){{ $message }} @enderror</span><br>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="guardian_surname">Guardian's Surname</label></h6>
                                            <input type="text" class="form-control form-control-sm" name="guardian_surname" placeholder="Enter Surname" value="{{ $user->guardian_surname }}">
                                            <span class="text-danger">@error('guardian_surname'){{ $message }} @enderror</span><br>
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