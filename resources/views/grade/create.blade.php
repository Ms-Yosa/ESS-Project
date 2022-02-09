@extends('layouts.faculty')
@section('content')
<body class="sidebar-icon-only">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 mb-3 pt-5">
        <div class="stretch-card">
            <div class="card">
              <div class="card-body">
                @foreach ($user as $item)
                @foreach ($subject as $subj)
                <form action="{{ route('faculty.grade.store', ['subArea_id'=>$subj->subArea->id, 'subj_id'=>$subj->id,'student_id'=>$item->id])}}"  method="POST" autocomplete="off">
                  @csrf
                  <h4 class="card-title">Student Name: {{$item->name}} {{$item->surname}}</h4>
                  <h4 class="card-title">Subject: {{$subj->subject_name}}</h4>
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
                          <input type="text" class="form-control form-control-sm" name="first_period">
                        </td>
                        <td>
                          <input type="text" class="form-control form-control-sm" name="second_period">
                        </td>
                        <td>
                          <input type="text" class="form-control form-control-sm" name="third_period">
                        </td>
                        <td>
                          <input type="text" class="form-control form-control-sm" name="fourth_period">
                        </td>
                        <td>
                          <input type="text" class="form-control form-control-sm" name="final_rating">
                        </td>
                        <td>
                          <button type="submit" class="btn btn-primary">Encode Grade</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>

                @endforeach

                @endforeach
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