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
                                    <a href="{{ route('customer.add') }}" class="w3-btn btn-lg w3-blue w3-border w3-right">Add Customer</a>
                                </h1>

                            </section>
                            <h1 class="w3-center w3-text-blue">Customers List<span class="c-primary"> </span></h1>

                        </div>
                        <form action="#" method="post" class="cart-main">

                            <table id="example1" class="w3-table w3-bordered w3-striped w3-card-4 w3-hoverable">
                                <thead>
                                <tr class="w3-blue">

                                    <th>Customer Name</th>
                                    <th>Number</th>
                                    <th>Email</th>
                                    <th>Address</th>
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

                                            @endforeach
                                        </tr>

                                        @else
                                            <tr>
                                                <th colspan="5" class="text-center">No customers yet</th>
                                            </tr>
                                        @endif


                                </tbody>
                            </table>


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



@endsection
