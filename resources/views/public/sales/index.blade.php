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

                                </ol>
                                <h1>
                                    <a class="btn btn-lg btn-warning" href="{{ route('home') }}">Back</a>
                                    <a class="w3-btn w3-round w3-blue w3-border" href="{{ route('listing',['id'=> $customer->id])  }}">Inventory</a>
                                    <p class="w3-btn w3-right w3-white w3-border w3-border-blue w3-xlarge w3-round">Total: <span class="price">{{ Cart::total() }}</span></p>


                                </h1>
                                <h4 class="w3-right">
                                     <p>Invoice for {{ $customer->customer_name }}</p>
                                </h4>

                            </section>
                        </div>
                      {{--  }}  <form class="" action="{{ route('products.store')}}" method="post">
                          @csrf
                          <div class="input-group">
                            <span class="input-group-addon">code</span>
                            <input type="text" class="form-control" name="prod_code" placeholder="">

                          </div>
                          <div class="input-group">
                            <span class="input-group-addon">quantity</span>
                            <input type="text" class="form-control" name="quantity"placeholder="">

                          </div>
                          <button type="submit" name="button">add</button>
                        </form>--}}
                        <div  class="col-lg-6">
                      <div>
                    <form action="{{ route('malonda')}}" method="post">

                        {{ csrf_field() }}
                     <table class="w3-table w3-bordered w3-striped w3-card-4">
                         <thead class="cart-product-wrap-title-main">
                         <tr>

                         </tr>
                         </thead>
                         <tbody>

                         <tr class="cart_item">

                              <tr>
                                  <td colspan="5" class="actions">

                                      <div class="w3-container w3-light-grey">


                                          <div class="w3-row-padding">

                                              <div class="w3-half">
                                                  <label>Serial Number</label>
                                                  <input class="w3-input w3-border" name="prod_code" type="text" placeholder="Barcode Number">
                                              </div>
                                              <div class="w3-half">
                                                  <label>Quantity</label>
                                                  <input name="quantity" class="w3-input w3-border" type="number" placeholder="quantity">
                                              </div>
                                          </div>
                                          <div  class="w3-container  w3-padding">
                                              <button type="submit" class="btn btn-medium btn--breez btn-hover-shadow w3-btn w3-round-xlarge">Add</button>
                                          </div>


                                      </div>

                                  </td>
                              </tr>

                              </tbody>
                          </table>


                  </form>
                  </div>
                  </div>
                      <br>
                      <br>
                            <div class="col-lg-6">
                <div>
                    <form ng-app="" class="cart-main" action="{{ route('sales.store') }}" method="post">
@csrf
                        <table  class="w3-table w3-bordered w3-striped w3-card-4">
                            <thead class="cart-product-wrap-title-main">
                            <tr>

                            </tr>
                            </thead>
                            <tbody>

                            <tr class="cart_item">

                            <tr>
                                <td colspan="5" class="actions">
                                    <div>
                                       <div class="form-group">
                                            <label for="">Type of Sale</label><br>
                                            <div class="form-check form-check-inline">

                                                <input class="form-check-input"  ng-model="payment_type" style="height:20px;width:20px" type="radio" name="payment_type"  value="cheque"> cheque &nbsp;
                                                <input class="form-check-input"  ng-model="payment_type" style="height:20px;width:20px" type="radio" name="payment_type"  value="lpo"> LPO &nbsp;
                                                <input class="form-check-input"  ng-model="payment_type" style="height:20px;width:20px" type="radio" name="payment_type"  value="credit"> Credit &nbsp;
                                                <input class="form-check-input"  ng-model="payment_type" style="height:20px;width:20px" type="radio" name="payment_type"  value="cash"> Cash &nbsp;

                                              {{-- }}  <a onclick="document.getElementById('id01').style.display='block'" name="payment_type" value="cash" class="btn btn-medium btn--breez btn-hover-shadow w3-btn w3-round-xlarge">cash</a>
                                            --}}    <script>
                                                    function myFunction() {
                                                        //document.getElementById('id01');
                                                         document.location.href =("{{ route('sales.cash') }}");

                                                    }
                                                    @include('public.sales.add')
                                                </script>

                                            </div>
                                        </div>

                                        <div ng-switch="payment_type">
                                            <div ng-switch-when="cheque">
                                                <div class="w3-row-padding">
                                                    <div class="w3-half">
                                                        <label>Cheque Number</label>
                                                        <input class="w3-input w3-border" name="cheque_number" type="text" placeholder="Cheque Number">
                                                    </div>
                                                    <div class="w3-half">
                                                        <label>Bank</label>
                                                        <input name="bank" class="w3-input w3-border" type="text" placeholder="Bank Held">
                                                    </div>
                                                </div>
                                                </div>
                                            <div ng-switch-when="lpo">
                                                <div class="w3-row-padding">
                                                    <div class="w3-half">
                                                        <label>LPO Number</label>
                                                        <input class="w3-input w3-border" name="lpo_number" type="text" placeholder="LPO Number">
                                                    </div>
                                                    <div class="w3-half">
                                                        <label>Organisation</label>
                                                        <input name="organisation" class="w3-input w3-border" type="text" placeholder="Organisation">
                                                    </div>
                                                </div>
                                            </div>
                                            <div ng-switch-when="credit">
                                                <div class="w3-row-padding">
                                                    <div class="w3-half">
                                                        <label>Date Due</label>
                                                        <input class="w3-input w3-border" name="due_date" type="date" placeholder="Due Date">
                                                    </div>
                                                    </div>
                                                </div>
                                          <div ng-switch-when="cash">
                                                <div class="w3-row-padding">
                                                    <div class="w3-half">
                                                        <label>Cash Tendered</label>
                                                        <input class="w3-input w3-border" name="amount" type="number" placeholder="Cash Tendered">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                     {{--}}   <input onclick="document.getElementById('id01').style.display='block'" class="w3-radio" type="radio" name="cheque" value="female">
                                        <label class="w3-validate">Cheque</label>
