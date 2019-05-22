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
                                <li class="active">LPO</li>

                            </ol>
                            <h1>
                                <a class="btn btn-lg btn-warning" href="{{ route('home') }}">Back</a>
                            </h1>

                        </section>
                        <div class="cart">

                            <h1 class="align-center">Local Purchase Order <span class="c-primary"> </span></h1>

                        </div>

                        <form action="#" method="post" class="cart-main">

                            <table class="w3-table w3-bordered w3-striped w3-card-4 w3-hoverable">
                                <thead>
                                <tr class="w3-blue">

                                    <th>Organisation Name</th>
                                    <th>Contact</th>
                                    <th>Amount</th>
                                    <th>Due Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php /*@foreach(Cart::content() as $pdt)
                                @foreach($products as $pdt)
                                    */?>

                                <tr >


                                    <td >

                                        <div >
                                            <div >
                                                PSI
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <div >
                                                87654567
                                            </div>
                                        </div>
                                    </td>

                                    <td >
                                        100010
                                    </td>

                                    <td >

                                        <div >
                                            <div>
                                            6 dec
                                            </div>
                                        </div>

                                    </td>
                                    <td >
                                        <div >

                                                <div class="w3-dropdown-hover">
                                                    <button class="w3-btn-block  w3-small w3-orange">More</button>
                                                    <div class="w3-dropdown-content w3-border">
                                                        <a data-toggle="modal" data-target="edit"href="#">View</a>
                                                    </div>
                                                </div>

                                        </div>

                                    </td>


                                </tr>




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


</div>
    </div>

@endsection

