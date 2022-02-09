<div class="modal fade text-left" id="ModalView{{$class->class_id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style=" background-color: #F7F8FA">
                <div class="modal-header" style="background-color:#FBD848;letter-spacing: 3px; color:black">
                    <h4 class="modal-title">{{ __('Class Information') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                   <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <!-- LEFT COLUMN -->
                                <div class="col-md-3">
                                    <label><small><strong>Teacher:</strong></small></label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group has-icon-left">
                                        <div class="form-control form-control-sm position-relative" >
                                                <div class="form-control-icon" >
                                                <i class="la la-user" style="padding-right:5px"></i>
                                                <span style="border-left:1px solid black; padding-left:10px;">{{ $class->getInstructor->faculty_name  ?? 'Unassigned'  }}</span>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END OF LEFT COLUMN -->

                                <!-- RIGHT COLUMN -->
                                <div class="col-md-3">
                                <label><small><strong>Level:</strong></small></label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group has-icon-left">
                                        <div class="form-control form-control-sm position-relative" >
                                                <div class="form-control-icon" >
                                                    <i class="la la-user" style="padding-right:5px"></i>
                                                    <span style="border-left:1px solid black; padding-left:10px;">{{ $class->level }}</span>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END OF RIGHT COLUMN -->
                                <div class="col-md-3">
                                    <label><small><strong>Subjects:</strong></small></label>
                                    </div>
                                    <div class="col-md-9">
                                        <div>
                                            <div class="form-control form-control-sm position-relative" >
                                                    <div class="form-control-icon" >
                                                        @foreach ($class->getSubArea as $subArea)
                                                            <span><strong>{{ $subArea->name }}</strong></span>
                                                            <br>
                                                            @foreach ($class->getSubjects as $subj)
                                                            <span>{{ $subj->subject_name }}</span>
                                                            @endforeach
                                                        @endforeach
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>


                        <div class="row m-2 p-2">
                            <div class="table-responsive">
                                <table id="example3" class="display ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($class->getStudents as $k =>  $item)
                                        <tr>
                                            <td>{{ ++$k }}</td>
                                            <td>{{ $item->name }} {{ $item->surname}}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->gender }}</td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                   </div>

                   <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" style="background-color: #0c223a" data-dismiss="modal">Close</button>
                   </div>
        </div>
    </div>
    </div>
</div>