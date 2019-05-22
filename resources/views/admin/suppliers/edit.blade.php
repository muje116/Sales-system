@extends('layouts.app')

@section('content')
@include('includes.errors')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                  <form action="{{ route('suppliers.update', ['id'=>$supplier->id]) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                  <div class="form-group">
                    <label for="supplier_namecontact">Supplier Name</label>
                    <input type="text" class="form-control" name="supplier_name" value="{{ $supplier->supplier_name }}">
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <textarea name="address" rows="8" cols="20" class="form-control" id="address" value="{{ $supplier->address }}"></textarea>
                    </div>


                    <div class="form-group">
                      <label for="email">Email</label>
                      <input name="email" type="email"class="form-control" id="email" value="{{ $supplier->email }}">
                    </div>
                    <div class="form-group">
                      <label for="contact">Contact</label>
                      <input type="number" class="form-control" name="contact" value="{{ $supplier->contact }}">
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
