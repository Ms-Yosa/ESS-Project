@extends('layouts.faculty')
@section('content')>
<head>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body class="sidebar-icon-only">
  <div class="content-wrapper">
    <div class="row pt-5">
      <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title mb-0">Grant Badge</p>
            <p class="card-description">
            </p>
            <div class="form-group">
              <label>Multiple select using select 2</label>

              <form action="{{ route('faculty.badge.create',$user->id)}}" method="POST">
                    <select name="badge[]" class="js-example-basic-multiple w-100 badges" multiple="multiple">
                @foreach ($badges as $badge)
                        <option value="{{$badge->id}}">{{$badge->name}}</option>
                @endforeach
              </select>
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