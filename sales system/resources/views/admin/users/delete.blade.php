<div id ="delete{{ $user->id }}" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2">Delete user</h4>
            </div>
            <div class="modal-body">
               <p> are you sure you want to delete {{$user->name}}</p>
               <div>
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="{{ route('users.destroy', ['id' =>$user->id]) }}" class="btn  btn-danger" >
                    <span class="glyphicon glyphicon-trash">delete</span>
                </a>
              </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
