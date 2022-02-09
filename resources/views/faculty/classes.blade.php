@extends('layouts.faculty')
@section('content')
  <div class="content-wrapper">
    <div class="col-md-12 pt-5 grid-margin transparent">
      <div class="row">
        @foreach ($classes as  $key => $class)
        @foreach ($class->getClass as $item)
        <div class="col-md-6 mb-4 stretch-card transparent">
          <a class="card btn text-left btn-inverse-warning" href="{{ route('faculty.class_view', $item->class_id)}}">
            <div class="card-body">
              <p class="fs-30 mb-2">{{$item->class_name}}</p>
              <p>Class info</p>
            </div>
          </a>
        </div>
      @endforeach
      @endforeach
      </div>
    </div>
  </div>
  <!-- partial -->
<!-- main-panel ends -->
@endsection