@extends('layouts.faculty')
@section('content')
<section>
    <div class="container mt-5 mb-5">
        <div class="container mt-5">
          <h3>

          </h3>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Add Feedback
          </button>
          <form action="{{ route('faculty.feedback.create', $user->id)}}"  method="POST" autocomplete="off">
          @csrf
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Feedback</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <label for="week">Week No.</label>
                        <input type="text" class="form-group col-sm-6" name="week">
                        <br>
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="40" rows="2">
                        </textarea>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
                </div>
            </div>
          </form>

              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Week No.</th>
                      <th scope="col">Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($feedback as $key => $fb)
                    <tr>
                      <th scope="row">{{++$key}}</th>
                      <td>{{$fb->week}}</td>
                      <td>{{$fb->description}}</td>
                      <td>
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