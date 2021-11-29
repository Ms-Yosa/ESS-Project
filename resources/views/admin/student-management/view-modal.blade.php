<div class="modal fade text-left" id="ModalView{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content" style=" background-color: #F7F8FA">
               <div class="modal-header" style="background-color:#FBD848;letter-spacing: 3px; color:black">
                    <h4 class="modal-title">{{ __('Student Information') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div> 
                    <div class="modal-body">
                         <div class="form-body">
                              <div class="row">
                                   <!-- LEFT COLUMN -->
                                   <div class="col-md-6">
                                        <div class="row">
                                             <div class="col-md-3">
                                                  <label><small><strong>Full Name:</strong></small></label>
                                             </div>
                                             <div class="col-md-9">
                                                  <div class="form-group has-icon-left">
                                                       <div class="form-control form-control-sm position-relative" >
                                                            <div class="form-control-icon" >
                                                            <i class="la la-user" style="padding-right:5px"></i>
                                                            <span style="border-left:1px solid black; padding-left:10px;">{{ $user->name }} {{ $user->middle_name }} {{ $user->surname }} </span>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>

                                             <div class="col-md-3">
                                                  <label><small><strong>Email:</strong></small></label>
                                             </div>
                                             <div class="col-md-9">
                                                  <div class="form-group has-icon-left">
                                                       <div class="form-control form-control-sm position-relative" >
                                                            <div class="form-control-icon" >
                                                            <i class="la la-envelope-o" style="padding-right:5px"></i>
                                                            <span style="border-left:1px solid black; padding-left:10px;">{{ $user->email }}</span>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>

                                             <div class="col-md-3">
                                                  <label><small><strong>Gender:</strong></small></label>
                                             </div>
                                             <div class="col-md-9">
                                                  <div class="form-group has-icon-left">
                                                       <div class="form-control form-control-sm position-relative" >
                                                            <div class="form-control-icon" >
                                                            <i class="la la-venus-mars" style="padding-right:5px"></i>
                                                            <span style="border-left:1px solid black; padding-left:10px;">{{ $user->gender }}</span>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>


                                             <div class="col-md-3">
                                                  <label><small><strong>Birthday:</strong></small></label>
                                             </div>
                                             <div class="col-md-9">
                                                  <div class="form-group has-icon-left">
                                                       <div class="form-control form-control-sm position-relative" >
                                                            <div class="form-control-icon" >
                                                            <i class="la la-birthday-cake" style="padding-right:5px"></i>
                                                            <span style="border-left:1px solid black; padding-left:10px;">{{ $user->birth_month }} {{ $user->birth_day }} {{ $user->birth_year }}</span>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>


                                             <div class="col-md-3">
                                                  <label><small><strong>Age:</strong></small></label>
                                             </div>
                                             <div class="col-md-9">
                                                  <div class="form-group has-icon-left">
                                                       <div class="form-control form-control-sm position-relative" >
                                                            <div class="form-control-icon" >
                                                            <i class="la la-hourglass-half" style="padding-right:5px"></i>
                                                            <span style="border-left:1px solid black; padding-left:10px;">{{ $user->age}}</span>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>


                                             <div class="col-md-3">
                                                  <label><small><strong>Bloodtype:</strong></small></label>
                                             </div>
                                             <div class="col-md-9">
                                                  <div class="form-group has-icon-left">
                                                       <div class="form-control form-control-sm position-relative" >
                                                            <div class="form-control-icon" >
                                                            <i class="la la-eyedropper" style="padding-right:5px"></i>
                                                            <span style="border-left:1px solid black; padding-left:10px;">{{ $user->student_bloodtype }}</span>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <!-- END OF LEFT COLUMN -->

                                   <!-- RIGHT COLUMN -->
                                   <div class="col-md-6">
                                        <div class="row">
                                             <div class="col-md-3">
                                                  <label><small><strong>Guardian:</strong></small></label>
                                             </div>
                                             <div class="col-md-9">
                                                  <div class="form-group has-icon-left">
                                                       <div class="form-control form-control-sm position-relative" >
                                                            <div class="form-control-icon" >
                                                            <i class="la la-users" style="padding-right:5px"></i>
                                                            <span style="border-left:1px solid black; padding-left:10px;">{{ $user->guardian }} {{ $user->guardian_middle_name }} {{ $user->guardian_surname }}</span>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="col-md-3">
                                                  <label><small><strong>Relation:</strong></small></label>
                                             </div>
                                             <div class="col-md-9">
                                                  <div class="form-group has-icon-left">
                                                       <div class="form-control form-control-sm position-relative" >
                                                            <div class="form-control-icon" >
                                                            <i class="la la-link" style="padding-right:5px"></i>
                                                            <span style="border-left:1px solid black; padding-left:10px;">{{ $user->relation }}</span>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="col-md-3">
                                                  <label><small><strong>Bloodtype:</strong></small></label>
                                             </div>
                                             <div class="col-md-9">
                                                  <div class="form-group has-icon-left">
                                                       <div class="form-control form-control-sm position-relative" >
                                                            <div class="form-control-icon" >
                                                            <i class="la la-eyedropper" style="padding-right:5px"></i>
                                                            <span style="border-left:1px solid black; padding-left:10px;">{{ $user->guardian_bloodtype }}</span>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="col-md-3">
                                                  <label><small><strong>Religion:</strong></small></label>
                                             </div>
                                             <div class="col-md-9">
                                                  <div class="form-group has-icon-left">
                                                       <div class="form-control form-control-sm position-relative" >
                                                            <div class="form-control-icon" >
                                                            <i class="la la-university" style="padding-right:5px"></i>
                                                            <span style="border-left:1px solid black; padding-left:10px;">{{ $user->religion }}</span>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="col-md-3">
                                                  <label><small><strong>Phone:</strong></small></label>
                                             </div>
                                             <div class="col-md-9">
                                                  <div class="form-group has-icon-left">
                                                       <div class="form-control form-control-sm position-relative" >
                                                            <div class="form-control-icon" >
                                                            <i class="la la-phone" style="padding-right:5px"></i>
                                                            <span style="border-left:1px solid black; padding-left:10px;">{{ $user->contact_number }}</span>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>


                                             <div class="col-md-3">
                                                  <label><small><strong>Address:</strong></small></label>
                                             </div>
                                             <div class="col-md-9">
                                                  <div class="form-group has-icon-left">
                                                       <div class="form-control form-control-sm position-relative" >
                                                            <div class="form-control-icon" >
                                                            <i class="la la-home" style="padding-right:5px"></i>
                                                            <span style="border-left:1px solid black; padding-left:10px;">{{ $user->address }}</span>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <!-- END OF RIGHT COLUMN -->
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