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
                                        
                                             <form action="{{ route('faculty.attendance.create')}}"  method="POST" autocomplete="off">
                                             @csrf
                                             
                                             @if (Session::get('success'))
                                                       <div class="alert alert-success">
                                                            {{ Session::get('success') }}
                                                       </div>
                                                  @endif
                                                  @if (Session::get('fail'))
                                                       <div class="alert alert-danger">
                                                            {{ Session::get('fail') }}
                                                       </div>
                                                  @endif

                                                  
                                                  <div class="table-responsive">
                                                       
                                                       <table class="display expandable-table" style="width:100%">
                                                            <thead>
                                                                 <tr>
                                                                      <th>No.</th>
                                                                      <th>ID.</th>
                                                                      <th>Name</th>
                                                                      <th>Present</th>
                                                                      <th>Absent</th>
                                                                      <th>Incomplete Day</th>
                                                                      <th>Action</th>
                                                                      <th></th>
                                                                 </tr>
                                                            </thead>
                                                            <tbody>
                                                            

                                                            @foreach ($class as $key => $student)
                                                                 @foreach ($student->getStudents as $list)
                                                                      <tr>
                                                                           <td>{{ ++$key}}</td>
                                                                           <td >
                                                                                {{$list->id}}  
                                                                                <input type="hidden" name="id[]" value="{{$list->id}}">
                                                                           </td>
                                                                           <td class="name">  
                                                                                {{ $list->surname }}, {{ $list->name }} {{ $list->middle_name }}
                                                                                
                                                                           </td>
                                                                           <td>
                                                                                <div class="input-group mb-3">
                                                                                     <div class="input-group-prepend">
                                                                                          <div class="input-group-text">
                                                                                               <a href=""></a>
                                                                                               <input type="checkbox" aria-label="Checkbox for following text input" class="{{$list->id}}" value="Present" name="status[]">
                                                                                          </div>
                                                                                     </div>
                                                                                </div>
                                                                           </td>
                                                                           <td>
                                                                                <div class="input-group mb-3">
                                                                                     <div class="input-group-prepend">
                                                                                          <div class="input-group-text">
                                                                                               <input type="checkbox" aria-label="Checkbox for following text input" class="{{$list->id}}" name="status[]" value="Absent">
                                                                                          </div>
                                                                                     </div>
                                                                                </div>
                                                                           </td>
                                                                           <td>
                                                                                <div class="input-group mb-3">
                                                                                     <div class="input-group-prepend">
                                                                                          <div class="input-group-text">
                                                                                               <input type="checkbox" aria-label="Checkbox for following text input" class="{{$list->id}}" name="status[]" value="INC">
                                                                                          </div>
                                                                                     </div>
                                                                                </div>
                                                                           </td>
                                                                           <td>
                                                                           <input type="text" class="form-control" aria-label="Text input with checkbox" name="description[]" placeholder="Details">

                                                                           <!-- <a href="#" class="btn btn-sm btn-outline-secondary btn-icon-text"> Export Attendance -->
                                                                           
                                                                           </td>
                                                                      </tr>
                                                                 @endforeach
                                                            @endforeach
                                                           
                                                            
                                                            </tbody>
                                                       </table>
                                                       
                                                       </div>
                                                  <div class="modal-footer"> 
                                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</a></button>
                                                  <button type="submit" class="btn btn-primary">Save</button>

                                                       
                                                  </div>
                                             </form>
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