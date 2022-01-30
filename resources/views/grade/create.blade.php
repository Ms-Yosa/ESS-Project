@extends('layouts.faculty')
@section('content')
<section>
    <div class="container mt-5 mb-5">
        <div class="container mt-5">
          @foreach ($user as $item)
          @foreach ($subject as $subj)
          <form action="{{ route('faculty.grade.store', ['subArea_id'=>$subj->subArea->id, 'subj_id'=>$subj->id,'student_id'=>$item->id])}}"  method="POST" autocomplete="off">
            @csrf
            <h3>Student Name: {{$item->name}}</h3>
            <h3>Subject: {{$subj->subject_name}}</h3>
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">1st</th>
                      <th scope="col">2nd</th>
                      <th scope="col">3rd</th>
                      <th scope="col">4th</th>
                      <th scope="col">Final Rating</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
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
                  </tbody>
                </table>
          </form>
                @endforeach

                @endforeach
        </div>
    </div>
</section>
@endsection