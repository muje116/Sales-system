
<div id="delete{{ $cus->id }}" class="w3-modal">
    <div class="w3-modal-content w3-animate-right w3-card-8">
        <header class="w3-container w3-orange">
            <button type="button" class="close" data-dismiss="modal" aria-label="close">x</button>

            <h2>Delete Customer</h2>
        </header>
                <div class="modal-body w3-container">
                    <p class="text-orange">Are you sure you want to delete {{ $cus->customer_name }} </p>
                    <div class="form-group modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss='modal'>Cancel</button>
                        <a href="{{ route('admin_delete', ['id' =>$cus->id]) }}" class="btn  btn-danger" >
                            <span class="glyphicon glyphicon-trash">Delete</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>