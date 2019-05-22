

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

                    @include('admin.customers.modal')
                    <div class ="col-md-12 col-lg-12 col-xs-12">
                        <div class = "x-panel">

                            <section class="content-header">
                                <link  rel="stylesheet" href="{{ asset('app/dist/w3.css')}}">
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                                    <li class="active">Customers</li>
                                </ol>
                                <h1>
                                    <a class="btn btn-lg btn-warning" href="{{ route('dashboard') }}">Home</a>
                                    <a href="#" class="tn btn-lg btn-primary edit small-box-footer" style="color:#fff;" onclick="document.getElementById('id01').style.display='block'" ><i class="glyphicon glyphicon-plus text-blue"></i> New Customer</a>
                                    @include('admin.customers.modal')
                                       </h1>

                            </section>
                            <div class="panel-heading"><h3 class="align-center">Customers</h3></div>
                            <table id="datatable" class="table table-striped table-bordered table-responsive ">
                                <thead>
                                <tr>
                                    <th>Customer Name</th>
                                    <th>Number</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Company</th>
                                    <th>Actions</th>
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
                                                <td>
                                            <a href="#" class="edit btn  btn-info" onclick="document.getElementById('update{{ $cus->id }}').style.display='block'"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                                                 <a href="#" class="edit btn  btn-danger" onclick="document.getElementById('delete{{ $cus->id }}').style.display='block'"><span class="glyphicon glyphicon-trash">Delete</span></a>
                                                    @include('admin.customers.update')
                                                    @include('admin.customers.delete')
                                            </td>
                                            @endforeach

                                        </tr>
                                        @else
                                            <tr>
                                                <th colspan="5" class="text-center">No Customers yet</th>
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
</html>
