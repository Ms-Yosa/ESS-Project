@extends('layouts.faculty')
@section('content')
<body class="sidebar-icon-only">
    <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 mb-3 pt-5">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">Student List</p>
                      <div class="row">
                        <div class="col-12">
                          <div class="table-responsive">
                            @foreach ($class as $key => $student)
                            <table class="display expandable-table" style="width:100%">
                              <thead>
                                <tr>
                                  <th>No.</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Action</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($student->getStudents as $list)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td class="name">{{ $list->surname }}, {{ $list->name }} {{ $list->middle_name }}</td>
                                        <td class="email">{{ $list->email }}</td>
                                        <td>
                                            <a href="{{route('faculty.feedback', $list->id)}}" class="btn btn-sm btn-outline-warning btn-icon-text">Send Feedback &nbsp;<i class="ti-arrow-right btn-icon-prepend"></i></a>
                                        </td>
                                        <td>
                                            <li class="nav-item nav-settings d-none d-lg-flex">
                                                <a class="nav-link" href="#">
                                                  <i class="icon-ellipsis"></i>
                                                </a>
                                            </li>
                                        </td>
                                    </tr>
                                @endforeach
                              </tbody>
                          </table>
                           @endforeach
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="theme-setting-wrapper">
        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close ti-close"></i>
            <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">STUDENT OVERVIEW</a>
            </li>
            </ul>
            <div class="tab-content" id="setting-content">
            <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="col-md-12">
                <ul class="list-arrow">
                    <h6>
                        <li>Full Name</li>
                        <p class="text-info pl-4">
                            {{ $list->name }} {{ $list->middle_name }} {{ $list->surname }}
                        </p>
                    </h6>
                    <h6>
                        <li>Email</li>
                        <p class="text-info pl-4">
                            {{ $list->email }}
                        </p>
                    </h6>
                    <h6>
                        <li>Age</li>
                        <p class="text-info pl-4">
                            {{ $list->age }}
                        </p>
                    </h6>
                    <h6>
                        <li>Gender</li>
                        <p class="text-info pl-4">
                            {{ $list->gender }}
                        </p>
                    </h6>
                    <h6>
                        <li>Address</li>
                        <p class="text-info pl-4">
                            {{ $list->address }}
                        </p>
                    </h6>
                    <h6>
                        <li>Contact Number</li>
                        <p class="text-info pl-4">
                            {{ $list->contact_number }}
                        </p>
                    </h6>
                    <h6>
                        <li>Guardian</li>
                        <p class="text-info pl-4">
                            {{ $list->guardian }}
                        </p>
                    </h6>
                </ul>
            </div>
        </div>
    </div>
</body>
@endsection