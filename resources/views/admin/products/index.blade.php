

<!-- /gauge.js -->

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

                    @include('admin.products.add_modal')
                    <div class ="col-md-12 col-lg-12 col-xs-12">
                        <div class = "x-panel">

                      <section class="content-header">

                          <ol class="breadcrumb">
                              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                              <li class="active">Products</li>
                          </ol>
                        <h1>
                          <a class="btn btn-lg btn-warning" href="{{ route('home') }}">Back</a>
                            <a href="#" class="tn btn-lg btn-primary edit small-box-footer" style="color:#fff;" data-toggle="modal" data-target="#add-modal" ><i class="glyphicon glyphicon-plus text-blue"></i>Create New Product</a>

                           <?php #<a class="btn btn-lg btn-primary" href="{{ route('products.create') }}"  style="color:#fff;" class="small-box-footer"><i class="glyphicon glyphicon-plus text-blue"></i>Enter New Products</a>?>
                         </h1>

                      </section>
                       <div class="panel-heading"><h3 class="align-center">Products</h3></div>
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
                                      <th>VAT</th>
                                      <th>Actions</th>
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
                                        <td> @if($product->qty < $product->reorder)
                                          <div class="w3-red">
                                              {{$product->reorder}}
                                              <span class="badge bg-red"><i></i>Reorder</span>
                                          </div>@else
                                              <div class="w3-green">
                                                  {{$product->reorder}}
                                              </div>
                                      </td>@endif
                                      <td>{{ $product->supplier->supplier_name }}</td>
                                      <td>{{ $product->category->cat_name }}</td>
                                      <td>{{ $product->tax }}</td>
                                      <td>
                                       <?php # <a href="{{ route('products.edit', ['id' => $product->id])}}" class="btn btn-xs btn-info">edit</a>?>
                                           <a href="#" class="edit btn  btn-info" data-toggle="modal" data-target="#update-modal{{ $product->id }}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                                           <a href="#" class="edit btn  btn-danger" data-toggle="modal" data-target="#delete-modal{{ $product->id }}"><span class="glyphicon glyphicon-trash">Delete</span></a>
                                                    </td>
                                        @include('admin.products.pro_upd_mod')
                                        @include('admin.products.delele')
                                @endforeach

                                </tr>
                              @else
                                <tr>
                                  <th colspan="5" class="text-center">No Products yet</th>
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



