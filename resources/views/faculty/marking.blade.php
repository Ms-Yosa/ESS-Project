@extends('layouts.faculty')
@section('content')
<body class="sidebar-icon-only">
  <div class="content-wrapper">
    <div class="row pt-5">
      <div class="col-md-12 mb-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb" style="border: none; padding-bottom:0;">
            <li class="breadcrumb-item"><a href="{{route("faculty.home")}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route("faculty.classes")}}">Classes</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('faculty.class_view', $className->class_id)}}">{{$className->class_name}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Learning Area</li>
          </ol>
        </nav>
      @include('partials.error')
      </div>
      <div class="col-md-12 mb-3">
        <div class="stretch-card">
            <div class="card">
              <div class="card-body">
                @foreach ($class as $key => $student)
                @foreach ($subject as $subArea)
                <h4 class="card-title">Encode Grades for Learning Area: {{ $subArea->name}}</h4>
                @endforeach
                <p class="card-description">
                </p>
                <div class="table-responsive">
                  <table class="table table-hover table-borderless" >
                    <thead>
                      <tr style="border-bottom: 2px solid #FDC921">
                        <th>No.</th>
                        <th>Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody >
                      @foreach ($student->getStudents as $list)
                      <tr>
                          <td>{{ ++$key }}</td>
                          <td>{{ $list->surname }}, {{ $list->name }} {{ $list->middle_name }}</td>
                          <td>
                              <a  href="{{route('faculty.grade',['subArea_id'=>$subArea->id,'student_id'=>$list->id])}}">Mark</a>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>

            @endforeach
              </div>
            </div>
          </div>
    </div>
  </div>
  </div>
</body>
  <!-- partial -->
<!-- main-panel ends -->
@endsection