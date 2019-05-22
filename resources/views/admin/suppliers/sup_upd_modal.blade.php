
<div id="update-modal{{$supplier->id}}" role="dialog" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="close"></button>
                <h4>Update Supplier</h4>
                <div class="modal-body">
                    <form action={{ route('suppliers.update', ['id'=>$supplier->id]) }} method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}


                        <div class="form-group">
                            <label for="supplier_namecontact">Supplier Name</label>
                            <input type="text" class="form-control" name="supplier_name" value="{{ $supplier->supplier_name }}">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" rows="8" cols="20" class="form-control" id="address" >{{ $supplier->address }}</textarea>
                        </div>


                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" type="email"class="form-control" id="email" value="{{ $supplier->email }}">
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="number" class="form-control" name="contact" value="{{ $supplier->contact }}">
                        </div>


                       <div class="form-group modal-footer">
                            <button type="submit" class="btn btn-default" data-dismiss='modal'>Close</button>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                    <div class="">

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>