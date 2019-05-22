@extends('layouts.w3')

@section('content')

    <div class="container-fluid">
        <div class="row bg-border-color medium-padding120">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">

                        <div class="cart">
                            <section class="content-header">

                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                                    <li class="">Reports</li>
                                    <li class="active">Total sales</li>

                                </ol>
                                <h1>
                                    <a class="btn btn-lg btn-warning" href="{{ route('home') }}">Home</a>
                                    <a class="w3-btn btn-lg w3-blue w3-border " href="{{ route('userRepo') }}">Reports </a>
                                </h1>
                            </section>
                        </div>
                        <div>
                    <p class="w3-right">Cheque For {{ $customer->customer->customer_name  }}</p>


                        </div>

                        <form action="#" method="post" class="cart-main">

                            <table id="example1" class="w3-table w3-bordered w3-striped w3-card-4 w3-hoverable">
                                <thead>
                                <tr class="w3-blue">
                                    <th class="product-thumbnail">Product Code</th>
                                    <th>Product Name</th>
                                    <th class="product-title">Quantity</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Total</th>
                                </tr>
                                </thead>
                                <tbody>

{{-- $ngini = App\SalesProduct::where('sales_id', $customer)->get()
dd($ngini)--}}
                                @foreach($sales as $details)

                                    <tr class="cart_item">


                                        <td class="product-thumbnail">

                                            <div class="cart-product__item">
                                                <div class="cart-product-content">
                                                    {{ $details->product->prod_code }}
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $details->product->prod_name }}</td>
                                        <td>
                                            <div class="product-price">
                                                <div class="cart-product-content">
                                                    {{ $details->qty }}
                                                </div>
                                            </div>
                                        </td>

                                        <td class="product-price">
                                            {{ $details->price }}
                                        </td>

                                        <td class="product-quantity">

                                            <div class="quantity">
                                                <div class="quantity">

                                                    {{$details->price * $details->qty }}
                                                </div>
                                            </div>

                                        </td>

                                    </tr>


                                @endforeach

                                </tbody>
                            </table>


                        </form>

                    </div>

                </div>



                <div class="row pb120">
                    <div class="col-lg-12">
                        {{-- $sales->links() --}}
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
