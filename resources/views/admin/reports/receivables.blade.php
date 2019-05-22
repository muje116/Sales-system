@include('admin.header')
    <style type="text/css">
        h5,h6{
            text-align:center;
        }


        @media print {
            .btn-print {
                display:none !important;
            }
            .main-footer	{
                display:none !important;
            }
            .box.box-primary {
                border-top:none !important;
            }


        }
    </style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="nav-md">
<div class="container body">
    <div class="main_container">
    @include ('includes.main_sidebar')

    <!-- top navigation -->
    @include ('includes.top_nav')
    <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="row">
                @include('includes.errors')
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class = "x-panel">


                @foreach($company as $shop)
                                <h5><b>{{ $shop->name}}</b> </h5>
                                <h6>Address: {{ $shop->address}}</h6>
                                <h6>Contact #: {{ $shop->contact}}</h6>

                                <h5><b>Accounts Receivables as of <?php echo date("M d, Y");?></b></h5>
@endforeach
                                <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Print</a>
                                <a class = "btn btn-primary btn-print" href = "{{ route('home') }}"><i class ="glyphicon glyphicon-arrow-left"></i> Back to Homepage</a>

                                <table id="select-2" class="table table-bordered table-striped">
                                    <thead>
                                    <tr class="w3-blue">

                                        <th>Customer Name</th>
                                        <th>Address</th>
                                        <th>Contact</th>
                                        <th>Amount Owing</th>
                                        <th>Due on</th>
                                        <th>Status</th>
                                        

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($credit as $pdt)
                                    <tr>

                                        <td>{{ $pdt->sales->customer->customer_name }}</td>
                                        <td> {{ $pdt->sales->customer->address }} </td>
                                        <td> {{ $pdt->sales->customer->contact }}</td>
                                        <td> {{ $pdt->sales->amount }}</td>
                                        <td> {{ $pdt->due_date }}</td>
                                        <td>{{$pdt->status }}</td>

                                    </tr>

                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th colspan="4">Total</th>
                                        <th><h4><b></b></h4>
                                        </th>

                                    </tr>
                                   <tr>

                                    <th>Prepared by:</th>

                                    </tr>

                                    <tr>
                                        <td>{{Auth::user()->name}}</td>

                                    </tr>
                                    </tfoot>
                                </table>
                            </div><!-- /.box-body -->

                        </div><!-- /.col -->


                    </div><!-- /.row -->

                                        </div>
                                    </div>
                                </div>

<div id="teacherreg" class="modal fade in primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><i class="glyphicon glyphicon-plus" style="font-size:30px;"></i>Add New Account</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" action="account_add.php" enctype='multipart/form-data'>
                    <!-- Title -->
                    <div class="form-group"><input type="hidden" class="form-control" id="id" name="id" value="" required>
                        <label class="control-label col-lg-3" for="type">Account Type</label>
                        <div class="col-lg-8">
                            <select class="form-control" id="type" name="type" required>
                                <option>Receivables</option>
                                <option>Payment</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3" for="tlast">Amount</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="tlast" name="amount" placeholder="Amount" required>
                        </div>
                    </div>



                        <!--end of modal body-->
                        <div class="modal-footer">
                            <button type="submit" name="save" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                        </div>
                </form>
                    </div>

                 <!--end of modal content-->

    </div>
</div>
@include('includes.datatable_script')
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
    });
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
</div>
</body>
</html>
