<div class="modal fade text-left" id="Delete{{$admin->id}}" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog" role="document">
          <div class="modal-content" style=" background-color: #F7F8FA">
               <div class="modal-header">
                    <h4 class="modal-title">Are you sure you wanna delete this user?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
                    <div class="modal-body">
                         <p class="text-muted "> This user will be archived.</p>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" style="background-color: #0c223a" data-dismiss="modal">
                              Cancel
                         </button>
                         <form action="{{ route('admin.admin-destroy', $admin->id)}}" method="POST">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger">
                                   Delete
                              </button>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>