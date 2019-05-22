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
                                <a class="btn btn-lg btn-warning" href="{{ route('quotations') }}">Back</a>
                            </h1>

                        </section>
                        <div class="panel panel-primary">
                            <div class="panel-heading">Quotation Details </div>
                            <div class="panel-body">

                                <form action="{{ route('quotations.store') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="w3-row-padding">
                                        <div class="form-group w3-half">
                                            <label for="prod_code">Customer Name</label>
                                            <input type="text" class="w3-input w3-border" name="customer" id="" value="{{ old('customer') }}">
                                        </div>
                                        <div class="form-group w3-half">
                                            <label for="name">Quotation Expiry Date</label>
                                            <input type="date" name="expire_date" class="w3-input w3-border" id="" value="{{ old('expire_date') }}">
                                        </div>
                                    </div>
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
