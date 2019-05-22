
<div id="update{{$category->id}}" role="dialog" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="close">x</button>
                <h4>Edit Category</h4>
                <div class="modal-body">
                    <form action={{ route('categories.update', ['id'=>$category->id]) }} method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="supplier_namecontact">Category</label>
                            <input type="text" class="form-control" name="cat_name" value="{{ $category->cat_name }}">
                        </div>


                        <div class="form-group modal-footer">
                            <button type="submit" class="btn btn-default" data-dismiss='modal'>Close</button>
                            <button type="submit" class="btn btn-success" id='modal-save'>Store</button>
                        </div>
                    </form>
                    <div class="">

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
