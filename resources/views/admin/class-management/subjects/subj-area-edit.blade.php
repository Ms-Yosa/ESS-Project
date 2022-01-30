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
                    <form action="{{ route('admin.subjects.updateArea', $subArea->id)}}" method="POST" autocomplete="off">
                        @csrf
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Edit Subject Area</h5>
                        </div>
                        @include('adminlte-templates::common.errors')
                        <div class="card-body">
                            <div class="form-group">
                                <h6><label for="name">Name</label></h6>
                                <input type="text" class="form-control form-control-sm" name="name" placeholder="Enter area name" value="{{ $subArea->name }}">
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
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button class="btn btn-light"><a href="{{ route('admin.subjects') }}" >Cancel</a></button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection