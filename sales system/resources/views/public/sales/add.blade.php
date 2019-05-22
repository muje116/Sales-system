{{--}}@extends('layouts.w3')

@section('content')

    <div class="container-fluid">
        <div class="row bg-border-color medium-padding120">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">
                        @include('includes.errors')

                        <section class="content-header">

                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                                <li >Products</li>
                                <li class="active">Add</li>
                            </ol>
                            <h1>
                                <a class="btn btn-lg btn-warning" href="{{ route('customer_list') }}">Back</a>
                            </h1>

                        </section>
                        <div class="panel panel-primary w3-card-12">
                            <div class="panel-heading"></div>
                            <div class="panel-body">

                             </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection--}}
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-left w3-card-8">
        <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id01').style.display='none'"
            class="w3-closebtn">&times;</span>
            <h2>Add Customer</h2>
        </header>
        <div class="w3-container">
            <form action="{{ route('salo') }}" method="post" enctype="multipart/form-data" class="w3-card-8">
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
