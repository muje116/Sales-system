@include('admin.header')
<body class="nav-md">
<div class="container body">
    <div class="main_container">
    @include ('includes.main_sidebar')

    <!-- top navigation -->
    @include ('includes.top_nav')

    <!-- page content -->
        <div class="right_col" role="main">
            <div class="row">
                <div >
                    @include('includes.errors')

                    <div class ="col-md-12 col-lg-12 col-xs-12">
                        <div class = "x-panel">

                            <section class="content-header">

                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                                    <li class="active">Products</li>
                                </ol>
                                <h1>
                                    <a class="btn btn-lg btn-warning" href="{{ route('home') }}">Back</a>
                                    <?php #<a class="btn btn-lg btn-primary" href="{{ route('products.create') }}"  style="color:#fff;" class="small-box-footer"><i class="glyphicon glyphicon-plus text-blue"></i>Enter New Products</a>?>
                                </h1>

                            </section>
                            <div class="panel-heading"><h3 class="align-center">Products To Be Reordered</h3></div>
                            <table id="datatable" class="table table-striped table-bordered table-responsive ">
                                <thead>
                                <tr>
                                    <th>Product Code</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Reorder</th>
                                    <th>Supplier</th>
                                    <th>Category</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if ($products->count() > 0)
                                    @foreach ($products as $product)


                                        <tr>
                                            <th>{{ $product->prod_code }}</th>
                                            <td>{{ $product->prod_name }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->qty }}</td>
                                            <td>{{ $product->reorder }}</td>
                                            <td>{{ $product->supplier->supplier_name }}</td>
                                            <td>{{ $product->category->cat_name }}</td>


                                            @endforeach
                                        </tr>
                                        @else
                                            <tr>
                                                <th colspan="6" class="text-center">No Products yet</th>
                                            </tr>
                                        @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Sales and Inventory System <a href="#"></a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>


@include('includes.datatable_script')
<!-- /gauge.js -->
</body>

