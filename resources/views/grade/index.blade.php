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
                      @foreach ($grade as $item)
                          @if(in_array($subj->id, $item->toArray()))
                    <tr>
                      <th scope="row">{{ ++$key }}</th>
                      <td>{{ $subj->subject_name}}</td>
                      <td>

                            {{$item->first_period}}
                      </td>
                      <td>
                            {{$item->second_period}}
                      </td>
                      <td>
                            {{$item->third_period}}
                      </td>
                      <td>
                            {{$item->fourth_period}}
                      </td>
                      <td>
                            {{$item->final_rating}}
                      </td>
                      <td>
                          <a  href="{{route('faculty.grade.create',['subj_id'=>$subj->id,'student_id'=>$user->id])}}">Encode</a>
                          <a  href="{{route('faculty.grade.edit',['subj_id'=>$subj->id,'student_id'=>$user->id])}}">Edit</a>
                      </td>
                    </tr>

                    @endif
                    @endforeach
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection