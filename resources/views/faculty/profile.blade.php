@extends('layouts.faculty')
@section('title') {{'Profile'}} @endsection
@section('content')
<body class="sidebar-icon-only">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 mb-3 pt-5">
        <div class="row">
            <div class="col-md-8 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Instructor Profile</h4>
                      <form class="form-sample">
                        <p class="card-description">
                          Personal info
                        </p>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-9 col-form-label">First Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" disabled value="{{$faculty->faculty_name}}"/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-9 col-form-label">Middle Name</label>
                              <div class="col-sm-9">
                                <input type="text" disabled class="form-control" value="{{$faculty->faculty_middle_name}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-9 col-form-label">Last Name</label>
                              <div class="col-sm-9">
                                <input type="text" disabled class="form-control" value="{{$faculty->faculty_surname}}"/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-9 col-form-label">Date of Birth</label>
                              <div class="col-sm-9">
                                <input type="text" disabled class="form-control" value="{{$faculty->birth_month}} {{$faculty->birth_day}},{{$faculty->birth_year}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-sm-9 col-form-label">Blood Type</label>
                                  <div class="col-sm-9">
                                    <input type="text" disabled class="form-control" value="{{$faculty->bloodtype}}"/>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-description">
                          Contact
                        </p>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-9 col-form-label">Phone Number</label>
                              <div class="col-sm-9">
                                <input type="text" disabled class="form-control" value="{{$faculty->contact_number}}"/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-9 col-form-label">Residential Address</label>
                              <div class="col-sm-9">
                                <input type="text" disabled class="form-control" value="{{$faculty->address}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    {{-- <div class="card-body">
                      <p class="card-title">School Profile</p>
                      <div class="charts-data">
                        <div class="mt-3">
                          <p class="mb-0">Level:</p>
                          <div class="d-flex justify-content-between align-items-center mt-2">
                            <p>{{Auth::guard('web')->user()->classAssigned->level}}</p>
                          </div>
                        </div>
                        <div class="mt-3">
                            <p class="mb-0">Class:</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                              <p>{{Auth::guard('web')->user()->classAssigned->class_name}}</p>
                            </div>
                          </div>
                          <div class="mt-3">
                            <p class="mb-0">Instructor:</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                              <p>{{Auth::guard('web')->user()->classAssigned->getInstructor->faculty_name}}</p>
                            </div>
                          </div>
                      </div>
                    </div> --}}
                  </div>
                </div>
                <div class="col-md-12 stretch-card grid-margin grid-margin-md-0">
                  <div class="card data-icon-card-primary">
                    <div class="card-body">
                      <p class="card-title text-white">...</p>
                      <div class="row">
                        <div class="col-8 text-white">
                          <h3>34040</h3>
                          {{-- <p class="text-white font-weight-500 mb-0">The total number of sessions within the date range.It is calculated as the sum . </p> --}}
                        </div>
                        <div class="col-4 background-icon">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</body>
  <!-- partial -->
<!-- main-panel ends -->
@endsection