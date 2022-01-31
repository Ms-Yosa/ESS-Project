@extends('layouts.student')
@section('content')
    <section>
    <div class="container container-md grades-content">
        <div class="row grades-student-info">
            <div class="col">
                @include('partials.user.user-gen-info')
                <br><br>
                <!-- Learner Progress and Achievements Table -->
                <table class="table text-center grades-progress-achievement table-borderless" style="border:2px solid #FFC415; background-color:#FDF8DB; border-color:#FC6300">
                    <thead class="border border-warning border border-2 "><th colspan="3">Academic Metrics</th>  </thead>
                    <tbody>
                        <tr>
                            <th scope="col">Descriptors</th>
                            <th scope="col">Grading Sytem</th>
                        </tr>
                        <tr>
                            <td>E</td>
                            <td>Excellent</td>
                        </tr>
                        <tr>
                            <td>VS</td>
                            <td>Very Satisfactory</td>
                        </tr>
                        <tr>
                            <td>S</td>
                            <td>Satisfactory</td>
                        </tr>
                        <tr>
                            <td>I</td>
                            <td>Improving</td>
                        </tr>
                        <tr>
                            <td>N</td>
                            <td>Needs Improvement</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col">
                <!-- second column -->
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Subject Area</th>
                        <th scope="col">Subject</th>
                        <th scope="col">1st</th>
                        <th scope="col">2nd</th>
                        <th scope="col">3rd</th>
                        <th scope="col">4th</th>
                        <th scope="col">Final Rating</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($subArea as $subA)
                        <tr>
                            <td class="text-center font-weight-bold">{{$subA->name}}</td>
                        </tr>
                        @foreach ($subA->subjects as $subj)
                        <tr>

                            <th scope="row"></th>
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
    </section>
    @endsection