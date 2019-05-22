

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
                    <div class="panel-heading"><h3 class="align-center">Categories</h3></div>
            <section class="content-header">
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Categories</li>
                </ol>
              <h1>
                <a class="btn btn-lg btn-warning" href="{{ route('home') }}">Back</a>
                <a href="#" class="tn btn-lg btn-primary edit" style="color:#fff;" data-toggle="modal" data-target="#edit-modal" class="small-box-footer"><i class="glyphicon glyphicon-plus text-blue"></i>Create New Category</a>
                <?php /*<a class="btn btn-lg btn-primary" href="{{ route('categories.create') }}"  style="color:#fff;" class="small-box-footer"><i class="glyphicon glyphicon-plus text-blue"></i>Create New Category</a>*/ ?>
              </h1>

            </section>

                    <table id="datatable" class="table table-striped table-bordered table-responsive ">
        <thead>
          <th>
            Category Name
          </th>
          <th>
            Edit
          </th>
          <th>
            Delete
          </th>
        </thead>

        <tbody>
        @if ($categories->count() > 0)

          @foreach ($categories as $category)
            <tr>
              <td>
                {{ $category->cat_name }}
              </td>
              <td>
                              <a href="#" class="edit btn  btn-info" data-toggle="modal" data-target="#update{{$category->id}}"><span class="glyphicon glyphicon-pencil">Edit</span></a>

              </td>

              <td>
                  <a href="#" class="edit btn  btn-danger" data-toggle="modal" data-target="#delete-modal{{$category->id}}"><span class="glyphicon glyphicon-trash">Delete</span></a>

              </td>
                @include('admin.categories.act_upd_modal')
                @include('admin.categories.delete')
            </tr>
          @endforeach

          @else

            <tr>
              <th colspan="5" class="text-center">No Categories</th>
            </tr>

        @endif
        </tbody>
      </table>

</div>
<div class="panel-footer">

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


<div id="edit-modal" role="dialog" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="close"></button>
                    <h4>Add Category</h4>
                    <div class="modal-body">
                      <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                      <div class="form-group">
                        <label for="supplier_namecontact">Category</label>
                        <input type="text" class="form-control" name="cat_name" placeholder="Category">
                        </div>


                            <div class="form-group modal-footer">
                              <button type="submit" class="btn btn-default" data-dismiss='modal'>Close</button>
                              <button type="submit" class="btn btn-success" id='modal-save'>Store</button>                            </div>
                      </form>
                        <div class="">

                      </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>