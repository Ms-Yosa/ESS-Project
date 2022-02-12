@extends('layouts.faculty')
@section('content')
<body class="sidebar-icon-only">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 mb-3 pt-5">
        <div class="stretch-card">
            <div class="card">
               <div class="card-header">
                    <a href="#" class="btn btn-primary">  Export Attendance List</a>
               </div>
            <div class="card-body">
                      <p class="card-title">Attendance List</p>
                      <p>Current date: <?php
                         print date('D, d M Y');
                         ?>
                    </p>

                      <div class="row">
                        <div class="col-12">
                          <div class="table-responsive">
                            @foreach ($class as $key => $student)
                            <table class="display expandable-table" style="width:100%">
                              <thead>
                                <tr>
                                  <th>No.</th>
                                  <th>Name</th>
                                  <th>Present</th>
                                  <th>Absent</th>
                                  <th>Incomplete Day</th>
                                  <th>Action</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($student->getStudents as $list)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td class="name">{{ $list->surname }}, {{ $list->name }} {{ $list->middle_name }}</td>
                                        <td>
                                             <div class="input-group mb-3">
                                                  <div class="input-group-prepend">
                                                       <div class="input-group-text">
                                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                                       </div>
                                                  </div>
                                             </div>
                                        </td>
                                        <td>
                                             <div class="input-group mb-3">
                                                  <div class="input-group-prepend">
                                                       <div class="input-group-text">
                                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                                       </div>
                                                  </div>
                                                  <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Details">
                                             </div>
                                        </td>
                                        <td>
                                             <div class="input-group mb-3">
                                                  <div class="input-group-prepend">
                                                       <div class="input-group-text">
                                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                                       </div>
                                                  </div>
                                                  <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Details">
                                             </div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-outline-secondary btn-icon-text"> Export Attendace
                                        </td>
                                    </tr>
                                @endforeach
                              </tbody>
                          </table>
                           @endforeach
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</body>
  <!-- partial -->
<!-- main-panel ends -->
@endsection