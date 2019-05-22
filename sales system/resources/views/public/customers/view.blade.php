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
                                    <li class="active">Customers</li>

                                </ol>
                                <h1>
                                    <a class="btn btn-lg btn-warning" href="{{ route('home') }}">Back</a>
                                </h1>

                            </section>
                            <h1 class="align-center">{{ $customer->customer_name }}<span class="c-primary"> </span></h1>

                        </div>
                        <form action="#" method="post" class="cart-main">

                            <table id="example1" class="w3-table w3-bordered w3-striped w3-card-4 w3-hoverable">
                                <thead>
                                <tr class="w3-blue">
                                    <th></th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>


                                </tr>
                                </thead>
                                <tbody>

                                <?php #@foreach(Cart::content() as $pdt)?>
                                @foreach($sales as $pdt)


                                    <tr >
                                        <td >

                                        </td>

                                     >
                                        <td>
                                            <div >
                                                <div>
                                                    {{ $pdt->prod_name }}
                                                </div>
                                            </div>
                                        </td>

                                        <td >
                                            {{ $pdt->price }}
                                        </td>

                                        <td class="product-quantity">

                                            <div class="quantity">
                                                <div class="quantity">

                                                    {{ $pdt->qty }}
                                                </div>
                                            </div>

                                        </td>




                                    </tr>


                                @endforeach

                                </tbody>
                                <tfoot>
                                <th colspan="3"> Total</th>
                                <td></td>
                                </tfoot>
                            </table>


                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
    @include('includes.datatable_script')
@endsection

