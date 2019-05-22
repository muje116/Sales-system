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
                            <h1 class="w3-center w3-text-amber"> Credit Customers <span class="c-primary"> </span></h1>


                        </div>


                        <form action="#" method="post">

                            <table id="example1" class="w3-table w3-bordered w3-striped w3-card-4 w3-hoverable">
                                <thead>
                                <tr class="w3-blue">

                                    <th>Customer Name</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Amount Owing</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if ($customers->count() > 0)
                                @foreach($customers as $pdt)


                                    <td class="product-thumbnail">
z
                                        <div class="cart-product__item">
                                            <div class="cart-product-content">
                                                {{ $pdt->sales->customer->customer_name }}
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $pdt->sales->customer->contact }}</td>
                                    <td>{{ $pdt->sales->customer->address }}</td>
                                    {{--}}<td>
                                        <div class="product-price">
                                            <div class="cart-product-content">
                                                {{ $pdt->bank }}
                                            </div>
                                        </div>
                                    </td>--}}

                                    <td class="product-price">
                                        {{ $pdt->sales->amount }}
                                    </td>
                                    <td>{{ $pdt->due_date }}</td>
                                    <td class="product-quantity">

                                        <div class="quantity">
                                            <div class="quantity">

                                                {{$pdt->status }}
                                            </div>
                                        </div>

                                    </td>
                                    <td>
                                           <a href="{{ route('view_cheque', ['id' =>$pdt->sales_id]) }}" class="btn btn-xs btn-info">View</a>
                                       </td>

                                    </tr>
                                @endforeach
                                @else
                                <tr>
                                    <th colspan="5" class="text-center">No customers yet</th>
                                </tr>
                                @endif


                                </tbody>
                            </table>


                        </form>

                    </div>

                    </div>
                    <div class="row pb120">
                        <div class="col-lg-12">

                        </div>
                    </div>
                </div>
            </div>


</div>
@endsection

<?php /*
 <div class="container">
        <div class="row pt120">
            <div class="books-grid">

            <div class="row mb30">
            @foreach($products as $product)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="books-item">
                        <div class="books-item-thumb">
                            <img src="{{ asset($product->image) }}" alt="book">
                            <div class="new">New</div>
                            <div class="sale">Sale</div>
                            <div class="overlay overlay-books"></div>
                        </div>

                        <div class="books-item-info">
                          <a href="{{ route('products.single', ['id' => $product->id]) }}">
                            <h5 class="books-title">{{ $product->name}}</h5>
</a>
                            <div class="books-price">${{ $product->price}}</div>
                        </div>

                        <a href="{{ route('rapid.add', ['id' =>$product->id]) }}" class="btn btn-small btn--dark add">
                            <span class="text">Add to Cart</span>
                            <i class="seoicon-commerce"></i>
                        </a>

                    </div>
                </div>
                @endforeach
            </div>

            <div class="row pb120">
              <div class="col-lg-12">
                {{ $products->links() }}
              </div>




            </div>
        </div>
        </div>
    </div>
@endsection
 */?>
