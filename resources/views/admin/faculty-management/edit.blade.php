@extends('layouts.admin.master')
@section('content')

     
<div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Update Faculty Information</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('admin.faculty-tab') }} ">Faculties</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);"> Faculty Update</a></li>
                    </ol>
                </div>
            </div>
           
            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <form action="{{ route('admin.faculty-update', $faculty->id)}}"  method="POST" autocomplete="off">
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
                                        <h6><label for="faculty_name">Name</label></h6>
                                            <input type="text" class="form-control form-control-sm" name="faculty_name" placeholder="Enter full name" value="{{ $faculty->faculty_name}}">
                                            <span class="text-danger">@error('faculty_name'){{ $message }} @enderror</span><br>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="faculty_middle_name">Middle Name</label></h6>
                                            <input type="text" class="form-control form-control-sm" name="faculty_middle_name" placeholder="Enter Middle Name" value="{{ $faculty->faculty_middle_name}}">
                                            <span class="text-danger">@error('faculty_middle_name'){{ $message }} @enderror</span><br>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="faculty_surname">Surname</label></h6>
                                            <input type="text" class="form-control form-control-sm" name="faculty_surname" placeholder="Enter Surname" value="{{ $faculty->faculty_surname}}">
                                            <span class="text-danger">@error('faculty_surname'){{ $message }} @enderror</span><br>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group ">
                                        <h6> <p style="font-weight:bold">Gender</p></h6>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="Female" value="Female" {{ ($faculty->gender=="Female")? "checked" : "" }}   >
                                                    <h6><label class="form-check-label" for="female">Female</label></h6>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                <h6><input class="form-check-input" type="radio" name="gender" value="Male" {{ ($faculty->gender=="Male")? "checked" : "" }}>
                                            <h6><label class="form-check-label" for="male" >Male</label></h6>
                                                </div>
                                            <span class="text-danger">@error('gender'){{ $message }} @enderror</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="birth_year">Birth Year</label></h6>
                                            <select name="birth_year" class="form-select form-control form-control-sm" aria-label="Default select example">
                                            <option value="{{$faculty->birth_year}}" {{ ($faculty->birth_year ==$faculty->birth_year) ? 'selected' : '' }}> 
                                                {{ $faculty->birth_year }}
                                                </option>
                                                <option value="1999" >1999</option>
                                                <option value="1998" >1998</option>
                                                <option value="1997" >1997</option>
                                                <option value="1996" >1996</option>
                                                <option value="1995" >1995</option>
                                                <option value="1994" >1994</option>
                                                <option value="1993" >1993</option>
                                                <option value="1992" >1992</option>
                                                <option value="1991" >1991</option>
                                                <option value="1990" >1990</option>
                                                <option value="1989" >1989</option>
                                                <option value="1988" >1988</option>
                                                <option value="1987" >1987</option>
                                                <option value="1986" >1986</option>
                                                <option value="1985" >1985</option>
                                                <option value="1984" >1984</option>
                                                <option value="1983" >1983</option>
                                                <option value="1982" >1982</option>
                                                <option value="1981" >1981</option>
                                                <option value="1980" >1980</option>
                                                <option value="1979" >1979</option>
                                                <option value="1978" >1978</option>
                                                <option value="1977" >1977</option>
                                                <option value="1976" >1976</option>
                                                <option value="1975" >1975</option>
                                                <option value="1974" >1974</option>
                                            </select>
                                            <span class="text-danger">@error('birth_year'){{ $message }} @enderror</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="birth_month">Month</label></h6>
                                            <select name="birth_month" class="form-select form-control form-control-sm" aria-label="Default select example">
                                            <option value="{{$faculty->birth_month}}" {{ ($faculty->birth_month ==$faculty->birth_month) ? 'selected' : '' }}> 
                                                {{ $faculty->birth_month }}
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
                                            <option value="{{$faculty->birth_day}}" {{ ($faculty->birth_day ==$faculty->birth_day) ? 'selected' : '' }}> 
                                                {{ $faculty->birth_day }}
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
                                                <input type="number" class="form-control form-control-sm" name="age" min="1" value="{{ $faculty->age}}">
                                                <span class="text-danger">@error('age'){{ $message }} @enderror</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                        <h6><label for="bloodtype">Bloodtype</label></h6>
                                            <select name="bloodtype" class="form-select form-control form-control-sm" aria-label="Default select example">
                                            <option value="{{$faculty->bloodtype}}" {{ ($faculty->bloodtype ==$faculty->bloodtype) ? 'selected' : '' }}> 
                                                {{ $faculty->bloodtype }}
                                                </option>
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
                                            <input type="tel" class="form-control form-control-sm" name="contact_number" placeholder="09XXXXXXXXX" pattern=[0-9]{11} value="{{ $faculty->contact_number}}">
                                            <span class="text-danger">@error('contact_number'){{ $message }} @enderror</span><br>
                                        </div>
                                    
                                    </div>


                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <h6><label for="address">Residential Address</label></h6> 
                                            <input type="text" class="form-control form-control-sm" name="address" placeholder="Enter your complete current address" value="{{ $faculty->address}}">
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
                                            <input type="email" class="form-control form-control-sm" name="email" placeholder="Enter email address" value="{{ $faculty->email}}">
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
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button class="btn btn-light"><a href="{{ route('admin.faculty-tab') }}" >Cancel</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection