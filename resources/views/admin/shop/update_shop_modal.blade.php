<div id="update{{$details->id}}" role="dialog" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="close">x</button>
				<h4>Update Shop</h4>
				<div class="modal-body">
                         <form method = "POST" action ="{{ route('shop.update',['id'=>$details->id]) }}" enctype="multipart/form-data">
							{{ csrf_field() }}
							 <div class="form-group">
								 <label for="name">shop name</label>
								 <input type="text" class="form-control" name="name" value="{{ $details->name }}">
							 </div>
							 <div class="form-group">
								 <label for="email">shop number</label>
								 <input type="text" class="form-control" name="email" value="{{ $details->compu_number }}">
							 </div>

							 <div class="form-group">
								 <label for="role">contact</label>
								 <input type="text" class="form-control" name="role" value="{{ $details->contact }}">
							 </div>
							 <div class="form-group">
								 <label for="password">Address</label>
								 <textarea name="address" class="form-group" cols="5" rows="5">{{ $details->address }}</textarea>
							 </div>
							 <div>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button  name = "update" class="btn btn-primary">Save changes</button>
							 </div>
						</form>
						</div>

                      </div>
                    </div>
				</div>

</div>