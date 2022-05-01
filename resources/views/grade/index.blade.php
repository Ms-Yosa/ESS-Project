
@extends('layouts.faculty')
@section('title') {{'Encode Grades'}} @endsection
@section('content')
<body class="sidebar-icon-only">
  <div class="content-wrapper">
    <div class="row pt-5">
      <div class="col-md-12 mb-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb" style="border: none; padding-bottom:0;">
            <li class="breadcrumb-item"><a href="{{route("faculty.home")}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route("faculty.classes")}}">Classes</a></li>
            <li class="breadcrumb-item"><a href="{{route('faculty.grade',['subArea_id'=>$subArea,'student_id'=>$user->id])}}">Learning Area</a></li>
            <li class="breadcrumb-item active" aria-current="page">Encode</li>
          </ol>
        </nav>
      @include('partials.error')
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 mb-3">
        <div class="stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Student: {{$user->name}} {{$user->surname}}</h4>
                <p class="card-description">
                </p>
                <div class="table-responsive">
                  <table class="table table-hover table-borderless" >
                    <thead>
                      <tr style="border-bottom: 2px solid #FDC921">
                        <th scope="col">#</th>
                        <th scope="col">Subject</th>
                        <th scope="col">1st</th>
                        <th scope="col">2nd</th>
                        <th scope="col">3rd</th>
                        <th scope="col">4th</th>
                        <th scope="col">Final Rating</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody >
                      @foreach ($subject as $key => $subj)
                            <tr>
                              <th scope="row">{{ ++$key }}</th>
                              <td>{{ $subj->subject_name}}</td>
                              <td>
                                @foreach ($grade as $item)
                                  @if(in_array($subj->id, $item->toArray()))
                                    {{$item->first_period}}
                                  @endif
                                @endforeach
                              </td>
                              <td>
                                @foreach ($grade as $item)
                                  @if(in_array($subj->id, $item->toArray()))
                                    {{$item->second_period}}
                                    @endif
                                  @endforeach
                              </td>
                              <td>
                                @foreach ($grade as $item)
                                  @if(in_array($subj->id, $item->toArray()))
                                    {{$item->third_period}}
                                    @endif
                                  @endforeach
                              </td>
                              <td>
                                @foreach ($grade as $item)
                                  @if(in_array($subj->id, $item->toArray()))
                                    {{$item->fourth_period}}
                                    @endif
                                  @endforeach
                              </td>
                              <td>
                                @foreach ($grade as $item)
                                  @if(in_array($subj->id, $item->toArray()))
                                    {{$item->final_rating}}
                                    @endif
                                  @endforeach
                              </td>
                              <td>
                                  <a href="{{route('faculty.grade.create',['subj_id'=>$subj->id,'student_id'=>$user->id])}}" class="btn btn-sm btn-outline-info btn-icon-text">Encode &nbsp;<i class="ti-notepad btn-icon-prepend"></i></a>
                                  <a href="{{route('faculty.grade.edit',['subj_id'=>$subj->id,'student_id'=>$user->id])}}" class="btn btn-sm btn-outline-warning btn-icon-text">Edit &nbsp;<i class="ti-pencil-alt btn-icon-prepend"></i></a>
                              </td>
                            </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
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