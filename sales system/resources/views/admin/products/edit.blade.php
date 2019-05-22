$products@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          @include('includes.errors')
            <div class="panel panel-default">
                <div class="panel-heading">Update Products</div>
                <div class="panel-body">
                  <form action="{{ route('products.update', ['id'=>$products->id]) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <label for="product_code">Product Code</label>
                      <input type="text" class="form-control" name="product_code" value="{{ $products->product_code }}">
                      </div>
                  <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" class="form-control" name="product_name" value="{{ $products->product_name }}">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <input name="integer"  class="form-control" id="integer" value="{{ $products->integer }}">
                    </div>
                    <div class="form-group">
                      <label for="price">Price</label>
                      <input name="price" type="number"class="form-control" id="price" value="{{ $products->price }}">
                    </div>
                    <div class="form-group">
                      <label for="quantity">Quantity</label>
                      <input type="number" class="form-control" name="quantity" value="{{ $products->quantity }}">
                    </div>
                    <div class="form-group">
                      <label for="tax">Tax</label>
                      <input type="text" name="tax" class="form-control" id="" value="{{ $products->tax }}">
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
                          <button type="submit" name="button" class="form-control btn btn-success">Update Supplier</button>
                        </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
