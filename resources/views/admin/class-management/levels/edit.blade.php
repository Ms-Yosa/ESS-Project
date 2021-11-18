@extends('layouts.admin.master')
@section('content')

     
<div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Edit Level</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="#">Class Management</a></li>
                        <li class="breadcrumb-item active"><a href="#">Level</a></li>
                    </ol>
                </div>
            </div>
           
            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Edit Level</h5>
                        </div>
                        @include('adminlte-templates::common.errors')
                        <div class="card-body">

                                {!! Form::model($level, ['route' => ['levels.update', $level->id], 'method' => 'patch']) !!}
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Level Field -->
                                    <div class="form-group col-sm-6">
                                        {!! Form::label('level', 'Level:') !!}
                                        {!! Form::text('level', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                                    </div>

                                    <!-- Subject Id Field -->
                                    <div class="form-group col-sm-6">
                                        {!! Form::label('subject_id', 'Subject Id:') !!}
                                        {!! Form::number('subject_id', null, ['class' => 'form-control']) !!}
                                    </div>

                                    <!-- Level Description Field -->
                                    <div class="form-group col-sm-12 col-lg-12">
                                        {!! Form::label('level_description', 'Level Description:') !!}
                                        {!! Form::textarea('level_description', null, ['class' => 'form-control']) !!}
                                    </div>

                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ route('admin.levels') }}" class="btn btn-default">Cancel</a>
                                        {!! Form::submit('Update Level',['class' => 'btn btn-primary']) !!}
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection