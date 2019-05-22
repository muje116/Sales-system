

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

                    <div class ="col-md-12 col-lg-12 col-xs-12">
                        <div class = "x-panel">
                      <section class="content-header">
                          <ol class="breadcrumb align-right">
                              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                              <li class="active">Supplier</li>
                          </ol>
                        <h1>
                          <a class="btn btn-lg btn-warning" href="{{ route('home') }}">Back</a>
                            <a href="#" class="tn btn-lg btn-primary edit small-box-footer" style="color:#fff;" data-toggle="modal" data-target="#add-modal" ><i class="glyphicon glyphicon-plus text-blue"></i>Create New Supplier</a>

                           <?php # <a class="btn btn-lg btn-primary" href="{{ route('suppliers.create') }}"  style="color:#fff;" class="small-box-footer"><i class="glyphicon glyphicon-plus text-blue"></i>Create New Supplier</a>
                        ?> </h1>

                      </section>
                            <div class="panel-heading"><h3 class="align-center">Suppliers</h3></div>
                            <table id="datatable" class="table table-striped table-bordered table-responsive ">
                                  <thead>
                                    <th>Supplier Name</th>
                                    <th>Phone Number</th>
                                    <th>Email Address</th>
                                    <th>Postal Address</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                  </thead>
                                  <tbody>
                                      @if ($suppliers->count() > 0)
                                    @foreach ($suppliers as $supplier)


                                    <tr>
                                      <td>{{ $supplier->supplier_name }}</td>
                                      <td>{{ $supplier->contact }}</td>
                                      <td>{{ $supplier->email }}</td>
                                      <td>{{ $supplier->address }}</td>
                                      <td>
                                        <?php #<a href="{{ route('suppliers.edit', ['id' => $supplier->id])}}" class="btn btn-xs btn-info">edit</a>
                                          ?> <a href="#" class="edit btn  btn-info" data-toggle="modal" data-target="#update-modal{{$supplier->id}}"><span class="glyphicon glyphicon-pencil">Edit</span></a>

                                      </td>


                                                    <td>

                                                        <a href="#" class="edit btn  btn-danger" data-toggle="modal" data-target="#delete-modal{{$supplier->id}}"><span class="glyphicon glyphicon-trash">Delete</span></a>

                                                    </td>
                                        @include('admin.suppliers.sup_upd_modal')
                                        @include('admin.suppliers.delete')
                                @endforeach


                                </tr>
                              @else
                                <tr>
                                  <th colspan="5" class="text-center">No Suppliers yet</th>
                                </tr>
                              @endif
                              </tbody>
                                  </table>
                              </div>
            </div>
        </div>
    </div>
</div>

</div>

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



<div id="add-modal" role="dialog" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="close"></button>
                    <h4>Add Supplier</h4>
                    <div class="modal-body">

                        <form class="form-group" action="{{ route('suppliers.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Supplier Name</label>
                                <input type="text" name=" supplier_name" class="form-control" id="" value="{{ old('supplier_name') }}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" class="form-control" id="email" value="{{ old('email') }}">
                            </div>

                            <div class="form-group">
                                <label for="contact">Contact Number</label>
                                <input type="text" name="contact" class="form-control" id="" value="{{ old('contact') }}">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" rows="5" cols="6" class="form-control" id="address" value="{{ old('address') }}"></textarea>
                            </div>

                            <div class="form-group modal-footer">
                                <button type="submit" class="btn btn-default" data-dismiss='modal'>Close</button>
                                <button type="submit" class="btn btn-success" >Store</button>
                            </div>
                        </form>
                        <div class="">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
