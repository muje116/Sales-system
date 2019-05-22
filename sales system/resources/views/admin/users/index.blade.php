

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
                    <div class ="col-md-8 col-lg-8 col-xs-8">
                        <div class = "x-panel">
                            <table id="datatable" class="table table-striped table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if ($users->count() > 0)

                                    @foreach ($users as $user)
                                        <tr>
                                            <td>
                                                {{ $user->name }}
                                            </td>
                                            <td>
                                                {{ $user->email }}
                                            </td>
                                            <td>
                                                {{ $user->role }}
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-success " data-toggle = "modal" data-target="#update{{ $user->id }}"><i class = "fa fa-pencil"></i> Edit</a>

                                            </td>

                                            <td>
                                                <a href="#" class="btn btn-danger " data-toggle = "modal" data-target="#delete{{ $user->id }}"><i class = "fa fa-trash"></i> Delete</a>

                                            </td>
                                        </tr>
                                        @include('admin.users.update_user_modal')
                                        @include('admin.users.delete')
                                    @endforeach

                                @else

                                    <tr>
                                        <th colspan="5" class="text-center">No Users</th>
                                    </tr>

                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class ="col-md-4 col-lg-4 col-xs-4">
                        @include('admin.users.create')
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

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
    <div id ="#delete{{ $user->id }}" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel2">Delete user</h4>
                </div>
                <div class="modal-body">
                    <p> are you sure you want to delete {{$user->name}}</p>
                    <a href="{{ route('users.destroy', ['id' =>$user->id]) }}" class="btn  btn-danger" >
                        <span class="glyphicon glyphicon-trash">delete</span>
                    </a>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
