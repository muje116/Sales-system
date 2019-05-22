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
                                    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                                    <li> <a href="{{ route('quotations') }}"class="active">Quotations</a></li>

                                </ol>
                                <h1>
                                    <a class="btn btn-lg btn-warning" href="{{ route('quotations') }}">Back</a>
                                </h1>
                            </section>
                            <h1 class="w3-center w3-text-amber">Quotations<span class="c-primary"> </span></h1>

                        </div>
                        <form action="#" method="post" class="cart-main w3-card-8">

                <!-- Example DataTables Card-->
                <div class="">
                    <div class="">

                    <div class="">
                        <div class="">
                            <table id="example1" class="table-bordered w3-table w3-bordered w3-striped w3-card-4 w3-hoverable" >
                                <thead>
                                <tr class="w3-blue">

                                <th>Customer Name</th>
                                    <th>Phone Number</th>
                                    <th>Date Issued</th>
                                    <th>Valid Until</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @if ($quotations->count() > 0)
                                    @foreach($quotations as $cus)


                                        <tr >


                                            <td >

                                                <div >
                                                    <div >
                                                        {{ $cus->customer->customer_name }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <div >
                                                        {{ $cus->customer->contact }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <div >
                                                        {{ $cus->created_at }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <div >
                                                            {{ $cus->expire_date }}

                                                    </div>
                                                </div>
                                            </td>

                                            <td class="product-quantity">
                                                <a  class="w3-btn w3-round-large" href="{{ route('quo.details',['id'=> $cus->id]) }}">
                                                    <span class="text">view</span>
                                                    <i class="seoicon-commerce"></i>
                                                </a>

                                            </td>
                                            {{--  }}@include('public.quotations.list')--}}
  @endforeach
                                        </tr>

                                        @else
                                            <tr>
                                                <th colspan="5" class="text-center">No Quotations yet</th>
                                            </tr>
                                        @endif


                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                </div>
                        </form>

                    </div>





                    <div class="row pb120">
                        <div class="col-lg-12">

                        </div>
                    </div>
                </div>
            </div>


</div>
    </div>
@endsection
