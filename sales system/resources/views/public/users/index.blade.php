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
                                    <li class="active">Users</li>

                                </ol>
                                <h1>
                                    <a class="btn btn-lg btn-warning" href="{{ route('home') }}">Back</a>
                                </h1>

                            </section>
                            <h1 class="align-center">Manage User Account <span class="c-primary"> </span></h1>

                        </div>



                    <div class="col-lg-9">
                        <form action="{{ route('users.change', ['id'=>Auth::user()->id]) }}" method="post" class="w3-container">
                        <h3>Edit Details</h3>
                            <table   id="example2" class="w3-striped w3-card-4">
                                <thead class="cart-product-wrap-title-main">
                                <tr>

                                </tr>
                                </thead>
                                <tbody>

                                <tr class="cart_item">

                                <tr>
                                    <td colspan="5" class="actions">

                                        <div class="">
                                            {{ csrf_field() }}
                                            <fieldset class="form-group">
                                                <label for="name">UserName</label>
                                                <input type="text" name="email" class="w3-input w3-border" id="" value=" {{ Auth::user()->email }}">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="contact">Fullname</label>
                                                <input type="text" name="name" class="w3-input w3-border" id="" value=" {{ Auth::user()->name }}">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="contact">Password</label>
                                                <input type="password" name="password" class="w3-input w3-border" id="" value="{{ old('password') }}">
                                            </fieldset>
                                            <div class="w3-container w3-light-grey w3-padding">
                                                <button class="w3-btn w3-right w3-border w3-green">Update</button>
                                            </div>
                                        </div>

                                    </td>
                                </tr>

                                </tbody>
                            </table>


                        </form>

                    </div>

                    <div>
                    <div class="row pb120">
                        <div class="col-lg-12">

                        </div>
                    </div>
                </div>
            </div>



@endsection
