@extends('layouts.app')

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

                                <a class="btn btn-lg btn-warning" href="{{ route('home') }}">Back</a> <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-black">Add New Custoggmer</button>
                                <a class="w3-btn btn-lg w3-blue w3-border w3-right" href="{{ route('quotations') }}">View Products </a>

                            </h1>
                            <div>
                                <form class="w3-card-8 " action="{{ route('quo.preview')}}" method="post">
                                    <div class="form-group ">
                                        <label for="customer">Customers</label>
                                        <select class="form-control  w3-input w3-border" name="customer_id" id="customer">
                                            @foreach ($customers as $customer)

                                                <option value="{{ $customer->id }}">{{ $customer->customer_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <button class="w3-card w3-green w3-hover-green btn-lg">Enter</button>
                                </form>

                                                 </div>


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

<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-left w3-card-8">
        <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id01').style.display='none'"
            class="w3-closebtn">&times;</span>
            <h2>Add Customer</h2>
        </header>
        <div class="w3-container">
            <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data" class="w3-card-8">
                {{ csrf_field() }}
                <div class="w3-row-padding">
                    <div class="form-group w3-half">
                        <label for="prod_code">Customer Name</label>
                        <input type="text" class="w3-input w3-border" name="customer_name" id="" placeholder="customer name" value="{{ old('customer_name') }}">
                    </div>
                    <div class="form-group w3-half">
                        <label for="name">Company</label>
                        <input type="text" name=" company" class="w3-input w3-border" id="" placeholder="company" value="{{ old('company') }}">
                    </div>
                </div>
                <div class="w3-row-padding">
                    <div class="form-group w3-half">
                        <label for="email">contact</label>
                        <input name="contact" type="number" class="w3-input w3-border" id="price" placeholder="contact" value="{{ old('contact') }}">
                    </div>

                    <div class="form-group w3-half">
                        <label for="quantity">Email</label>
                        <input type="text" name="email" class="w3-input w3-border" id="" value="{{ old('email') }}" placeholder="email">
                    </div>
                </div>
                <div class="w3-row-padding">

                    <fieldset   class="form-group w3-half">
                        <label for="tax">Address</label>
                        <textarea cols="5" rows="5" name="address" class="w3-input w3-border" id="" placeholder="address/location" >{{ old('address') }}</textarea>
                    </fieldset>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>

        </div>
        <footer class="w3-container w3-teal">
            <p>customer</p>
        </footer>
    </div>
</div>
