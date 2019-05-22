<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Randera</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('lte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('lte/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('lte/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('lte/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('lte/dist/css/skins/_all-skins.min.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('lte/bower_components/morris.js/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('lte/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('lte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('lte/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <link rel="stylesheet" href="{{ asset('app/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('app/css/toastr.min.css')}}">
    <link rel="stylesheet" href="{{ asset('app/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('app/css/w3.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-globe"></i>{{ $company->name }}.
                    <small class="pull-right">Date: <?php echo date("M d, Y");?></small>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-6 invoice-col">
                From
                <address>
                    @foreach($company as $shop)
                    <strong>{{ $shop->name}}</strong><br>
                    {{ $shop->comp_number}}<br>
                    {{ $shop->address}}<br>
                    Phone: {{ $shop->contact}}<br>
                    @endforeach
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-6 invoice-col">
                To
                @foreach($customers as $customer)
                <address>
                    <strong>{{ $customer->name }}</strong><br>
                    Phone: {{ $customer->contact }}<br>
                    Address: {{ $customer->address }}<br>
                    Email: {{ $customer->email }}
                </address>
                    @endforeach
            </div>
            <!-- /.col -->

            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped w3-table w3-card-4 w3-hoverable">
                    <thead>
                    <tr class="w3-blue">
                        <th >Product</th>
                        <th >Price</th>
                        <th >Quantity</th>
                        <th>SubTotal</th>
                    </tr>
                    <tbody>
                    @foreach(Cart::content() as $item)
                        <tr >

                            <td class="product-thumbnail">

                                <div class="cart-product__item">
                                    <div class="cart-product-content">
                                        <h5 class="cart-product-title">{{ $item->prod_name }}</h5>
                                    </div>
                                </div>
                            </td>

                            <td class="product-quantity">

                                <div class="quantity">
                                    {{ $item->price }}
                                </div>

                            </td>
                            <td class="product-quantity">

                                <div class="quantity">
                                    {{ $item->qty }}
                                </div>
                            </td>
                            <td class="product-subtotal">
                                <h5 class="total amount">{{ $item->total() }}</h5>
                            </td>
                        </tr>
                    @endforeach
                    <tr class="cart_item total">
                        <td class="product-thumbnail">
                            <div class="cart-product-content">
                                <h5 class="cart-product-title">Total:</h5>
                            </div>


                        </td>

                        <td class="product-quantity">

                        </td>

                        <td class="product-subtotal">
                            <h5 class="total amount">{{ Cart::total() }}</h5>
                        </td>
                    </tr>

                    </tbody>

                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">

            <div class="col-xs-6">
                <p class="lead"> Valid Until 2/22/2019</p>

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th style="width:50%">Issued by:</th>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
