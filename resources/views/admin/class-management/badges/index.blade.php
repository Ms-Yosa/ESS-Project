@extends('layouts.admin.master')
@section('title') {{'Badges'}} @endsection
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Badges Tab</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Class Management</a></li>
                        <li class="breadcrumb-item active"><a href="#">Badge</a></li>
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
                                    <h4 class="card-title">All Badges List  </h4>
                                        <a data-toggle="modal" data-target="#add-class-modal" class="btn btn-primary">
                                            <li class="la la-plus-circle"></li>Add new Badge
                                        </a>
                                    </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Badge Name</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($badges as $key => $badge)
                                                    <tr>
                                                        <td class="id">{{ ++$key }}</td>
                                                        <td>{{ $badge->name }}</td>
                                                        <td>
                                                            <img style="width:50px;" src="{{asset('images-upload/' . $badge->badge_image_path)}}" alt="badge-image">
                                                        </td>
                                                        <td>
                                                        <div class="container overflow-hidden m-0">
                                                            <div class="row">
                                                                <div class="col-2">
                                                                    <form action="{{ route('admin.badge.edit', $badge->id)}}" method="GET">
                                                                        @csrf
                                                                        <button class="btn badge bg-success" type="submit"><i class="la la-pencil-square"></i></button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-2">
                                                                    <button class="btn badge bg-danger" data-toggle="modal" data-target="#Delete{{$badge->id}}"><i class="la la-trash"></i></button>
                                                                </div>
                                                            </div>

                                                            </div>
                                                        </div>
                                                      </td>
                                                      @include('admin.class-management.badges.delete-modal')
                                                    </tr>
                                                @endforeach
                                            <tbody>
                                        </table>
                                    </div>

                                    <form action="{{ route('admin.badge.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <!-- Modal -->
                                        <div class="modal fade" id="add-class-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color:#FBD848;letter-spacing: 3px; color:black">
                                                        <h4 class="modal-title">Add a Badge</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                             <span aria-hidden="true">&times;</span>
                                                        </button>
                                                   </div>
                                                    <div class="modal-body">

                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div class="form-group">
                                                            <h6><label for="name">Badge Name</label></h6>
                                                                <input type="text" class="form-control form-control-sm" name="name" placeholder="Enter Badge name" value="{{ old('name') }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div class="form-group">
                                                                <h6><label for="description">Description</label></h6>
                                                                <textarea placeholder="Enter description" class="form-control form-control-sm" name="description" id="description"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div class="form-group">
                                                                <label>Badge Image</label>
                                                                <input type="file" name="image" class="file-upload-default" accept="image/*">
                                                                <div class="input-group col-xs-12">
                                                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        {!! Form::submit('Add',['class' => 'btn btn-primary']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection