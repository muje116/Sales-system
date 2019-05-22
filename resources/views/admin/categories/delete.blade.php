<div id="delete-modal{{ $category->id }}" role="dialog" class="modal fade modal-warning">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="close"></button>
                <h4>Delete category</h4>
                <div class="modal-body">
                    <p>Are you sure you want to delete {{ $category->cat_name }} category</p>
                    <div class="form-group modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss='modal'>Cancel</button>
                        <a href="{{ route('categories.destroy', ['id' =>$category->id]) }}" class="btn  btn-danger" >
                            <span class="glyphicon glyphicon-trash">Delete</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>