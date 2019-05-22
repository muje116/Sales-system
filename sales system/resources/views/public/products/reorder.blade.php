@extends('layouts.w3')

@section('content')

    <div class="container-fluid">
        <div class="row bg-border-color medium-padding120">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">

                        <div class="cart">

                            <h1 class="align-center">Products To Be Reordered <span class="c-primary"> </span></h1>

                        </div>
                        <div class="col-md-12" >
                            <section class="content-header">

                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                                    <li class="active">Products</li>

                                </ol>
                                <h1>
                                    <a class="btn btn-lg btn-warning" href="{{ route('home') }}">Back</a>
                                </h1>

                            </section>


                        <form action="#" method="post" class="cart-main">

                            <table id="example1" class="w3-table w3-bordered w3-striped w3-card-4 w3-hoverable">
                                <thead>
                                <tr class="w3-red">
                                    <th></th>
                                    <th>Product Code</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Reorder Point</th>

                                </tr>
                                </thead>
                                <tbody>


                                @foreach($products as $pdt)


                                    <tr >
                                        <td >

                                        </td>

                                        <td>

                                            <div >
                                                <div >
                                                    {{ $pdt->prod_code }}
                                                </div>
                                            </div>
                                        </td>
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

                                        <td class="product-quantity">

                                            <div class="quantity">
                                                <div class="quantity">

                                                    {{ $pdt->reorder }}
                                                </div>
                                            </div>

                                        </td>

                                    </tr>


                                @endforeach

                                </tbody>
                            </table>


                        </form>

                    </div>

                    </d


                    iv>
                    <div class="row pb120">
                        <div class="col-lg-12">

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    @include('includes.datatable_script')
@endsection

