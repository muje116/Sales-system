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
                                    <li>Quotations</li>

                                </ol>
                                <h1>
                                    <a class="btn btn-lg btn-warning" href="{{ route('home') }}">Back</a>
                                    <a class="w3-btn btn-lg w3-blue w3-border " href="{{ route('quo.list') }}">Quotations </a>

                                </h1>

                            </section>
                           </div>




    <div>

      <h3  class="w3-left">Quotation for {{ $name}}</h3>



    <h3  class="w3-right">Valid Until {{ $date }}</h3>


  </div>
    <div class="w3-container">

         <table class="w3-table w3-bordered w3-striped w3-card-4 w3-hoverable">
              <thead>
              <tr class="w3-blue">
                  <th class="product-title">Product Name</th>
                  <th class="product-price">Price</th>
                  <th class="product-quantity">Quantity</th>
                  <th>Total</th>
                   </tr>
              </thead>
              <tbody>




              @foreach ($quota as $cus)
              <tr class="cart_item">
                <td>
                      <div class="product-price">
                          <div class="cart-product-content">
                              {{ $cus->product->prod_name }}
                          </div>
                      </div>
                  </td>

                  <td class="product-price">
                      {{ $cus->product->price }}
                  </td>

                  <td class="product-quantity">

                      <div class="quantity">
                          <div class="quantity">

                              {{ $cus->qty }}
                                                                         </div>
                      </div>

                  </td>
                  <td class="product-quantity">
                    {{ $cus->product->price * $cus->qty }}

                  </td>

              </tr>

@endforeach

              </tbody>
          </table>

<div class="no-print">
    <button class="w3-btn w3-green fa fa-print" onclick="window.print()">print</button>
</div>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
