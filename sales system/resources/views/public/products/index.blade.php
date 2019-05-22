@extends('layouts.w3')

@section('content')
    <link href="{{ asset('app/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('app/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <script src="{{ asset('app/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('app/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <div class="container-fluid content">
        <div class="row bg-border-color medium-padding120">
            <div class="container box">
                <div class="row">

                        <div class="col-lg-12">

                        <div class="cart">

                            <h1 class="align-center">Products <span class="c-primary"> </span></h1>

                        </div>
                        <div class="col-md-12" >
                            <section class="content-header">

                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                                    <li class="active">Products</li>

                                </ol>
                                <h1>
                                    <a class="btn btn-lg btn-warning" href="{{ route('home') }}">Back</a>


                                <a href="{{ route('stock.add') }}" class="w3-btn btn-lg w3-blue w3-border">Add Products</a>

                                    <a class="w3-btn btn-lg w3-red w3-border w3-right" href="{{ route('reorder') }}">Reorder <span class="w3-badge w3-yellow">{{ $count }}</span></a>
                                </h1>

                            </section>

                        </div>
                        <div class="box ">

                         <div class="box-body w3-card-2">


                        <form action="#" method="post" class="cart-main">

                            <table id="example1" class="table table-bordered table-hover w3-table w3-bordered w3-striped w3-card-4 w3-hoverable">
                                <thead>
                                <tr class="w3-blue">
                                    <th></th>
                                    <th>Product Code</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity
                                    <th>Reorder</th>
                                    <th>Status</th>

                                </tr>
                                </thead>
                                <tbody>

                                <?php #@foreach(Cart::content() as $pdt)?>
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
                                        <td> @if($pdt->qty < $pdt->reorder)
                                                <div class="">
                                                    {{$pdt->reorder}}
                                                    <span class="badge bg-red"><i></i>Reorder</span>
                                                </div>@else
                                                <div class="">
                                                    {{$pdt->reorder}}
                                                </div>
                                        </td>@endif

                                        <td class="product-quantity">

                                            <div class="quantity">
                                                <div class="quantity">

                                                    @if($pdt->reorder >= $pdt->qty)
                                                       <div style="color: #952116">Reorder</div>
                                                        @else
                                                        <div style="color: #00A000">Normal Level</div>
                                                    @endif
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

                    </div>

                </div>



                    <div class="row pb120">
                        <div class="col-lg-12">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>


</div>
    @include('includes.datatable_script')
    @endsection
