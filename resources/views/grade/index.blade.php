@extends('layouts.faculty')
@section('content')
<section>
    <div class="container mt-5 mb-5">
        <div class="container mt-5">
          <h3>
            Student: {{$user->name}}
          </h3>
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Subject</th>
                      <th scope="col">1st</th>
                      <th scope="col">2nd</th>
                      <th scope="col">3rd</th>
                      <th scope="col">4th</th>
                      <th scope="col">Final Rating</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($subject as $key => $subj)
                    <tr>
                      <th scope="row">{{ ++$key }}</th>
                      <td>{{ $subj->subject_name}}</td>
                      <td>
                        @foreach ($grade as $item)
                          @if(in_array($subj->id, $item->toArray()))
                            {{$item->first_period}}
                          @endif
                        @endforeach
                      </td>
                      <td>
                        @foreach ($grade as $item)
                          @if(in_array($subj->id, $item->toArray()))
                            {{$item->second_period}}
                          @endif
                        @endforeach
                      </td>
                      <td>
                        @foreach ($grade as $item)
                          @if(in_array($subj->id, $item->toArray()))
                            {{$item->third_period}}
                          @endif
                        @endforeach
                      </td>
                      <td>
                        @foreach ($grade as $item)
                          @if(in_array($subj->id, $item->toArray()))
                            {{$item->fourth_period}}
                          @endif
                        @endforeach
                      </td>
                      <td>
                        @foreach ($grade as $item)
                          @if(in_array($subj->id, $item->toArray()))
                            {{$item->final_rating}}
                          @endif
                        @endforeach
                      </td>
                      <td>
                          <a  href="{{route('faculty.grade.create',['subj_id'=>$subj->id,'student_id'=>$user->id])}}">Encode</a>
                          <a  href="">Edit</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection