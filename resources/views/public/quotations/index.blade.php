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
                                    <li class="active">Products</li>

                                </ol>
                                <h1>
                                    <a class="btn btn-lg btn-warning" href="{{ route('home') }}">Back</a>
                                    <a class="w3-btn btn-lg w3-blue w3-border " href="{{ route('quo.list') }}">View Quotations </a>

                                </h1>
                                <h1>
                                    <a class="w3-btn btn-lg w3-blue w3-border w3-right" href="{{ route('cart') }}">View Cart <span class="w3-badge w3-green">{{ Cart::content()->count() }}</span></a>
                                </h1>

                            </section>
                           </div>

                        <form action="#" method="post" class="cart-main">

                            <table id="example1" class="w3-table w3-bordered w3-striped w3-card-4 w3-hoverable">
                                <thead>
                                <tr class="w3-blue">
                                      <th class="product-thumbnail">Product Code</th>
                                    <th class="product-title">Product Name</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-quantity"></th>
                                     </tr>
                                </thead>
                                <tbody>

                                  <?php #@foreach(Cart::content() as $pdt)?>
                                      @foreach($products as $pdt)


                                <tr class="cart_item">


                                    <td class="product-thumbnail">

                                        <div class="cart-product__item">
                                            <div class="cart-product-content">
                                                {{ $pdt->prod_code }}
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product-price">
                                            <div class="cart-product-content">
                                                {{ $pdt->prod_name }}
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
                                    <td class="product-quantity">
                                        <a href="{{ route('rapid.add', ['id' =>$pdt->id]) }}" class="w3-btn w3-round-large">
                                            <span class="text">Add to Cart</span>
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
                    {{ $products->links() }}
                  </div>
            </div>
        </div>
    </div>

        </div>

@endsection
