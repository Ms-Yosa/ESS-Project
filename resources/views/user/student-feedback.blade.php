@extends('layouts.student')
@section('content')
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 mb-3 pt-5">
        <div class="stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Weekly Instructor Feedback</h4>
                <p class="card-description">
                </p>
                <div class="table-responsive">
                  <table class="table table-hover table-borderless" >
                    <thead>
                      <tr style="border-bottom: 2px solid #FDC921">
                        <th>#</th>
                        <th>Week No. </th>
                        <th>Feedback Description</th>
                      </tr>
                    </thead>
                    <tbody >
                        @foreach ($feedback as $key => $fb)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$fb->week}}</td>
                            <td>{{$fb->description}}</td>
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
  <!-- partial -->
<!-- main-panel ends -->
@endsection