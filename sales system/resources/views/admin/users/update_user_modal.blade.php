<div id = "update{{ $user->id }}" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
					 <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Edit User Details</h4>
                        </div>
                        <div class="modal-body">
                         <form method = "POST" action = "{{ route('users.update',['id'=>$user->id]) }}">
							{{ csrf_field() }}
							 <div class="form-group">
								 <label for="name">Fullname</label>
								 <input type="text" class="form-control" name="name" value="{{ $user->name }}">
							 </div>
							 <div class="form-group">
								 <label for="email">Email</label>
								 <input type="text" class="form-control" name="email" value="{{ $user->email }}">
							 </div>
							 <div>
								<label for="password">Password</label>
									<input type="password" name = "password" class="form-control" placeholder="Enter to Change Password">
							 </div>
							 <div class="form-group">
								 <label for="role">Role</label>
								 <input type="text" class="form-control" name="role" value="{{ $user->role }}">
							 </div>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button  name = "update" class="btn btn-primary">Save changes</button>
						</form>
						</div>
                        <div class="modal-footer">

                        </div>
                      </div>
                    </div>
				</div>


				<div id ="#delete{{ $user->id }}" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
				    <div class="modal-dialog modal-sm">
				        <div class="modal-content">

				            <div class="modal-header">
				                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				                </button>
				                <h4 class="modal-title" id="myModalLabel2">Delete user</h4>
				            </div>
				            <div class="modal-body">
				               <p> are you sure you want to delete {{$user->name}}</p>
				                <a href="{{ route('users.destroy', ['id' =>$user->id]) }}" class="btn  btn-danger" >
				                    <span class="glyphicon glyphicon-trash">delete</span>
				                </a>
				            </div>
				            <div class="modal-footer">

				            </div>
				        </div>
				    </div>
				</div>
