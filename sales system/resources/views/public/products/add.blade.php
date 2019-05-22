@extends('layouts.w3')

@section('content')

    <div class="container-fluid">
        <div class="row bg-border-color medium-padding120">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">
                        @include('includes.errors')

                        <section class="content-header">

                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                                <li >Products</li>
                                <li class="active">Add</li>
                            </ol>
                            <h1>
                                <a class="btn btn-lg btn-warning" href="{{ route('inventory') }}">Back</a>
                               </h1>

                        </section>
    <div class="panel panel-primary">
        <div class="panel-heading">Add Product</div>
        <div class="panel-body">

            <form action="{{ route('inventory.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="w3-row-padding">
                <div class="form-group w3-half">
                    <label for="prod_code">Product Code</label>
                    <input type="text" class="w3-input w3-border" name="prod_code" id="" value="{{ old('prod_code') }}">
                </div>
                <div class="form-group w3-half">
                    <label for="name">Product Name</label>
                    <input type="text" name=" prod_name" class="w3-input w3-border" id="" value="{{ old('prod_name') }}">
                </div>
            </div>
                <div class="w3-row-padding">
                <div class="form-group w3-half">
                    <label for="email">Price</label>
                    <input name="price" class="w3-input w3-border" id="price" value="{{ old('price') }}">
                </div>

                <div class="form-group w3-half">
                    <label for="quantity">Quantity</label>
                    <input type="text" name="qty" class="w3-input w3-border" id="" value="{{ old('qty') }}">
                </div>
                </div>
                <div class="w3-row-padding">
                <div
                        class="form-group w3-half">
                    <label for="tax">Tax</label>
                    <input type="text" name="tax" class="w3-input w3-border" id="" value="{{ old('tax') }}">
                </div>
                <div class="form-group w3-half">
                    <label for="reoder">Reorder Point</label>
                    <input name="reorder" type="number" class="w3-input w3-border" id="" value="{{ old('reorder') }}">
                </div>
                </div>
                <fieldset class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category_id" id="category">
                        @foreach ($categories as $category)

                            <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                        @endforeach
                    </select>
                </fieldset>
                <fieldset class="form-group">
                    <label for="supplier">Supplier</label>
                    <select class="form-control" name="supplier_id" id="supplier">
                        @foreach ($suppliers as $supplier)

                            <option value="{{ $supplier->id }}">{{ $supplier->supplier_name }}</option>
                        @endforeach
                    </select>
                </fieldset>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
    @endsection
