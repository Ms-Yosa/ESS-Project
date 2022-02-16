@extends('layouts.faculty')
@section('content')>
<head>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body class="sidebar-icon-only">
  {!! Toastr::message() !!}
  <div class="content-wrapper">
    <div class="row pt-5">
      <div class="col-md-12 mb-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb" style="border: none; padding-bottom:0;">
            <li class="breadcrumb-item"><a href="{{route("faculty.home")}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route("faculty.classes")}}">Classes</a></li>
            {{-- <li class="breadcrumb-item" aria-current="page"><a href="{{ route('faculty.class_view', $class->class_id)}}">{{$class->class_name}}</a></li> --}}
            <li class="breadcrumb-item active" aria-current="page">Badge</li>
          </ol>
        </nav>
      @include('partials.error')
      </div>
    </div>
    <div class="row">
      <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title mb-0">Grant Badge</p>
            <p class="card-description">
              Student: {{$user->name}} {{$user->surname}}
            </p>
            <div class="form-group">
              <label>Select Badges</label>

              <form action="{{ route('faculty.badge.create',$user->id)}}" method="POST">
                @csrf
                    <select name="badge[]" class="js-example-basic-multiple col-md-12 badges" multiple="multiple">
                @foreach ($badges as $badge)
                        <option value="{{$badge->id}}">{{$badge->name}}</option>
                @endforeach
              </select>
              <button type="submit" class="btn btn-primary m-2 float-right">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Badge List</h4>
            <div class="list-wrapper pt-2">
              <ul>
                @foreach ($badges as $badge)
                <li>
                    <div class="card btn-inverse-warning btn-fw col-md-12">
                      <div class="card-body">
                        <h4 class="card-title">{{$badge->name}}</h4>
                        <div class="media">
                          <div class="pr-2">
                            <img
                            style="width:50px;"
                            src="{{asset('images-upload/' . $badge->badge_image_path)}}"
                            alt="badge-image"
                          >
                          </div>
                          <div class="media-body">
                            <p class="card-text">{{$badge->description}}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2({
        placeholder: "Select",
        allowClear: true
    });
});
</script>
@endsection