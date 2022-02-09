@extends('layouts.faculty')
@section('content')
<body class="sidebar-icon-only">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 mb-3 pt-5">
        <div class="stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Edit Feedback</h4>
                <p class="card-description">
                </p>
                <form class="forms-sample" action="{{route('faculty.feedback.update', ['user_id'=>$feedback->user_id,'id'=>$feedback->id])}}"  method="POST" autocomplete="off">
                    @method('PUT')
                    @csrf
                        <div class="form-group">
                            <label for="week">Week No. </label>
                            <input type="text" name="week" class="form-control" id="week" value="{{$feedback->week}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="description" rows="4">{{$feedback->description}}</textarea>
                        </div>
                        <div class="row mt-3 float-right">
                            <button class="btn btn-light"><a href="" >Cancel</a></button>
                            <button type="submit" class="btn btn-primary">Update Feedback</button>
                        </div>
                </form>
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