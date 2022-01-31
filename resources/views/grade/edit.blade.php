@extends('layouts.faculty')
@section('content')
<section>
    <div class="container mt-5 mb-5">
        <div class="container mt-5">
          <h3>Edit Grade</h3>
          <h3>Subject: {{$grade->subject->subject_name}}</h3>
          <form action="{{ route('faculty.grade.update', ['subj_id'=>$grade->subject_id,'student_id'=>$grade->user_id,'grade_id'=>$grade->id])}}" method="POST" autocomplete="off">
            @method('PUT')
            @csrf
            <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">1st</th>
                <th scope="col">2nd</th>
                <th scope="col">3rd</th>
                <th scope="col">4th</th>
                <th scope="col">Final Rating</th>
              </tr>
            </thead>
            <tbody>
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
</section>
@endsection