--}


{{--
                                        <div class="btn btn-medium btn--breez btn-hover-shadow w3-btn w3-round-xxlarge">
                                            <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn">Payment</button>
                                        </div>@include('public.sales.payModal')--}}
                                    </div>
                                    <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                                    <div  class="w3-container  w3-padding">
                                        <button type="submit" class="btn btn-medium btn--breez btn-hover-shadow w3-btn w3-round-xlarge">Pay</button>
                                    </div>

                                </td>
                            </tr>

                            </tbody>
                        </table>


                    </form>
                </div>
                      <br>
                      <br>
                  </div>
                      <div class="col-lg-12">
                            <form action="#" method="post">

                                <table id="select-2" class="w3-table w3-bordered w3-striped w3-card-4 w3-hoverable">
                                    <thead>
                                    <tr class="w3-blue">
                                        <th>&nbsp;</th>
                                        <th >Product</th>
                                        <th >Price</th>
                                        <th >Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach(Cart::content() as $pdt)


                                        <tr >

                                            <td class="product-remove">
                                                <a href="{{ route('cart.delete' , ['id' => $pdt->rowId]) }}" class="product-del remove btn-danger" title="Remove this item">
                                                    x <i class="seoicon-delete-bold"></i>
                                                </a>
                                            </td>

                                            <td>

                                                <div>
                                                    <?php /* <a href="#">
                                                <img src="{{ asset($pdt->model->image) }}" alt="product" width="50px" height="50px" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
                                            </a> */ ?>
                                                    <div >
                                                        {{ $pdt->prod_name }}
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                {{ $pdt->price }}
                                            </td>

                                            <td>

                                                <div>
                                                    <a href="{{ route('cart.decr' , ['id' => $pdt->rowId, 'qty' =>$pdt->qty ]) }}" class="quantity-minus w3-btn w3-tiny w3-red">-</a>
                                                    <input title="Qty" class="email input-text qty text w3-btn w3-white w3-border w3-border-blue w3-small w3-round" value="{{ $pdt->qty }}" type="text" placeholder="1" readonly>
                                                    <a href="{{ route('cart.incr' , ['id' => $pdt->rowId, 'qty' =>$pdt->qty ]) }}" class="quantity-plus w3-btn w3-tiny w3-green">+</a>
                                                </div>

                                            </td>

                                            <td class="product-subtotal">
                                                <h5 class="total amount">{{ $pdt->total() }}</h5>
                                            </td>

                                        </tr>


                                    @endforeach

                                    </tbody>
                                </table>


                            </form>
    </div>

                          <div class="cart-total">
                              <h3 class="w3-btn w3-white w3-border w3-border-blue w3-xlarge w3-round">Total: <span class="price">{{ Cart::total() }}</span></h3>
                              <br>
                          </a>
                          </div>

                          </div>

                          </div>
                          </div>
                          </div>

        @include('includes.datatable_script')


                          @endsection
