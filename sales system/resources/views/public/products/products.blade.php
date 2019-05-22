@extends('layouts.w3)
@section('content')
<br>
<div class="row">

    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Products</div>
            <div class="panel-body">
                @include('includes.errors')
                <table id="example1" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>.</th>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php /*@foreach($products as $pdt)*/?>
                    <tr>
                        <td></td>
                      <?php/*  <td>{{ $pdt->prod_code }}</td>
                        <td>{{ $pdt->prod_name }}</td>
                        <td>{{ $pdt->price }}</td>
                        <td>{{ $pdt->qty }}</td>*/?>
                        <td>
                            <div class="w3-dropdown-hover">
                                <button class="w3-btn-block  w3-small w3-orange">More</button>
                                <div class="w3-dropdown-content w3-border">
                                    <a data-toggle="modal" data-target="#edit"href="#">edit</a>
                                    <a data-toggle="modal" data-target="#delete"href="#">delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>


                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div>

