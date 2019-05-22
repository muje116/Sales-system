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
                                <a class="btn btn-lg btn-warning" href="{{ route('customer_list') }}">Back</a>
                            </h1>

                        </section>
                        <div class="panel panel-primary w3-card-12">
                            <div class="panel-heading">Add Customer</div>
                            <div class="panel-body">

                                <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data" class="w3-card-8">
                                    {{ csrf_field() }}
                                    <div class="w3-row-padding">
                                       @include('public.partials.customer')
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
