@extends('layouts.admin.master')
@section('title') {{'Edit Badge'}} @endsection
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

                                {!! Form::model($badge, ['route' => ['admin.badge.update', $badge->id], 'method' => 'POST', 'enctype'=>"multipart/form-data"]) !!}
                                <form action="{{ route('admin.badge.update', $badge->id)}}" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <h6><label for="name">Badge Name</label></h6>
                                                <input type="text" class="form-control form-control-sm" name="name" placeholder="Enter name" value="{{ $badge->name}}">
                                                <span class="text-danger">@error('name'){{ $message }} @enderror</span><br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <h6><label for="description">Description</label></h6>
                                            <textarea placeholder="Enter description" class="form-control form-control-sm" name="description" id="description">{{ $badge->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-10">
                                            <label>Badge Image</label>
                                            <input type="file" name="image" class="file-upload-default" accept="image/*">
                                            <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled placeholder="{{$badge->badge_image_path}}">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                            </span>
                                            </div>
                                        </div>
                                        @if ($badge->badge_image_path)
                                            <div class="col-md-2">
                                                <img style="width:75px;" src="{{asset('images-upload/' . $badge->badge_image_path)}}" alt="badge-image">
                                            </div>
                                        @endif
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ route('admin.classes') }}" class="btn btn-default">Cancel</a>
                                        {!! Form::submit('Update Badge',['class' => 'btn btn-primary']) !!}
                                    </div>
                                </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection