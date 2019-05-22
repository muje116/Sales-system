@extends('layouts.w3')

@section('content')

    <div class="container-fluid">
        <div class="row bg-border-color medium-padding120">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">

                        <section class="content-header">

                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                                <li class="active">Products</li>
                                <li>Quotations</li>

                            </ol>
                            <h1>

                                <a class="btn btn-lg btn-warning" href="{{ route('home') }}">Back</a>
  {{--                               <a  class="w3-btn btn-lg w3-blue w3-border" style="color:#fff;" href="{{ route('quo.cus') }}" >Add New Customer</a>--}}

                                <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn btn-lg w3-blue w3-border">Add Customer</button>

                                <a class="w3-btn btn-lg w3-blue w3-border w3-right" href="{{ route('quotations') }}">View Products </a>

                            </h1>
                            @include('public.quotations.add')
                            <div>
                                <form class="w3-card-8 " action="{{ route('record')}}" method="post">
                                  {{ csrf_field() }}
                                    <div class="w3-row-padding">
                                    <div class="w3-half ">
                                        <label for="customer">Customers</label>
                                        <select class="  w3-input w3-border w3-animate-input" name="customer_id">
                                            @foreach ($customers as $customer)

                                                <option value="{{ $customer->id }}">{{ $customer->customer_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="w3-half">
                                        <label>Valid Until</label>
                                        <input class="w3-input w3-border" type="date" placeholder="Date" name="expire_date">
                                    </div>
                                </div>
                                    <button type="submit" class="w3-btn btn-lg w3-blue w3-border ">Generate</button>
                                </form>

                            </form>


                        </section>
                        <div>

                            <h1 >Number of Items: <span class="c-primary"> {{ Cart::content()->count() }}</span></h1>

                        </div>


                        <form action="#" method="post">

                            <table class="w3-table w3-bordered w3-striped w3-card-4 w3-hoverable">
                                <thead>
                                <tr class="w3-blue">
                                    <th>&nbsp;</th>
                                    <th >Product</th>
                                    <th >Price</th>
                                    <th >Quantity</th>
                                    <th>SubTotal</th>
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

                        <div class="align-center">

                            <h3 class="w3-btn w3-white w3-border w3-border-blue w3-xlarge w3-round">Total: <span class="price">{{ Cart::total() }}</span></h3>
                            <br>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('includes.datatable_script')
@endsection
