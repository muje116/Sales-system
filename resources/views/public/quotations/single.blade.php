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
                                <div>
                                    <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-green">Add Customer</button>
                                </div>
                            </section>
                            <h1 class="align-center">Customers List<span class="c-primary"> </span></h1>

                        </div>
                        <form action="#" method="post" class="cart-main">

                            <!-- Example DataTables Card-->
                            <div class="card mb-3">
                                <div class="card-header">
                                    <i class="fa fa-table"></i> Data Table Example</div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered w3-table w3-bordered w3-striped w3-card-4 w3-hoverable" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                            <tr class="w3-blue">

                                                <th>Customer Name</th>
                                                <th>Number</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Company</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            @if ($customers->count() > 0)
                                                @foreach($customers as $cus)


                                                    <tr >


                                                        <td >

                                                            <div >
                                                                <div >
                                                                    {{ $cus->customer_name }}
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <div >
                                                                    {{ $cus->contact }}
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <div >
                                                                    {{ $cus->email }}
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <div >
                                                                    @if($cus->company == null)
                                                                        null
                                                                    @else
                                                                        {{ $cus->company }}
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td >
                                                            {{ $cus->address }}
                                                        </td>

                                                        <td class="product-quantity">
                                                            <a href="{{ route('quotations', ['id' =>$cus->id]) }}" class="w3-btn w3-round-large">
                                                                <span class="text">Select</span>
                                                                <i class="seoicon-commerce"></i>
                                                            </a>

                                                        </td>
                                                        @endforeach
                                                    </tr>

                                                    @else
                                                        <tr>
                                                            <th colspan="5" class="text-center">No customers yet</th>
                                                        </tr>
                                                    @endif


                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                    </d


                    iv>
                    <div class="row pb120">
                        <div class="col-lg-12">

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-bottom w3-card-8">
        <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id01').style.display='none'"
            class="w3-closebtn">&times;</span>
            <h2>Add Customer</h2>
        </header>
        <div class="w3-container">
            <form action="{{ route('quotations.store') }}" method="post" enctype="multipart/form-data" class="w3-card-8">
                {{ csrf_field() }}
                <div class="w3-row-padding">
                    <div class="form-group w3-half">
                        <label for="prod_code">Customer Name</label>
                        <input type="text" class="w3-input w3-border" name="customer" id="" placeholder="customer name" value="{{ old('customer') }}">
                    </div>
                    <div class="form-group w3-half">
                        <label for="name">Company</label>
                        <input type="text" name=" expire_date" class="w3-input w3-border" id="" placeholder="Date to Exipre" value="{{ old('expiry_date') }}">
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