@extends('layouts.w3')

@section('content')

    <div class="container-fluid">
        <div class="row bg-border-color medium-padding120">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">

                        <div class="cart">

                            <div>
                                <h1>Local Purchase Order Sales Report</h1>
                            </div>
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

                        <form action="#" method="post" class="cart-main">

                            <table id="example1" class="w3-table w3-bordered w3-striped w3-card-4 w3-hoverable">
                                <thead>
                                <tr class="w3-blue">
                                    <th class="product-thumbnail">Organisation Name</th>
                                    <th class="product-title">LPO Number</th>
                                    <th class="product-price">Point of Contact</th>
                                    <th class="product-quantity">Amount</th>
                                    <th>Status</th>
                                    <th class="product-quantity"></th>
                                </tr>
                                </thead>
                                <tbody>


                                @foreach($lpo as $pdt)


                                    <tr class="cart_item">


                                        <td class="product-thumbnail">

                                            <div class="cart-product__item">
                                                <div class="cart-product-content">
                                                    {{ $pdt->org_name }}
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product-price">
                                                <div class="cart-product-content">
                                                    {{ $pdt->lpo_number }}
                                                </div>
                                            </div>
                                        </td>

                                        <td class="product-price">
                                            {{ $pdt->sales->customer->customer_name }}
                                        </td>

                                        <td class="product-quantity">

                                            <div class="quantity">
                                                <div class="quantity">

                                                    {{ $pdt->sales->amount }}
                                                </div>
                                            </div>

                                        </td>
                                        <td class="product-quantity">

                                            <div class="quantity">
                                                <div class="quantity">

                                                    {{ $pdt->status }}
                                                </div>
                                            </div>

                                        </td>
                                        <td class="product-quantity">
                                            <a href="{{ route('view_lpo', ['sales_id' =>$pdt->sales_id]) }}" class="btn btn-xs btn-info">
                                                <span class="text">view</span>
                                                <i class="seoicon-commerce"></i>
                                            </a>

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
