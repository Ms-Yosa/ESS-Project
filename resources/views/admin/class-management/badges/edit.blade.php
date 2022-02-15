@extends('layouts.admin.master')
@section('content')


<div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Edit Badge</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="#">Class Management</a></li>
                        <li class="breadcrumb-item active"><a href="#">Badge</a></li>
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

                                {!! Form::model($badge, ['route' => ['admin.badge.update', $badge->id], 'method' => 'POST']) !!}

                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group">
                                            <h6><label for="name">Badge Name</label></h6>
                                                <input type="text" class="form-control form-control-sm" name="name" placeholder="Enter name" value="{{ $badge->name}}">
                                                <span class="text-danger">@error('name'){{ $message }} @enderror</span><br>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ route('admin.classes') }}" class="btn btn-default">Cancel</a>
                                        {!! Form::submit('Update Badge',['class' => 'btn btn-primary']) !!}
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection