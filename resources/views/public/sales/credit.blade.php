@extends('layouts.front')
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
@section('page')
    <div class="container-fluid">
        <div class="row bg-border-color medium-padding120">
            <div class="container">
                <div class="row">
                    @include('includes.head')
                    <div class="col-lg-12">
                        <div class="cart-total">
                            <h3 class="cart-total-title"> Credit Sales</h3>
                        </div>
                        <form action="#" method="post" class="cart-main">

                            <table class="shop_table cart">
                                <thead class="cart-product-wrap-title-main">
                                <tr>

                                </tr>
                                </thead>
                                <tbody>

                                <tr class="cart_item">

                                <tr>
                                    <td colspan="5" class="actions">

                                        <div class="">
                                          {{ csrf_field() }}
                                            <div class="">
                                                <label for="name">Customer Name</label>
                                                <input type="text" name=" customer_name" class="email input-standard-grey" id="" value="{{ old('customer_name') }}">
                                            </div>

                                            <div class="">
                                                <label for="email">Email</label>
                                                <input name="email" class="email input-standard-grey" id="email" value="{{ old('email') }}">
                                            </div>

                                            <div class="">
                                                <label for="contact">Contact Number</label>
                                                <input type="text" name="contact" class="email input-standard-grey" id="" value="{{ old('contact') }}">
                                            </div>

                                            <div class="">
                                                <label for="address">Address</label>
                                                <textarea name="address" rows="5" cols="6" class="email input-standard-grey" id="address">{{ old('address') }}</textarea>
                                            </div>

                                               <div class="btn btn-medium btn--breez btn-hover-shadow">
                                                <span class="text">Enter</span>
                                                <span class="semicircle--right"></span>
                                            </div>
                                        </div>

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
    @endsection