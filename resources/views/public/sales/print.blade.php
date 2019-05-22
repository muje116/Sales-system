@extends('layouts.w3')

@section('content')

    <div class="container-fluid" onload="window.print();">
        <div class="row bg-border-color medium-padding120">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 ">
                        <section class="content-header no-print">
                            <h1>
                                <a class="btn btn-lg btn-warning" href="{{ route('sales_cus') }}">Back</a>
                            </h1>

                        </section>
                        <h2 class="page-header">
                            <i class="fa fa-globe"></i> Simbi.
                            <small class="pull-right">Date: <?php echo date("M d, Y");?></small>
                        </h2>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                    <div class="col-lg-6 invoice-col">
                        From
                        <address>
                            @foreach($company as $shop)
                                <strong>{{ $shop->name}}</strong><br>
                                {{ $shop->comp_number}}<br>
                                {{ $shop->address}}<br>
                                Phone: {{ $shop->contact}}<br>
                            @endforeach
                        </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-lg-6 invoice-col">
                        To


                            <address>
                                <strong>{{ $customers->customer_name }}</strong><br>
                                Phone: {{ $customers->contact }}<br>
                                Address: {{ $customers->address }}<br>
                                Email: {{ $customers->email }}
                            </address>

                    </div>
                </div>
                <!-- /.row -->

                <!-- Table row -->
                <form action="#" method="post" class="">
                    <div class="row">
                        <div class="">
                            <table class="table table-striped w3-table w3-card-4 w3-hoverable">
                                <thead>
                                <tr class="w3-blue">
                                    <th >Product</th>
                                    <th >Price</th>
                                    <th >Quantity</th>
                                    <th>SubTotal</th>
                                </tr>
                                <tbody>
                                @foreach(Cart::content() as $item)
                                    <tr >

                                        <td class="product-thumbnail">

                                            <div class="cart-product__item">
                                                <div class="cart-product-content">
                                                    <h5 class="cart-product-title">{{ $item->prod_name }}</h5>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="product-quantity">

                                            <div class="quantity">
                                                {{ $item->price }}
                                            </div>

                                        </td>
                                        <td class="product-quantity">

                                            <div class="quantity">
                                                {{ $item->qty }}
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <h5 class="total amount">{{ $item->total() }}</h5>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr class="cart_item total">
                                    <td class="product-thumbnail">
                                        <div class="cart-product-content">
                                            <h5 class="cart-product-title">Total:</h5>
                                        </div>


                                    </td>

                                    <td class="product-quantity">

                                    </td>

                                    <td class="product-subtotal">
                                        <h5 class="total amount">{{ Cart::total() }}</h5>
                                    </td>
                                </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>

                </form>
                <br>
                <br>

                {{--}}<div class="col-xs-6 w3-card-4">
                    <p class="lead"> Valid Until {{ $expire }}</p>

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th style="width:50%">Issued by:</th>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                        </table>
                    </div>
                </div>--}}
                <!-- /.col -->
                <!-- /.row -->
                <br>
                <br>
                <!-- this row will not appear when printing -->
                <div class="row no-print ">
                    <div class="col-xs-12">
                        <br>
                        <a  onclick="window.print()" target="_blank" id="#ele4"class="btn btn-default w3-card-4"><i class="fa fa-print no-print"></i> Print</a>

                    </div>
                </div>

                <!-- /.content -->
                <div class="clearfix"></div>
            </div>
            <!-- /.content-wrapper -->

        </div>
    </div>
@endsection
