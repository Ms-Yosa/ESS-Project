@extends('layouts.faculty')
@section('content')
<body class="sidebar-icon-only">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 mb-3 pt-5">
        <div class="stretch-card">
            <div class="card">
              <div class="card-body">
                <form action="{{ route('faculty.grade.update', ['subj_id'=>$grade->subject_id,'student_id'=>$grade->user_id,'grade_id'=>$grade->id])}}" method="POST" autocomplete="off">
                  @method('PUT')
                  @csrf
                  <h4 class="card-title">Edit Grade</h4>
                  <h4 class="card-title">Subject: {{$grade->subject->subject_name}}</h4>
                <p class="card-description">
                </p>
                <div class="table-responsive">
                  <table class="table table-hover table-borderless" >
                    <thead>
                      <tr style="border-bottom: 2px solid #FDC921">
                        <th scope="col">1st</th>
                        <th scope="col">2nd</th>
                        <th scope="col">3rd</th>
                        <th scope="col">4th</th>
                        <th scope="col">Final Rating</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody >
                      <tr>
                        <td>
                          <input type="text" class="form-control form-control-sm" name="first_period" value="{{$grade->first_period}}">
                        </td>
                        <td>
                          <input type="text" class="form-control form-control-sm" name="second_period" value="{{$grade->second_period}}">
                        </td>
                        <td>
                          <input type="text" class="form-control form-control-sm" name="third_period" value="{{$grade->third_period}}">
                        </td>
                        <td>
                          <input type="text" class="form-control form-control-sm" name="fourth_period" value="{{$grade->fourth_period}}">
                        </td>
                        <td>
                          <input type="text" class="form-control form-control-sm" name="final_rating" value="{{$grade->final_rating}}">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <button type="submit" class="btn btn-primary">Update Grade</button>
                  <button class="btn btn-light"><a href="" >Cancel</a></button>
                </form>
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