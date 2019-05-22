@extends('layouts.front')

@section('page')

    <style type="text/css">
        .stripe-button {
        }
    </style>
    <div class="container-fluid">
        <div class="row medium-padding120 bg-border-color">
            <div class="container">

                <div class="row">

                    <div class="col-lg-12">
                        <div class="order">
                            <div class="cart-total">
                                <h3 class="cart-total-title"> Total: <span class="price">{{ Cart::total() }}</span></h3>
                            </div>

                            <div class="cheque">

                                <div class="logos">
                                    <a href="{{ route('sales.credit') }}"  class="logos-item">
                                        <button  class=" btn btn-xs btn-medium btn--light-green btn-hover-shadow" >
                                            Credit
                                        </button>

                                    </a>
                                    <a href="{{ route('sales.lpo') }}" class="logos-item">
                                        <button  class=" btn btn-xs btn-medium btn--light-green btn-hover-shadow">
                                            LPO
                                        </button>
                                    </a>
                                    <a href="{{ route('sales.cash') }}" class="logos-item">
                                        <button data-toggle="modal" data-target="#credit-modal" class=" btn btn-xs btn-medium btn--light-green btn-hover-shadow">
                                            Cash
                                        </button>
                                    </a>
                                    <a href="{{ route('sales.cheque') }}" class="logos-item">
                                        <button  class="btn btn-xs btn-medium btn--light-green btn-hover-shadow">
                                            Cheque
                                        </button>
                                    </a>

                                </div>
                            </div>
                            <form action="#" method="post" class="cart-main">
                                <table class="shop_table cart">
                                    <thead class="cart-product-wrap-title-main">
                                    <tr>
                                        <th class="product-thumbnail">Product</th>
                                        <th class="product-quantity">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(Cart::content() as $item)
                                    <tr class="cart_item">

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


                            </form>
                                                   </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection
