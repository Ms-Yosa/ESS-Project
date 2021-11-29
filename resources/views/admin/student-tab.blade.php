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
                                <div class="card-header">
                                    <h4 class="card-title">All Students List  </h4>
                                    <a href="{{ route('admin.student-register') }}" class="btn btn-primary"><li class=
"la la-user-plus"></li>  Add new</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Age</th>
                                                <th>Birthday</th>
                                                <th>Gender</th>
                                                <th>Class</th>
                                                <th>Teacher</th>
                                                <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach ($user as $key => $users)
                                                  <tr>
                                                      <td class="id">{{ ++$key }}</td>
                                                      <td class="name">{{ $users->surname }}, {{ $users->name }} {{ $users->middle_name }}</td>
                                                      <td class="email">{{ $users->email }}</td>
                                                      <td class="age">{{ $users->age }}</td>
                                                      <td class="age">{{ $users->birth_year }}, {{ $users->birth_month }} {{ $users->birth_day }}</td>
                                                      <td class="gender">{{ $users->gender }}</td>
                                                      <td class="gender">{{ $users->class_name }}</td>
                                                      <td class="gender">{{ $users->name }}</td>

                                                        <td>
                                                      <form action="{{ route('admin.student-edit', $users->id)}}" method="GET">
                                                          @csrf

                                                          <button class="badge bg-success" type="submit"><i class="la la-pencil-square"></i></button>
                                                      </form>


                                                      <form action="{{ route('admin.student-destroy', $users->id)}}" method="POST">
                                                        @method('DELETE')
                                                          @csrf

                                                        <button class="badge bg-danger" type="submit"> <a  onclick="return confirm('Are you sure to want to delete it?')"><i class="la la-trash"></i></a></button>
                                                      </form>


                                                      </td>
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