@extends('layouts.faculty')
@section('title')
    @foreach ($class as $key => $cla)
        {{$cla->class_name}}
    @endforeach
@endsection
@section('content')
<body class="sidebar-icon-only">
    {!! Toastr::message() !!}
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 mb-1 pt-5">
                @foreach ($class as $key => $attendance)
                <a href="{{route('faculty.attendance',$attendance->class_id)}}" class="btn btn-sm btn-outline-warning btn-icon-text">Record Attendance &nbsp;<i class="ti-book btn-icon-prepend"></i></a>
                @endforeach

            </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-1">
            @foreach ($class as $key => $student)
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="border: none">
                  <li class="breadcrumb-item"><a href="{{route("faculty.home")}}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{route("faculty.classes")}}">Classes</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{$student->class_name}}</li>
                </ol>
              </nav>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">Master List</p>
                      <div class="row">
                        <div class="col-12">
                          <div class="table-responsive">

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
                                  @if (isset($student->getStudents[0]))
                                  <tbody>
                                    @foreach ($student->getStudents as $list)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td class="name">{{ $list->surname }}, {{ $list->name }} {{ $list->middle_name }}</td>
                                            <td class="email">{{ $list->email }}</td>
                                            <td width="30%">
                                                <a href="{{route('faculty.badge', $list->id)}}" class="btn btn-sm btn-inverse-primary btn-icon-text">Grant Badge &nbsp;<i class="ti-star btn-icon-prepend"></i></a>
                                                <a href="{{route('faculty.feedback', $list->id)}}" class="btn btn-sm btn-inverse-info btn-icon-text">Send Feedback &nbsp;<i class="ti-thumb-up btn-icon-prepend"></i></a>
                                            </td>
                                            <td>
                                                <li class="nav-item nav-settings d-none d-lg-flex">
                                                    <a class="nav-link" href="#">
                                                        <i class="icon-ellipsis"></i>
                                                    </a>
                                                </li>
                                            </td>
                                        </tr>
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
                                    @endforeach
                                  @else
                                  <tr>
                                    <td colspan="7" class="text-center">
                                      <img
                                        src="{{asset('Assets/no-data.png')}}"
                                        alt="no-data-image"
                                        class="no-data-img"
                                      >
                                      <p class="card-description mt-3">No Data Yet</p>
                                    </td>
                                  </tr>
                                  @endif
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
            <div class="col-md-12 mb-3">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">Learning Areas</p>
                      <div class="row">
                        <div class="col-12">
                          <div class="table-responsive">
                            @foreach ($class as $key => $student)
                                <table class="display expandable-table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <tr>
                                                <th>No.</th>
                                                <th>Area</th>
                                                <th>Subjects</th>
                                                <th>Action</th>
                                            </tr>
                                        </tr>
                                    </thead>
                                    @if (isset($student->getSubArea[0]))
                                    <tbody>
                                        @foreach ($student->getSubArea as $subArea)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $subArea->name }}</td>
                                                <td>
                                                    @foreach ($subArea->subjects as $sub)
                                                        {{$sub->subject_name}}
                                                    <br>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a  href="{{route('faculty.marking',['id'=>$student->class_id,'subArea_id'=>$subArea->id])}}" class="btn btn-sm btn-outline-warning btn-icon-text">Mark Students &nbsp;<i class="ti-check"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4" class="text-center">
                                            <img
                                                src="{{asset('Assets/no-data.png')}}"
                                                alt="no-data-image"
                                                class="no-data-img"
                                            >
                                            <p class="card-description mt-3">No Data Yet</p>
                                            </td>
                                        </tr>
                                    @endif
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
    </div>

</body>
@endsection