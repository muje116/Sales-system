@extends('layouts.w3')

@section('content')

    <div class="container-fluid">
        <div class="row bg-border-color medium-padding120">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">

                        <div class="cart">

                            <h1 class="align-center">Reports <span class="c-primary"> </span></h1>


                            <div class="col-md-12" >
                                <section class="content-header">

                                    <ol class="breadcrumb">
                                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                                        <li class="active">Products</li>

                                    </ol>
                                    <h1>
                                        <a class="btn btn-lg btn-warning" href="{{ route('home') }}">Home</a>
                                        <a class="w3-btn btn-lg w3-blue w3-border " href="{{ route('userRepo') }}">Reports </a>
                                    </h1>

                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h5 class="w3-center"><b>Inventory Report </b></h5>
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading w3-card-8">Inventory</div>
                            <div class="panel-body">
                                <table id="example1" class="table w3-card-8">
                                    <thead>
                                    <tr class="w3-teal">
                                        <th>No</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>

                                        <th>Reorder</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        @foreach($products as $product)
                                        <td>1</td>
                                        <td>{{ $product->prod_name }}</td>
                                        <td>{{ $product->qty }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td> @if($product->qty < $product->reorder)
                                        <div class="w3-red">
                                                {{$product->reorder}}
                                            <span class="w3-badge w3-red"><i></i>Reorder</span>
                                        </div>@else
                                            <div class="w3-green">
                                                {{$product->reorder}}
                                            </div>

                                        </td>@endif
                                    </tr>
                                        @endforeach






                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection