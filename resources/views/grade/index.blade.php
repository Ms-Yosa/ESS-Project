@extends('layouts.faculty')
@section('content')
<section>
    <div class="container mt-5 mb-5">
        <div class="container mt-5">
          @foreach ($user as $item)
          <h3>
            Student: {{$item->name}}
          </h3>
          <button type="button" class="btn btn-primary float-right m-2" data-toggle="modal" data-target=".bd-example-modal-lg">Encode</button>

            <form action="{{ route('faculty.grade.store', $item->id)}}"  method="POST" autocomplete="off">
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Encode Grades</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      @include('grade.encode')
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
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
                          {{-- <input type="text" class="form-control form-control-sm" name="first_period" value=""> --}}
                      </td>
                      <td>

                      </td>
                      <td>

                      </td>
                      <td>

                      </td>
                      <td>

                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              @endforeach
            </div>
          </form>
        </div>
    </div>
</section>
@endsection