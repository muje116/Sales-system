

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
                                    <li class="active">Shop</li>
                                </ol>
                                <h1>
                                    <a class="btn btn-lg btn-warning" href="{{ route('home') }}">Back</a>
                                    <a href="#" class="tn btn-lg btn-primary edit small-box-footer" style="color:#fff;" data-toggle="modal" data-target="#add-modal"><i class="glyphicon glyphicon-plus text-blue"></i>Add Shop Details</a>

                                  </h1>
                                @include('admin.shop.create')
                            </section>
                        <div class = "x-panel">
                            <table id="datatable" class="table table-striped table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th>Shop Name</th>
                                    <th>Shop Number</th>
                                    <th>Address</th>
                                    <th>Contact</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if ($shop->count() > 0)

                                    @foreach ($shop as $details)
                                        <tr>
                                            <td>
                                                {{ $details->name }}
                                            </td>
                                            <td>
                                                {{ $details->comp_number }}
                                            </td>
                                            <td>
                                                {{ $details->contact }}
                                            </td>
                                            <td>
                                                {{ $details->address }}
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-success " data-toggle = "modal" data-target="#update{{ $details->id }}"><i class = "fa fa-pencil"></i> Edit</a>

                                            </td>

                                            <td>
                                                <a href="{{ route('shop.destroy', ['id' =>$details->id]) }}" class="btn  btn-danger" >
                                                    <span class="glyphicon glyphicon-trash">delete</span>
                                                </a>
                                                @include('admin.shop.update_shop_modal')
                                            </td>
                                        </tr>


                                    @endforeach

                                @else

                                    <tr>
                                        <th colspan="6" class="text-center">create shop</th>
                                    </tr>

                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!-- /page content -->
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
</div>
</body>
<div id="add-modal" role="dialog" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2">Add Shop Details</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal form-label-left" action = "{{ route('shop.store') }}" method = "post" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3 form-group">Shop Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9 form-group">
                            <input type="text" class="form-control" name ="name"  value="{{ old('name') }}">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3 form-group">Shop Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-9 form-group">
                            <input type="text" name = "comp_number" class="form-control" value="{{ old('comp_name') }}">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 form-group col-xs-3">Contact</label>
                        <div class="col-md-9 col-sm-9 col-xs-9 form-group">
                            <input type="text" name = "contact" class="form-control" value="{{ old('contact') }}">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3 form-group" >Address</label>
                        <div class="col-md-9 col-sm-9 col-xs-9 form-group">
                            <textarea name="address" rows="5" cols="5" class="form-control">{{ old('address') }}</textarea>

                        </div>
                    </div>
                    <input type = "hidden" name = "status" value = "active">
                    <div class="ln_solid"></div>

                    <div class="form-group">
                        <div class='form-control'>
                            <button type="submit" class="close btn  btn-warning" data-dismiss="modal" aria-label="Close">Close
                            </button>
                            <button name = "submit" class="btn  btn-success"><i class = "fa fa-save"></i> Save</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


