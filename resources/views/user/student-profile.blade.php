@extends('layouts.student')
@section('content')
<body class="sidebar-icon-only">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 mb-3 pt-5">
        <div class="row">
            <div class="col-md-8 stretch-card grid-margin">
                <div class="card" style="border:1px solid black">
                    <div class="card-body" >
                      <h4 class="card-title">Student Profile</h4>
                      <form class="form-sample">
                        <p class="card-description">
                          Personal info
                        </p>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-9 col-form-label">First Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" disabled value="{{ Auth::guard('web')->user()->name }}"/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-9 col-form-label">Middle Name</label>
                              <div class="col-sm-9">
                                <input type="text" disabled class="form-control" value="{{ Auth::guard('web')->user()->middle_name }}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-9 col-form-label">Last Name</label>
                              <div class="col-sm-9">
                                <input type="text" disabled class="form-control" value="{{ Auth::guard('web')->user()->surname }}"/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-9 col-form-label">Date of Birth</label>
                              <div class="col-sm-9">
                                <input type="text" disabled class="form-control" value="{{ Auth::guard('web')->user()->birth_month }} {{ Auth::guard('web')->user()->birth_day }},{{ Auth::guard('web')->user()->birth_year }}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-sm-9 col-form-label">Religion</label>
                                  <div class="col-sm-9">
                                    <input type="text" class="form-control" disabled value="{{ Auth::guard('web')->user()->religion }}"/>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-sm-9 col-form-label">Blood Type</label>
                                  <div class="col-sm-9">
                                    <input type="text" disabled class="form-control" value="{{ Auth::guard('web')->user()->student_bloodtype }}"/>
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
                                <input type="text" disabled class="form-control" value="{{ Auth::guard('web')->user()->contact_number }}"/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-9 col-form-label">Guardian's Name</label>
                              <div class="col-sm-9">
                                <input type="text" disabled class="form-control" value="{{ Auth::guard('web')->user()->guardian }}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-9 col-form-label">Relation to Student</label>
                              <div class="col-sm-9">
                                <input type="text" disabled class="form-control" value="{{ Auth::guard('web')->user()->relation }}"/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-9 col-form-label">Residential Address</label>
                              <div class="col-sm-9">
                                <input type="text" disabled class="form-control" value="{{ Auth::guard('web')->user()->address }}"/>
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
                  <div class="card" style="border:1px solid #dfc326">
                    <div class="card-body" >
                      <p class="card-title" >School Profile</p>
                      <div class="charts-data" style="border-top:1px solid black">
                          <div class="mt-3">
                            <p class="mb-0">Level:</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                              <p>{{Auth::guard('web')->user()->classAssigned->level}}</p>
                            </div>
                          </div>
                          <div class="mt-3">
                            <p class="mb-0" >Class:</p>
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
                    </div>
                  </div>
                </div>


                <div class="col-md-12 stretch-card grid-margin grid-margin-md-0">
                  <div class="card data-icon-card" style="background-color:#dfc326" > 
                    <div class="card-body">
                      <p class="card-title ">...</p>
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