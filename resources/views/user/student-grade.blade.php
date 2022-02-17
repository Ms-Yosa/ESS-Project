@extends('layouts.student')
@section('content')
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 mb-3 pt-5">
        <div class="stretch-card" >
            <div class="card" style="border:1px solid black">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h4 class="card-title" >Assessment Report</h4>
                  </div>
                    <button type="button" class="btn btn-social-icon-text btn-twitter mr-2" data-toggle="modal" data-target="#exampleModalLong">
                      <i class="ti-medall"></i>View Badges
                    </button>
                </div>
                <p class="card-description">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Grading Symbols:</th>
                          <th>E - Excellent</th>
                          <th>VS-Very Satisfactory</th>
                          <th>S-Satisfactory</th>
                          <th>I - Improving</th>
                          <th>NI - Needs Improving</th>
                        </tr>
                      </thead>
                    </table>
                </p>
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                  <table class="table table-hover mb-0" >
                    <thead>
                      <tr style="border-bottom: 2px solid #FDC921">
                        <th>Learning Areas</th>
                        <th>Description</th>
                        <th>1st</th>
                        <th>2nd</th>
                        <th>3rd</th>
                        <th>4th</th>
                        <th>Final Rating</th>
                      </tr>
                    </thead>
                    <tbody >
                        @foreach ($subArea as $subA)
                        <tr>
                            <td rowspan="4" class="font-weight-bold text-center">{{$subA->name}}</td>
                        </tr>
                        @foreach ($subA->subjects as $subj)
                        <tr>
                            <td>{{$subj->subject_name}}</td>
                            <td>
                                @foreach ($grade as $item)
                                    @if($subj->id == $item->subject_id)
                                        {{$item->first_period}}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach ($grade as $item)
                                @if($subj->id == $item->subject_id)
                                    {{$item->second_period}}
                                @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach ($grade as $item)
                                @if($subj->id == $item->subject_id)
                                    {{$item->third_period}}
                                @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach ($grade as $item)
                                @if($subj->id == $item->subject_id)
                                    {{$item->fourth_period}}
                                @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach ($grade as $item)
                                @if($subj->id == $item->subject_id)
                                    {{$item->final_rating}}
                                @endif
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Badges Earned</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="pt-2">
          <ul style="list-style: none" class="p-0">
            @foreach ($badges as $badge)
            @foreach ($badge->badge as $item)
            <li class="mt-2">
                <div class="card btn-inverse-warning btn-fw col-md-12">
                  <div class="card-body">
                    <h4 class="card-title">{{$item->name}}</h4>
                    <div class="media">
                      <div class="pr-2">
                        <img
                        style="width:50px;"
                        src="{{asset('images-upload/' . $item->badge_image_path)}}"
                        alt="badge-image"
                      >
                      </div>
                      <div class="media-body">
                        <p class="card-text">{{$item->description}}</p>
                      </div>
                    </div>
                  </div>
                </div>
            </li>
            @endforeach
            @endforeach
          </ul>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  </div>
  <!-- partial -->
<!-- main-panel ends -->
@endsection