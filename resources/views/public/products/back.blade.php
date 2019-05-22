@extends('layouts.front')

@section('page')

    <div class="container-fluid">
        <div class="row bg-border-color medium-padding120">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">

                        <div class="cart">

                            <h3 class="cart-title">Products : <span class="c-primary"> </span></h3>

                        </div>

                        <form action="#" method="post" class="cart-main">

                            <table id="example1" class="shop_table xs cart">
                                <thead class="cart-product-wrap-title-main">
                                <tr>
                                    <th class="product-quantity">.</th>
                                    <th class="product-thumbnail">Product Code</th>
                                    <th class="product-title">Product Name</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>

                                </tr>
                                </thead>
                                <tbody>

                                <?php #@foreach(Cart::content() as $pdt)?>
                                @foreach($products as $pdt)


                                    <tr class="cart_item">
                                        <td class="product-thumbnail">

                                        </td>

                                        <td class="product-thumbnail">

                                            <div class="cart-product__item">
                                                <div class="cart-product-content">
                                                    <h5 class="cart-product-title">{{ $pdt->prod_code }}</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product-price">
                                                <div class="cart-product-content">
                                                    <h5 class="cart-product-title"><{{ $pdt->prod_name }}/h5>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="product-price">
                                            <h5 class="price amount">{{ $pdt->price }}</h5>
                                        </td>

                                        <td class="product-quantity">

                                            <div class="quantity">
                                                <div class="quantity">

                                                    <h5 title="Qty" class="email input-text qty text">{{ $pdt->qty }}</h5>
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
                            {{ $products->links() }}
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
