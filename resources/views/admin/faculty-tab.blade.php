@extends('layouts.admin.master')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Faculties Tab</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Faculties</a></li>

                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            <div class="card">
                            @if (Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                @if (Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('fail') }}
                                    </div>
                                @endif
                                <div class="card-header">
                                    <h4 class="card-title">All Faculties List  </h4>
                                    <div>
                                        <a href="{{ route('admin.faculty-master-list-export') }}" class="btn btn-secondary"><li class="la la-file"></li> Export PDF</a>
                                        <a href="{{ route('admin.faculty-register') }}" class="btn btn-primary"><li class="la la-user-plus"></li>  Add new</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Class Advisory</th>
                                                    <th>Birthday</th>
                                                    <th>Gender</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($faculty as $key => $faculties)
                                                  <tr>
                                                      <td class="id">{{ ++$key }}</td>
                                                      <td class="name">{{ $faculties->faculty_surname }}, {{ $faculties->faculty_name }} {{ $faculties->faculty_middle_name }}</td>
                                                      <td class="age">{{ $faculties->faculty_email }}</td>
                                                      <td>
                                                        @foreach ($faculties->getClass as $item)
                                                            {{ $item->class_name   ?? 'Unassigned'  }}
                                                            <br>
                                                        @endforeach
                                                      </td>

                                                      <td class="age">{{ $faculties->birth_year }}, {{ $faculties->birth_month }} {{ $faculties->birth_day }}</td>
                                                      <td class="gender">{{ $faculties->gender }}</td>
                                                      <td>
                                                          <div class="row">
                                                                <button class="badge bg-primary" data-toggle="modal" data-target="#ModalView{{$faculties->id}}"><i class="la la-eye"></i></button>

                                                                <form action="{{ route('admin.faculty-edit', $faculties->id)}}" method="GET">
                                                                    @csrf

                                                                    <button class="badge bg-success" type="submit"><i class="la la-pencil-square"></i></button>
                                                                </form>


                                                                <form action="{{ route('admin.faculty-destroy', $faculties->id)}}" method="POST">
                                                                    @method('DELETE')
                                                                    @csrf

                                                                    <button class="badge bg-danger" type="submit"> <a  onclick="return confirm('Are you sure to want to delete it?')"><i class="la la-trash"></i></a></button>
                                                                </form>
                                                          </div>
                                                      </td>
                                                      @include('admin.faculty-management.view-modal')
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