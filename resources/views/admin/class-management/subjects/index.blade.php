@extends('layouts.admin.master')
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
                                                                <form action="{{ route('admin.subjects.destroy', $subj->id)}}" method="POST">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button class="dropdown-item" type="submit"><i class="la la-trash text-danger"></i>&nbsp;<a  onclick="return confirm('Are you sure to want to delete it?')">Delete</a></button>
                                                                </form>
                                                            </div>
                                                          </div>
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
                                                                    <form action="{{ route('admin.subjects.deleteArea', $subA->id)}}" method="POST">
                                                                        @method('DELETE')
                                                                        @csrf
                                                                        <button class="btn badge bg-danger" type="submit"> <a  onclick="return confirm('Are you sure to want to delete it?')"><i class="la la-trash"></i></a></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
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
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Create Subject Area</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                            <div class="form-group">
                                                                <h6><label for="name">Name</label></h6>
                                                                <input type="text" class="form-control form-control-sm" name="name" placeholder="Enter area name" value="{{ old('name') }}">
                                                                <span class="text-danger">@error('name'){{ $message }} @enderror</span><br>
                                                            </div>

                                                            <!-- Subject Area Field -->
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

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        {!! Form::submit('Save Subject Area',['class' => 'btn btn-primary']) !!}
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
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                <!-- Subject Name Field -->
                                                <div class="form-group col-sm-6">
                                                    {!! Form::label('subject_name', 'Subject Name:') !!}
                                                    {!! Form::text('subject_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                                                </div>

                                                <!-- Subject Area Field -->
                                                <div class="form-group col-sm-6">
                                                    {{-- {!! Form::label('subject_id', 'Subject Id:') !!}
                                                    {!! Form::number('subject_id', null, ['class' => 'form-control']) !!} --}}
                                                    <select class="form-group" name="subArea_id" id="subArea_id">
                                                        <option value="">Select Subject Area</option>
                                                        @foreach ($subArea as $subA)
                                                            <option value="{{$subA -> id}}">{{ $subA -> name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <!-- Subject Code Field -->
                                                <div class="form-group col-sm-6">
                                                    {!! Form::label('subject_code', 'Subject Code:') !!}
                                                    {!! Form::text('subject_code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                                                </div>

                                                <!-- Description Field -->
                                                <div class="form-group col-sm-12 col-lg-12">
                                                    {!! Form::label('description', 'Description:') !!}
                                                    {!! Form::textarea('description', null, ['class' => 'form-control', 'cols' => 40, 'rows' => 2]) !!}
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
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        {!! Form::submit('Save Subject',['class' => 'btn btn-primary']) !!}
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

