@extends('layouts.w3')

@section('content')

    <div class="container-fluid w3-card-2">
        <div class="row bg-border-color medium-padding120">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">

                        <div class="cart">
                            <section class="content-header">

                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                                    <li class="">Reports</li>
                                    <li class="active">LPO</li>
                                    <li>View details</li>

                                </ol>
                                <h1>
                                    <a class="btn btn-lg btn-warning" href="{{ route('home') }}">Home</a>
                                    <a class="w3-btn btn-lg w3-blue w3-border " href="{{ route('userRepo') }}">Reports </a>
                                </h1>

                            </section>
                        </div>

                        <form action="#" method="post" class="cart-main ">
                            <h4 class="w3-right">
                                <p>LPO for {{ $customer->customer->company  }}</p>
                            </h4>
                            <table id="example1" class="w3-table w3-bordered w3-striped w3-card-4 w3-hoverable w3-card-8">
                                <thead>
                                <tr class="w3-blue">
                                    <th class="product-thumbnail">Product Code</th>
                                    <th class="product-title">Product Name</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-quantity">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sales as $pdt)
                                    {{-- dd($sales) --}}



                                    <tr class="cart_item">


                                        <td class="product-thumbnail">

                                            <div class="cart-product__item">
                                                <div class="cart-product-content">
                                                    {{ $pdt->product->prod_code }}
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product-price">
                                                <div class="cart-product-content">
                                                    {{ $pdt->product->prod_name }}
                                                </div>
                                            </div>
                                        </td>

                                        <td class="product-price">
                                            {{ $pdt->price }}
                                        </td>

                                        <td class="product-quantity">

                                            <div class="quantity">
                                                <div class="quantity">

                                                    {{ $pdt->qty }}
                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            {{ $pdt->qty * $pdt->price }}
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
