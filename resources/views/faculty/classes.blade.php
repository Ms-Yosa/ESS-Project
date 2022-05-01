@extends('layouts.faculty')
@section('title') {{'Classes'}} @endsection
@section('content')
  <div class="content-wrapper">
    <div class="col-md-12 pt-5 grid-margin transparent">
      <div class="row">
        @if (isset($classes[0]))
          @foreach ($classes as  $key => $class)
            @foreach ($class->getClass as $item)
              <div class="col-md-6 mb-4 stretch-card transparent">
                <a class="card btn text-left btn-inverse-info" href="{{ route('faculty.class_view', $item->class_id)}}">
                  <div class="card-body row">
                    <div class="col-2">
                      <i class="ti-bookmark-alt btn-icon-prepend" style="font-size: 40px"></i>
                    </div>
                    <div class="col-10">
                      <p class="fs-30 mb-2">{{$item->class_name}}</p>
                      <p class="mb-0">{{$item->class_code}}</p>
                      <p>{{$item->level}}</p>
                    </div>
                  </div>
                </a>
              </div>
            @endforeach
          @endforeach
        @else
          <div class="card text-center col-md-12">
            <img
              src="{{asset('Assets/no-data.png')}}"
              alt="no-data-image"
              class="no-data-img text-center"
            >
            <p class="card-description mt-3">No Data Yet</p>
          </div>
        @endif
      </div>

    </div>
  </div>
  <!-- partial -->
<!-- main-panel ends -->
@endsection