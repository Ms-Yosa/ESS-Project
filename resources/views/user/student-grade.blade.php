@extends('layouts.student')
@section('content')
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 mb-3 pt-5">
        <div class="stretch-card" >
            <div class="card" style="border:1px solid black">
              <div class="card-body">
                <h4 class="card-title" >Assessment Report</h4>
                <p class="card-description">
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
  </div>
  <!-- partial -->
<!-- main-panel ends -->
@endsection