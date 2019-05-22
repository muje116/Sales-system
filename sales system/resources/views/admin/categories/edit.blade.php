@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          @include('includes.errors')
            <div class="panel panel-default">
                <div class="panel-heading">  Update Category: {{ $category->cat_name }}</div>
                <div class="panel-body">


        <form class="" action="{{ route('categories.update', ['id'=>$category->id]) }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="name">Category Name</label>
              <input type="text" name="cat_name" class="form-control" value="{{ $category->cat_name }}" id="" placeholder="Name">
            </div>
            <div class="form-group">
              <div class="text-center">
                <button type="submit" class="btn btn-success" name="button"> Update Category</button>
              </div>
            </div>
          </form>
    </div>

</div>
</div>
</div>
</div>



@endsection
