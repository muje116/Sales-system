@extends('layouts.app')

@section('content')
@include('includes.errors')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create New Supplier</div>

                  <form class="form-group" action="{{ route('suppliers.store') }}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="name">Supplier Name</label>
                        <input type="text" name=" supplier_name" class="form-control" id="" value="{{ old('supplier_name') }}">
                      </div>

                      <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" class="form-control" id="email" value="{{ old('email') }}">
                      </div>

                      <div class="form-group">
                        <label for="contact">Contact Number</label>
                        <input type="text" name="contact" class="form-control" id="" value="{{ old('contact') }}">
                        </div>

                        <div class="form-group">
                          <label for="address">Address</label>
                          <textarea name="address" rows="5" cols="6" class="form-control" id="address" value="{{ old('address') }}"></textarea>
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
</div>
@endsection
