@extends('layouts.app')

@section('content')

    <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
    <body class="hold-transition skin- layout-top-nav" onload="myFunction()">
      <div class="wrapper">

        <!-- Full Width Column -->
        <div class="content-wrapper">
          <div class="container">
            <!-- Content Header (Page header) -->


            <!-- Main content -->
      <section class="content">
        <div class="row">
  	      <div class="col-md-8">
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Transactions</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <div class="row">
                        <div class="col-lg-4 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-green">
                            <div class="inner">
                              <h3>Reports</h3>
                              <p>view</p>
                            </div>
                            <div class="icon" style="margin-top:10px">
                              <i class="glyphicon glyphicon-file"></i>
                            </div>
                            <a href="{{ route('userRepo') }}" class="small-box-footer">
                              Go <i class="fa fa-arrow-circle-right"></i>
                            </a>
                          </div>
                        </div><!-- ./col -->


                        <div class="col-lg-4 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-red">
                            <div class="inner">
                              <h3>Quotations</h3>
                              <p>Generate</p>
                            </div>
                            <div class="icon" style="margin-top:10px">
                              <i class="glyphicon glyphicon-share-alt"></i>
                            </div>
                            <a href="{{ route('quotations') }}" class="small-box-footer">
                              Go <i class="fa fa-arrow-circle-right"></i>
                            </a>
                          </div>
                        </div><!-- ./col -->

                        <div class="col-lg-4 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-yellow">
                            <div class="inner">
                              <h3>Sales</h3>
                              <p>Make sale</p>
                            </div>
                            <div class="icon" style="margin-top:10px">
                              <i class="glyphicon glyphicon-usd"></i>
                            </div>
                            <a href="{{ route('sales_cus')}}" class="small-box-footer">
                              Go <i class="fa fa-arrow-circle-right"></i>
                            </a>
                          </div>
                        </div><!-- ./col -->
                        <div class="col-lg-4 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-red">
                            <div class="inner">
                              <h3>Recevaibles</h3>
                              <p>View</p>
                            </div>
                            <div class="icon" style="margin-top:10px">
                              <i class="glyphicon glyphicon-user"></i>
                            </div>
                            <a href="{{ route('customers') }}" class="small-box-footer">
                              Go <i class="fa fa-arrow-circle-right"></i>
                            </a>
                          </div>
                        </div><!-- ./col -->

                        <div class="col-lg-4 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-orange">
                            <div class="inner">
                              <h3>Purchases</h3>
                              <p>View</p>
                            </div>
                            <div class="icon" style="margin-top:10px">
                              <i class="glyphicon glyphicon-shopping-cart"></i>
                            </div>
                            <a href="{{ route('inventory') }}" class="small-box-footer">
                              Go <i class="fa fa-arrow-circle-right"></i>
                            </a>
                          </div>
                        </div><!-- ./col -->
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-light-blue">
                                <div class="inner">
                                    <h3>User Details</h3>
                                    <p>View/Edit</p>
                                </div>
                                <div class="icon" style="margin-top:10px">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <a href="{{ route('users.view') }}" class="small-box-footer">
                                    Go <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>

                            <!-- managing users-->
                        </div><!-- ./col -->
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-light-blue">
                                <div class="inner">
                                    <h3>Customers</h3>
                                    <p>Add/Edit</p>
                                </div>
                                <div class="icon" style="margin-top:10px">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <a href="{{ route('customer_list') }}" class="small-box-footer">
                                    Go <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div><!--row-->


                  </div><!-- /.box-body -->
                </div><!-- /.box -->
              </div><!-- /.col (right) -->

          <div class="col-md-4">
            <!-- About Me Box -->
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">About Us</h3>
                  </div><!-- /.box-header -->
                    @foreach ($shop as $details)
                  <div class="box-body">
                    <strong><i class="glyphicon glyphicon-home margin-r-5"></i> Shop Name</strong>
                    <p class="text-muted">
                      {{ $details->name }}
                    </p>
                    <strong><i class="glyphicon glyphicon-home margin-r-5"></i> Shop Identity Number</strong>
                    <p class="text-muted">
                      {{ $details->comp_number }}
                    </p>
                    <strong><i class="glyphicon glyphicon-map-marker margin-r-5"></i> Address</strong>
                    <p class="text-muted">
                      {{ $details->address }}
                    </p>

                    <hr>
                    <strong><i class="glyphicon glyphicon-phone-alt margin-r-5"></i> Contact Number/s</strong>
                    <p class="text-muted">{{ $details->contact }}</p>

                    <hr>

                  </div><!-- /.box-body -->
                </div><!-- /.box -->
              </div>


            </div><!-- /.row -->

          @endforeach

            </section><!-- /.content -->
          </div><!-- /.container -->
        </div><!-- /.content-wrapper -->
          @include('includes.datatable_script')
        @include('includes/footer')
      </div><!-- ./wrapper -->
      @endsection
  	<script>/*


      <script>
        $(function () {
          $("#example1").DataTable();
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
          });
        });*/
      </script>
       <script>
        $(function () {
          //Initialize Select2 Elements
          $(".select2").select2();

          //Datemask dd/mm/yyyy
          $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
          //Datemask2 mm/dd/yyyy
          $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
          //Money Euro
          $("[data-mask]").inputmask();

          //Date range picker
          $('#reservation').daterangepicker();
          //Date range picker with time picker
          $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
          //Date range as a button
          $('#daterange-btn').daterangepicker(
              {
                ranges: {
                  'Today': [moment(), moment()],
                  'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                  'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                  'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                  'This Month': [moment().startOf('month'), moment().endOf('month')],
                  'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
              },
          function (start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
          }
          );

          //iCheck for checkbox and radio inputs
          $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
          });
          //Red color scheme for iCheck
          $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
          });
          //Flat red color scheme for iCheck
          $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
          });

          //Colorpicker
          $(".my-colorpicker1").colorpicker();
          //color picker with addon
          $(".my-colorpicker2").colorpicker();

          //Timepicker
          $(".timepicker").timepicker({
            showInputs: false
          });
        });
      </script>
