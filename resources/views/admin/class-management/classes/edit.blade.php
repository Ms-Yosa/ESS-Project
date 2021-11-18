@extends('layouts.admin.master')
@section('content')


<div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Edit Class</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="#">Class Management</a></li>
                        <li class="breadcrumb-item active"><a href="#">Subject</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Edit Class</h5>
                        </div>
                        @include('adminlte-templates::common.errors')
                        <div class="card-body">

                                {!! Form::model($classes, ['route' => ['admin.classes.update', $classes->class_id], 'method' => 'POST']) !!}

                                <div class="card-body">
                                    <div class="row">
                                        <!-- Class Name Field -->
                                        <div class="form-group col-sm-6">
                                            {!! Form::label('class_name', 'Class Name:') !!}
                                            {!! Form::text('class_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                                        </div>

                                        <!-- Class Code Field -->
                                        <div class="form-group col-sm-6">
                                            {!! Form::label('class_code', 'Class Code:') !!}
                                            {!! Form::text('class_code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                                        </div>

                                        <!-- Class Level Field -->
                                        <div class="form-group col-sm-6">
                                            {!! Form::label('class_code', 'Level:') !!}
                                            {!! Form::text('level', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ route('admin.classes') }}" class="btn btn-default">Cancel</a>
                                        {!! Form::submit('Update Class',['class' => 'btn btn-primary']) !!}
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection