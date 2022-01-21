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

            <div class="row">
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            <div class="card">

                                @include('flash::message')
                                @include('adminlte-templates::common.errors')

                                <div class="card-header">
                                    <h4 class="card-title">All Classes List  </h4>
                                        <a data-toggle="modal" data-target="#add-class-modal" class="btn btn-primary">
                                            <li class="la la-plus-circle"></li>Add new Class
                                        </a>
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
                                                @foreach($tableJoin as $key => $class)
                                                    <tr>
                                                        <td class="id">{{ ++$key }}</td>
                                                        <td>{{ $class->class_name }}</td>
                                                        <td>{{ $class->class_code }}</td>
                                                        <td>{{ $class->level }}</td>
                                                        <td>{{$class->faculty_name}}</td>
                                                        <td>
                                                            <div class="row">
                                                                <a class="btn badge bg-primary" data-toggle="modal" data-target="#ModalView{{$class->class_id}}"><i class="la la-eye"></i></a>

                                                                <form action="{{ route('admin.classes.destroy', $class->class_id)}}" method="GET">
                                                                    @csrf

                                                                    <button class="badge bg-success" type="submit"><i class="la la-pencil-square"></i></button>
                                                                </form>

                                                                <form action="{{ route('admin.classes.edit', $class->class_id)}}" method="POST">
                                                                    @method('DELETE')
                                                                    @csrf

                                                                    <button class="badge bg-danger" type="submit"> <a  onclick="return confirm('Are you sure to want to delete it?')"><i class="la la-trash"></i></a></button>
                                                                </form>
                                                            </div>
                                                            @include('admin.class-management.classes.view-modal')
                                                      </td>

                                                    </tr>
                                                @endforeach
                                            <tbody>
                                        </table>
                                    </div>

                                    {!! Form::open(['route' => 'admin.classes.store']) !!}
                                        <!-- Modal -->
                                        <div class="modal fade" id="add-class-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Add New Class</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @include('admin.class-management.classes.fields')
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        {!! Form::submit('Save Class',['class' => 'btn btn-primary']) !!}
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