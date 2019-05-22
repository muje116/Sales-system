@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          @include('includes.errors')
            <div class="panel panel-default">
                <div class="panel-heading">Create New Category</div>

    <div class="panel-body">
          <form class="" action="{{ route('categories.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="cat_name">Name</label>
              <input type="text" name="cat_name" class="form-control" id="" value="{{ old('cat_name') }}">
            </div>
            <div class="form-group">
              <div class="text-center">
                <button type="submit" class="btn btn-success" name="button">Store Category</button>
              </div>
            </div>
          </form>
    </div>

</div>



@endsection
