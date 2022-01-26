@extends('layouts.faculty')
@section('content')
<section>
    <div class="container mt-5 mb-5">
        <div class="container mt-5">
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
                  </tr>
                </thead>
                <tbody>
                    @foreach ($subject as $key => $subj)
                  <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $subj->subject_name}}</td>
                    <td>
                        <input type="text" class="form-control form-control-sm" name="first_period" value="">
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm" name="second_period" value="">
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm" name="third_period" value="">
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm" name="fourth_period" value="">
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm" name="final_rating" value="">
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</section>
@endsection