@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
          @include('includes.errors')
            <div class="panel panel-default">
                <div class="panel-heading">Create New Product</div>

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
                        <input type="text" name="quantity" class="form-control" id="" value="{{ old('quantity') }}">
                        </div>
                        <div class="form-group">
                          <label for="tax">Tax</label>
                          <input type="text" name="tax" class="form-control" id="" value="{{ old('tax') }}">
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
                          <label for="description">Reorder</label>
                          <input name="integer" class="form-control" id="integer" value="{{ old('integer') }}">
                        </div>
                        <div class="form-group">

                        <div class="text-center">
                          <button type="submit" class="form-group btn btn-success"  >Save Supplier</button>
                        </div>
                      </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
