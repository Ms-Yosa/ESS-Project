@extends('layouts.admin.master')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Class Schedule Tab</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Class Management</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            <div class="card">
                              @include('flash::message')
                              @include('adminlte-templates::common.errors')
                                <div class="card-header">
                                    <h4 class="card-title">All Schedule List  </h4>
                                    <a data-toggle="modal" data-target="#add-schedule-modal" class="btn btn-primary">
                                        <li class="la la-plus-circle"></li>  Add new schedule
                                    </a>
                                </div>

                                <!-- table display -->
                                <div class="card-body">
                                    <div class="table-responsive" id="subjects-table">
                                        <table class="display" id="example3" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>Class</th>
                                                    <th>Subject</th>
                                                    <th>Day</th>
                                                    <th>Start Time</th>
                                                    <th>End Time</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($classSchedule as $classScheduling)
                                                <tr>
                                                    <td>{{ $classScheduling->class_name }}</td>
                                                    <td>{{ $classScheduling->subject_name }}</td>
                                                    <td>
                                                        @switch($classScheduling->day_id)
                                                            @case('1')
                                                                <span>Monday</span>
                                                                @break

                                                            @case('2')
                                                                <span>Tuesday</span>
                                                                @break

                                                            @case('3')
                                                                <span>Wednesday</span>
                                                                @break

                                                            @case('4')
                                                                <span>Thursday</span>
                                                                @break

                                                            @case('5')
                                                                <span>Friday</span>
                                                            @break

                                                            @default
                                                                <span></span>
                                                        @endswitch
                                                    </td>
                                                    <td>{{ $classScheduling->start_time }}</td>
                                                    <td>{{ $classScheduling->end_time }}</td>
                                                    <td>
                                                        @if($classScheduling->status == 1)
                                                            <span>Active</span>
                                                        @else
                                                            <span>Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td width="120">
                                                        {!! Form::open(['route' => ['admin.classSchedulings.destroy', $classScheduling->schedule_id], 'method' => 'get']) !!}
                                                        <div class='btn-group'>
                                                            <a href="{{ route('admin.classSchedulings.edit', [$classScheduling->schedule_id]) }}"
                                                               class='btn badge bg-success'>
                                                               <i class="la la-pencil-square"></i>
                                                            </a>
                                                            {!! Form::button('<i class="la la-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                                        </div>
                                                        {!! Form::close() !!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    {{-- fields require --}}
                                    {!! Form::open(['route' => 'admin.classSchedulings.store']) !!}
                                        <!-- Modal -->
                                        <div class="modal fade" id="add-schedule-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">

                                                            <!-- Class Id Field -->
                                                            <div class="form-group col-sm-6">
                                                                {{-- {!! Form::label('subject_id', 'Subject Id:') !!}
                                                                {!! Form::number('subject_id', null, ['class' => 'form-control']) !!} --}}
                                                                <select class="form-group" name="class_id" id="class_id">
                                                                    <option value="">Select Class</option>
                                                                    @foreach ($class as $cla)
                                                                        <option value="{{$cla -> class_id}}">{{ $cla -> class_name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <!-- Subject Id Field -->
                                                            <div class="form-group col-sm-6">
                                                                {{-- {!! Form::label('subject_id', 'Subject Id:') !!}
                                                                {!! Form::number('subject_id', null, ['class' => 'form-control']) !!} --}}
                                                                <select class="form-group" name="subject_id" id="subject_id">
                                                                    <option value="">Select Subject</option>
                                                                    @foreach ($subject as $subj)
                                                                        <option value="{{$subj -> subject_id}}">{{ $subj -> subject_name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <!-- Day Id Field -->
                                                            <div class="form-group col-sm-6">
                                                                {{-- {!! Form::label('day_id', 'Day Id:') !!}
                                                                {!! Form::number('day_id', null, ['class' => 'form-control']) !!} --}}
                                                                <select class="form-group" name="day_id" id="day_id">
                                                                    <option value="">Select Day</option>
                                                                    <option value="1">Monday</option>
                                                                    <option value="2">Tuesday</option>
                                                                    <option value="3">Wednesday</option>
                                                                    <option value="4">Thursday</option>
                                                                    <option value="5">Friday</option>
                                                                </select>
                                                            </div>

                                                            <!-- Start Time Field -->
                                                            <div class="form-group col-sm-6">
                                                                {{-- {!! Form::label('start_time', 'Start Time:') !!}
                                                                {!! Form::number('start_time', null, ['class' => 'form-control']) !!} --}}
                                                                <select class="form-group" name="start_time" id="start_time">
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

                                                            <!-- End Time Field -->
                                                            <div class="form-group col-sm-6">
                                                                {{-- {!! Form::label('end_time', 'End Time:') !!}
                                                                {!! Form::number('end_time', null, ['class' => 'form-control']) !!} --}}
                                                                <select class="form-group" name="end_time" id="end_time">
                                                                    <option value="">Select End Time</option>
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

                                                            <!-- Status Field -->
                                                            <div class="form-group col-sm-6">
                                                                <div class="form-check">
                                                                    {!! Form::hidden('status', 0, ['class' => 'form-check-input']) !!}
                                                                    {!! Form::checkbox('status', '1', null, ['class' => 'form-check-input']) !!}
                                                                    {!! Form::label('status', 'Status', ['class' => 'form-check-label']) !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        {!! Form::submit('Save Schedule',['class' => 'btn btn-primary']) !!}
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

