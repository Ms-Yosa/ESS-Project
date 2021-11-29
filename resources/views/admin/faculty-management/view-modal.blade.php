<div class="modal fade text-left" id="ModalView{{$faculty->id}}" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog" role="document">
          <div class="modal-content" style=" background-color: #F7F8FA">
               <div class="modal-header" style="background-color:#FBD848;letter-spacing: 3px; color:black">
                    <h4 class="modal-title">{{ __('Faculty Information') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div> 
                    <div class="modal-body">
                         <div class="form-body">
                              <div class="row">

                                   <div class="col-md-3">
                                        <label><small><strong>Full Name:</strong></small></label>
                                   </div>
                                   <div class="col-md-9">
                                        <div class="form-group has-icon-left">
                                             <div class="form-control form-control-sm position-relative" >
                                                  <div class="form-control-icon" >
                                                  <i class="la la-user" style="padding-right:5px"></i>
                                                  <span style="border-left:1px solid black; padding-left:10px;">{{ $faculty->name }} {{ $faculty->middle_name }} {{ $faculty->surname }} </span>
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
                                                  <span style="border-left:1px solid black; padding-left:10px;">{{ $faculty->email }}</span>
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
                                                  <span style="border-left:1px solid black; padding-left:10px;">{{ $faculty->gender }}</span>
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
                                                  <span style="border-left:1px solid black; padding-left:10px;">{{ $faculty->birth_month }} {{ $faculty->birth_day }} {{ $faculty->birth_year }}</span>
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
                                                  <span style="border-left:1px solid black; padding-left:10px;">{{ $faculty->age}}</span>
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
                                                  <i class="la-eyedropper" style="padding-right:5px"></i>
                                                  <span style="border-left:1px solid black; padding-left:10px;">{{ $faculty->bloodtype }}</span>
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
                                                  <span style="border-left:1px solid black; padding-left:10px;">{{ $faculty->contact_number }}</span>
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
                                                  <span style="border-left:1px solid black; padding-left:10px;">{{ $faculty->address }}</span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

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