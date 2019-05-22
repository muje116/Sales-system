@extends('layouts.w3')

@section('content')

    <div class="container-fluid">
        <div class="row bg-border-color medium-padding120">
            <div class="container">
                <br class="row">

                <div class="col-lg-12">

                    <div class="cart">
                        <section class="content-header">

                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                                <li class="active">Sales</li>
                                <li class="active">Cash</li>

                            </ol>

                        </section>
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
                                                <h4 for="name">Total Amount</h4>
                                                <p class="w3-btn  w3-white w3-border w3-border-blue w3-xlarge w3-round">Total: <span class="price">{{ Cart::total() }}</span></p>

                                            </div>
                                            <div class="">
                                                <label for="contact">Amount Paid</label>
                                                <input type="number" name="amount" class="w3-input w3-border" id="" value="{{ old('amount') }}">
                                            </div>


                                            <div>
                                                <label>Change</label>
                                                <p class="w3-btn  w3-white w3-border w3-border-blue w3-xlarge w3-round"> <span class="price">mullr apa</span></p>

                                            </div>

                                            <div  class="w3-container  w3-padding">
                                                <button type="submit" class="btn btn-medium btn--breez btn-hover-shadow w3-btn w3-round-xlarge">Enter</button>
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
@endsection
    </div>
        <div id="id01" class="w3-modal">
            <div class="w3-modal-content w3-animate-left w3-card-8">
                <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id01').style.display='none'"
            class="w3-closebtn">&times;</span>
                    <h2>Add Customer</h2>
                </header>
                <div class="w3-container">
                    <form action="{{ route('sales.store') }}" method="post" enctype="multipart/form-data" class="w3-card-8">
                        {{ csrf_field() }}
                        <div class="w3-row-padding">
                            <div class="form-group w3-half">
                                <label for="prod_code">Amount Paid</label>
                                {{ $amount = 'amount' }}
                                <p class="w3-btn  w3-white w3-border w3-border-blue w3-xlarge w3-round"> <span class="price">{{ $amount }}</span></p>
                            </div>
                            <div class="form-group w3-half">
                                {{ $change = $amount - Cart::total() }}
                                <label for="name">Change</label>
                                <p class="w3-btn  w3-white w3-border w3-border-blue w3-xlarge w3-round"> <span class="price">{{ $change }}</span></p>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Finish</button>
                    </form>

                </div>
                <footer class="w3-container w3-teal">
                    <p>sales</p>
                </footer>
            </div>
        </div>
