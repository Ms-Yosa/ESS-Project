@extends('layouts.admin.master')
@section('title') {{'Subjects'}} @endsection
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Subjects Tab</h4>
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
                                    <h4 class="card-title">All Subject Areas List  </h4>
                                    <div>
                                        <a href="{{ route('admin.learning-area-master-list-export') }}" class="btn btn-dark">
                                            <li class="la la-file"></li> Export PDF
                                        </a>
                                        <a data-toggle="modal" data-target="#add-subArea-modal" class="btn btn-primary">
                                            <li class="la la-plus-circle"></li>  Create Subject Area
                                        </a>
                                        <a data-toggle="modal" data-target="#add-subject-modal" class="btn btn-secondary">
                                            <li class="la la-plus-circle"></li>  Add Subject
                                        </a>
                                    </div>
                                </div>

                                <!-- table display -->
                                <div class="card-body">
                                    <div class="table-responsive" id="subjects-table">
                                        <table class="display" id="example3" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Area</th>
                                                    <th>Class</th>
                                                    <th>Subject</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($subArea as $key => $subA)
                                                <tr>
                                                    <td class="id">{{ ++$key }}</td>
                                                    <td>{{ $subA->name }}</td>
                                                    <td>{{ $subA->class->class_name ?? 'Unassigned'  }}</td>
                                                    <td>
                                                        @foreach ($subA->subjects as $subj)
                                                        <div class="dropdown">
                                                            {{ $subj->subject_name ?? 'None'}}
                                                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <form action="{{ route('admin.subjects.edit', $subj->id)}}" method="GET">
                                                                    @csrf
                                                                    <button class="dropdown-item" type="submit"><i class="la la-pencil-square text-success"></i>&nbsp;Edit</button>
                                                                </form>
                                                                <button class="dropdown-item " data-toggle="modal" data-target="#DeleteSubj{{$subj->id}}"><i class="la la-trash text-danger"></i>&nbsp;Delete</button>
                                                            </div>
                                                        </div>
                                                          @include('admin.class-management.subjects.delete-modal')
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        <div class="container overflow-hidden m-0">
                                                            <div class="row ">
                                                                <div class="col-2">
                                                                    <form action="{{ route('admin.subjects.editArea', $subA->id)}}" method="GET">
                                                                        @csrf
                                                                        <button class="btn badge bg-success" type="submit"><i class="la la-pencil-square"></i></button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-2">
                                                                    <button class="btn badge bg-danger" data-toggle="modal" data-target="#Delete{{$subA->id}}"><i class="la la-trash"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    @include('admin.class-management.subjects.delete-modal')
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                {!! Form::open(['route' => 'admin.subjects.createArea']) !!}
                                        <!-- Modal -->
                                        <div class="modal fade" id="add-subArea-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color:#FBD848;letter-spacing: 3px; color:black">
                                                        <h4 class="modal-title">Add a Learning Area</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                             <span aria-hidden="true">&times;</span>
                                                        </button>
                                                   </div>
                                                    <div class="modal-body">
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div class="form-group">
                                                            <h6><label for="name">Learning Area Name</label></h6>
                                                                <input type="text" class="form-control form-control-sm" name="name" placeholder="Enter area name" value="{{ old('name') }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div class="form-group">
                                                                <h6><label for="name">Assign to Class</label></h6>
                                                                <select class="form-control form-control-sm" name="class_id" id="class_id">
                                                                    <option value="">Select Class</option>
                                                                    @foreach ($class as $cla)
                                                                        <option value="{{$cla -> class_id}}">{{ $cla -> class_name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        {!! Form::submit('Add Learning Area',['class' => 'btn btn-primary']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {!! Form::close() !!}

                                    {!! Form::open(['route' => 'admin.subjects.store']) !!}
                                        <!-- Modal -->
                                        <div class="modal fade" id="add-subject-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color:#FBD848;letter-spacing: 3px; color:black">
                                                    <h4 class="modal-title">Add a Subject</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                         <span aria-hidden="true">&times;</span>
                                                    </button>
                                               </div>
                                                <div class="modal-body">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                        <h6><label for="subject_name">Subject Name</label></h6>
                                                            <input type="text" class="form-control form-control-sm" name="subject_name" placeholder="Enter area name" value="{{ old('subject_name') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                        <h6><label for="subject_code">Subject Code</label></h6>
                                                            <input type="text" class="form-control form-control-sm" name="subject_code" placeholder="Enter area name" value="{{ old('subject_code') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <h6><label for="subject_name">Assign to Learning Area</label></h6>
                                                            <select class="form-control form-control-sm" name="subArea_id" id="subArea_id">
                                                                <option value="">Select Subject Area</option>
                                                                @foreach ($subArea as $subA)
                                                                    <option value="{{$subA -> id}}">{{ $subA -> name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <h6><label for="description">Description</label></h6>
                                                            <textarea class="form-control form-control-sm" name="description" id="description">
                                                            </textarea>
                                                        </div>
                                                    </div>

                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        {!! Form::submit('Add Subject',['class' => 'btn btn-primary']) !!}
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
@endsection

