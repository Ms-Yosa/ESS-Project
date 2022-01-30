@extends('layouts.faculty')
@section('content')
<section>
    <div class="container mt-5 mb-5">
        <div class="container mt-5">
          @foreach ($user as $item)
          <h3>
            Student: {{$item->name}}
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
                      </td>
                      <td>
                      </td>
                      <td>
                      </td>
                      <td>
                      </td>
                      <td>
                      </td>
                      <td>
                        <a  href="{{route('faculty.grade.create',['subj_id'=>$subj->id,'student_id'=>$item->id])}}">Encode</a>
                        <a  href="">Edit</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

              @endforeach
            </div>
        </div>
    </div>
</section>
@endsection