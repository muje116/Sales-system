
<div id="add-modal" role="dialog" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="close"></button>
                <h4>Add new product</h4>
                <div class="modal-body">

                    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="prod_code">Product Code</label>
                            <input type="text" class="form-control" name="prod_code" id="" value="{{ old('prod_code') }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" name=" prod_name" class="form-control" id="" value="{{ old('prod_name') }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Price</label>
                            <input name="price" class="form-control" id="price" value="{{ old('price') }}">
                        </div>

                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="text" name="qty" class="form-control" id="" value="{{ old('qty') }}">
                        </div>
                        <div class="form-group">
                            <label for="tax">Tax</label>
                            <input type="text" name="tax" class="form-control" id="" value="{{ old('tax') }}">
                        </div>
                        <div class="form-group">
                            <label for="reoder">Reorder Point</label>
                            <input name="reorder" type="number" class="form-control" id="" value="{{ old('reorder') }}">
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" name="category_id" id="category">
                                @foreach ($categories as $category)

                                    <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="supplier">Supplier</label>
                            <select class="form-control" name="supplier_id" id="supplier">
                                @foreach ($suppliers as $supplier)

                                    <option value="{{ $supplier->id }}">{{ $supplier->supplier_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                          <div class="form-group modal-footer">
                          <button type="submit" class="btn btn-default" data-dismiss='modal'>Close</button>
                          <button type="submit" class="btn btn-success">Store</button>
                          </div>
                        </div>
                    </form>

                    <div class="">

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
