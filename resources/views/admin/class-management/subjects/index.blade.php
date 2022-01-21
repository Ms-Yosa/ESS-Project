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

            <div class="row">
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            <div class="card">
                              @include('flash::message')
                              @include('adminlte-templates::common.errors')
                                <div class="card-header">
                                    <h4 class="card-title">All Subjects List  </h4>
                                    <a data-toggle="modal" data-target="#add-subject-modal" class="btn btn-primary">
                                        <li class="la la-plus-circle"></li>  Add new Subject
                                    </a>
                                </div>

                                <!-- table display -->
                                <div class="card-body">
                                    <div class="table-responsive" id="subjects-table">
                                        <table class="display" id="example3" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Code</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                                    <th colspan="3">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($subjects as $key => $subject)
                                                <tr>
                                                    <td class="id">{{ ++$key }}</td>
                                                    <td>{{ $subject->subject_name }}</td>
                                                    <td>{{ $subject->subject_code }}</td>
                                                    <td>{{ $subject->description }}</td>
                                                    <td>
                                                        @if($subject->status == 1)
                                                            <span>Active</span>
                                                        @else
                                                            <span>Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td width="120">
                                                        {!! Form::open(['route' => ['admin.subjects.destroy', $subject->subject_id], 'method' => 'get']) !!}
                                                        <div class='btn-group'>
                                                            <a href="{{ route('admin.subjects.edit', [$subject->subject_id]) }}"
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
    </div>
@endsection

