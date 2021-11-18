@extends('layouts.admin.master')
@section('content')

     
<div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Edit Subject</h4>
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
                            <h5 class="card-title">Edit Subject</h5>
                        </div>
                        @include('adminlte-templates::common.errors')
                        <div class="card-body">

                                {!! Form::model($subject, ['route' => ['admin.subjects.update', $subject->subject_id], 'method' => 'POST']) !!}

                                <div class="card-body">
                                    <div class="row">
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
                                        <a href="{{ route('admin.subjects') }}" class="btn btn-default">Cancel</a>
                                        {!! Form::submit('Update Subject',['class' => 'btn btn-primary']) !!}
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection