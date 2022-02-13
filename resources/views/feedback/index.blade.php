@extends('layouts.faculty')
@section('content')
<body class="sidebar-icon-only">
  {!! Toastr::message() !!}
  <div class="content-wrapper">
    <div class="row pt-5">
      <div class="col-md-12 mb-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb" style="border: none; padding-bottom:0;">
            <li class="breadcrumb-item"><a href="{{route("faculty.home")}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route("faculty.classes")}}">Classes</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('faculty.class_view', $class->class_id)}}">{{$class->class_name}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Feedback</li>
          </ol>
        </nav>
      @include('partials.error')
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 mb-3">
        <div class="stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Feedback List</h4>
                <p class="card-description">
                </p>
                <div class="table-responsive">
                  <table class="table table-hover table-borderless" >
                    <thead>
                      <tr style="border-bottom: 2px solid #FDC921">
                        <th>#</th>
                        <th>Week No. </th>
                        <th>Feedback Description</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody >
                        @foreach ($feedback as $key => $fb)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$fb->week}}</td>
                            <td>{{$fb->description}}</td>
                            <td>
                              <div class="row">
                                <form action="{{ route('faculty.feedback.edit',$fb->id)}}" method="GET">
                                  @csrf
                                  <button type="submit" class="btn btn-inverse-info btn-icon">
                                    <i class="ti-pencil"></i>
                                  </button>
                                </form>
                                &nbsp;

                                <form action="{{ route('faculty.feedback.destroy',$fb->id)}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                    <button type="submit" class="btn btn-inverse-danger btn-icon">
                                      <i class="ti-trash"></i>
                                    </button>
                                </form>
                              </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="justify-content-end d-flex">
         <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
           <button class="btn btn-sm btn-inverse-warning" type="button" data-toggle="modal" data-target="#exampleModalCenter">
            <strong>+ ADD FEEDBACK</strong>
           </button>
         </div>
        </div>
      </div>
    </div>
    <form action="{{ route('faculty.feedback.create', $user->id)}}"  method="POST" autocomplete="off">
      @csrf
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Feedback</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="week">Week No. </label>
                      <input type="text" name="week" class="form-control" id="week" placeholder="Input week number ">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea name="description" class="form-control" id="description" rows="4"></textarea>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
            </div>
        </div>
      </form>
  </div>
</body>
  <!-- partial -->
<!-- main-panel ends -->

<script>
  var toastTrigger = document.getElementById('liveToastBtn')
  var toastLiveExample = document.getElementById('liveToast')
  if (toastTrigger) {
    toastTrigger.addEventListener('click', function () {
      var toast = new bootstrap.Toast(toastLiveExample)

      toast.show()
    })
  }
</script>
@endsection