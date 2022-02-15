@extends('layouts.admin.master')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Classes Tab</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Class Management</a></li>
                    </ol>
                </div>
            </div>

            {!! Toastr::message() !!}
            @include('partials.error')

            <div class="row">
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">All Classes List  </h4>
                                        <div>
                                            <a href="{{ route('admin.classes-master-list-export') }}" class="btn btn-secondary"><li class="la la-file"></li> Export PDF</a>
                                            <a data-toggle="modal" data-target="#add-class-modal" class="btn btn-primary">
                                                <li class="la la-plus-circle"></li>Add new Class
                                            </a>
                                        </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Class Name</th>
                                                    <th>Class Code</th>
                                                    <th>Level</th>
                                                    <th>Teacher</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($classes as $key => $class)
                                                    <tr>
                                                        <td class="id">{{ ++$key }}</td>
                                                        <td>{{ $class->class_name }}</td>
                                                        <td>{{ $class->class_code }}</td>
                                                        <td>{{ $class->level }}</td>
                                                        <td>{{ $class->getInstructor->faculty_surname  ?? 'Unassigned'  }}</td>
                                                        <td>
                                                        <div class="container overflow-hidden m-0">
                                                            <div class="row">
                                                              <div class="col-2">
                                                                <a class="btn badge bg-primary" data-toggle="modal" data-target="#ModalView{{$class->class_id}}"><i class="la la-eye"></i></a>
                                                              </div>
                                                                <div class="col-2">
                                                                    <form action="{{ route('admin.classes.edit', $class->class_id)}}" method="GET">
                                                                        @csrf
                                                                        <button class="btn badge bg-success" type="submit"><i class="la la-pencil-square"></i></button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-2">
                                                                    <form action="{{ route('admin.classes.destroy', $class->class_id)}}" method="POST">
                                                                        @method('DELETE')
                                                                        @csrf
                                                                        <button class="btn badge bg-danger" type="submit"> <a  onclick="return confirm('Learning Areas and Subjects in this class will be deleted. Are you sure to want to delete it? ')"><i class="la la-trash"></i></a></button>
                                                                    </form>
                                                                </div>
                                                            </div>

                                                            </div>
                                                        </div>
                                                            @include('admin.class-management.classes.view-modal')

                                                      </td>

                                                    </tr>
                                                @endforeach
                                            <tbody>
                                        </table>
                                    </div>

                                    {!! Form::open(['route' => 'admin.classes.store']) !!}
                                    <div class="modal fade text-left" id="add-class-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                             <div class="modal-content" style=" background-color: #F7F8FA">
                                                  <div class="modal-header" style="background-color:#FBD848;letter-spacing: 3px; color:black">
                                                       <h4 class="modal-title">Add a Class</h4>
                                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                       </button>
                                                  </div>
                                                       <div class="modal-body">
                                                        <div class="row p-3">
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                <h6><label for="name">Class Name</label></h6>
                                                                    <input type="text" class="form-control form-control-sm" name="class_name" placeholder="Class Name" value="{{ old('class_name') }}">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                <h6><label for="class_code">Class Code</label></h6>
                                                                    <input type="text" class="form-control form-control-sm" name="class_code" placeholder="Class Code" value="{{ old('class_code') }}">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <h6><label for="level">Level</label></h6>
                                                                    <select class="form-control form-control-sm" name="level" id="level">
                                                                        <option value="">Select Level</option>
                                                                        <option value="Kindergarten">Kindergarten</option>
                                                                        <option value="Nursery">Nursery</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <h6><label for="level">Instructor</label></h6>
                                                                    <select class="form-control form-control-sm" name="faculty_id" id="faculty_id">
                                                                        <option value="">Select Instructor</option>
                                                                        @foreach ($faculty as $fac)
                                                                            <option value="{{$fac -> id}}">{{ $fac -> faculty_name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <h6><label for="day_id">Day</label></h6>
                                                                    <select class="form-control form-control-sm" name="day_id" id="day_id">
                                                                        <option value="">Select Day</option>
                                                                        <option value="1">Monday</option>
                                                                        <option value="2">Tuesday</option>
                                                                        <option value="3">Wednesday</option>
                                                                        <option value="4">Thursday</option>
                                                                        <option value="5">Friday</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <h6><label for="start_time">Start Time</label></h6>
                                                                    <select class="form-control form-control-sm" name="start_time" id="start_time">
                                                                        <option value="">Select Start Time</option>
                                                                        <option value="7:00AM">7:00AM</option>
                                                                        <option value="7:30AM">7:30AM</option>
                                                                        <option value="8:00AM">8:00AM</option>
                                                                        <option value="8:30AM">8:30AM</option>
                                                                        <option value="9:00AM">9:00AM</option>
                                                                        <option value="9:30AM">9:30AM</option>
                                                                        <option value="10:00AM">10:00AM</option>
                                                                        <option value="10:30AM">10:30AM</option>
                                                                        <option value="11:00AM">11:00AM</option>
                                                                        <option value="11:30AM">11:30AM</option>
                                                                        <option value="12:00PM">12:00PM</option>
                                                                        <option value="12:30PM">12:30PM</option>
                                                                        <option value="1:00PM">1:00PM</option>
                                                                        <option value="1:30PM">1:30PM</option>
                                                                        <option value="2:00PM">2:00PM</option>
                                                                        <option value="2:30PM">2:30PM</option>
                                                                        <option value="3:00PM">3:00PM</option>
                                                                        <option value="3:30PM">3:30PM</option>
                                                                        <option value="4:00PM">4:00PM</option>
                                                                        <option value="4:30PM">4:30PM</option>
                                                                        <option value="5:00PM">5:00PM</option>
                                                                        <option value="5:30PM">5:30PM</option>
                                                                        <option value="6:00PM">6:00PM</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <h6><label for="end_time">End Time</label></h6>
                                                                    <select class="form-control form-control-sm" name="end_time" id="end_time">
                                                                        <option value="">Select Start Time</option>
                                                                        <option value="7:00AM">7:00AM</option>
                                                                        <option value="7:30AM">7:30AM</option>
                                                                        <option value="8:00AM">8:00AM</option>
                                                                        <option value="8:30AM">8:30AM</option>
                                                                        <option value="9:00AM">9:00AM</option>
                                                                        <option value="9:30AM">9:30AM</option>
                                                                        <option value="10:00AM">10:00AM</option>
                                                                        <option value="10:30AM">10:30AM</option>
                                                                        <option value="11:00AM">11:00AM</option>
                                                                        <option value="11:30AM">11:30AM</option>
                                                                        <option value="12:00PM">12:00PM</option>
                                                                        <option value="12:30PM">12:30PM</option>
                                                                        <option value="1:00PM">1:00PM</option>
                                                                        <option value="1:30PM">1:30PM</option>
                                                                        <option value="2:00PM">2:00PM</option>
                                                                        <option value="2:30PM">2:30PM</option>
                                                                        <option value="3:00PM">3:00PM</option>
                                                                        <option value="3:30PM">3:30PM</option>
                                                                        <option value="4:00PM">4:00PM</option>
                                                                        <option value="4:30PM">4:30PM</option>
                                                                        <option value="5:00PM">5:00PM</option>
                                                                        <option value="5:30PM">5:30PM</option>
                                                                        <option value="6:00PM">6:00PM</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>
                                                       </div>

                                                       <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" style="background-color: #0c223a" data-dismiss="modal">Close</button>
                                                            {!! Form::submit('Add',['class' => 'btn btn-primary']) !!}
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection