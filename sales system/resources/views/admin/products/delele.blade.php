<div id="delete-modal{{ $product->id }}" role="dialog" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="close"></button>
                <h4>Delete Product</h4>
                <div class="modal-body">
                    <p>Are you sure you want to delete this product</p>
                    <div class="form-group modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss='modal'>Cancel</button>
                        <a  href="{{ route('products.destroy', ['id' =>$product->id]) }}" class="btn  btn-danger" >
                            <span class="glyphicon glyphicon-trash">delete</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>