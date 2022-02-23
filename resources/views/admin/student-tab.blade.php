@extends('layouts.admin.master')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Student Tab</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Students</a></li>

                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            <div class="card">

                                <!-- @if (Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                @if (Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('fail') }}
                                    </div>
                                @endif -->

                                {!! Toastr::message() !!}
            @include('partials.error')

                                <div class="card-header">
                                    <h4 class="card-title">All Students List  </h4>
                                    <div>
                                        <a href="{{ route('admin.student-master-list-export') }}" class="btn btn-secondary"><li class="la la-file"></li> Export PDF</a>
                                        <a href="{{ route('admin.student-register') }}" class="btn btn-primary"><li class="la la-user-plus"></li>  Add new</a>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Class</th>
                                                <th>Teacher</th>
                                                <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $key => $student)
                                                  <tr>
                                                        <td class="id">{{ ++$key }}</td>
                                                        <td class="name">{{ $student->surname }}, {{ $student->name }} {{ $student->middle_name }}</td>
                                                        <td>
                                                            {{ $student->classAssigned->class_name ?? 'Unassigned' }}
                                                        </td>
                                                        <td>{{ $student->classAssigned->getInstructor->faculty_surname ?? 'Unassigned' }}</td>

                                                        <td>
                                                            <div class="container overflow-hidden m-0">
                                                                <div class="row ">
                                                                    <div class="col-3">
                                                                        <button class="btn badge bg-primary" data-toggle="modal" data-target="#ModalView{{$student->id}}"><i class="la la-eye"></i></button>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <form action="{{ route('admin.student-edit', $student->id)}}" method="GET">
                                                                            @csrf

                                                                            <button class="btn badge bg-success" type="submit"><i class="la la-pencil-square"></i></button>
                                                                        </form>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <form action="{{ route('admin.student-destroy', $student->id)}}" method="POST">
                                                                            @method('DELETE')
                                                                            @csrf

                                                                            <button class="btn badge bg-danger" type="submit"> <a  onclick="return confirm('Are you sure to want to delete it?')"><i class="la la-trash"></i></a></button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                      </td>
                                                      @include('admin.student-management.view-modal')
                                                  </tr>
                                                @endforeach
                                            <tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection