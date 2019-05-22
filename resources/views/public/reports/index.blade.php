@extends('layouts.w3')

@section('content')

    <div class="container-fluid">
        <div class="row bg-border-color medium-padding120">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">

                        <div class="cart">

                            <h1 class="align-center">Reports <span class="c-primary"> </span></h1>


                            <div class="col-md-12" >
                                <section class="content-header">

                                    <ol class="breadcrumb">
                                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                                        <li class="active">Products</li>

                                    </ol>
                                    <h1>
                                        <a class="btn btn-lg btn-warning" href="{{ route('home') }}">Home</a>
                                    </h1>

                                </section>
                                <div class="panel panel-primary w3-card-24">
                                    <div class="panel-heading">Reports</div>
                                    <div class="panel-body">
                                        <div class="panel panel-primary w3-card-4 col-md-3">
                                            <div class="panel-heading">Sales</div>
                                            <div class=" w3-border">
                                                <a class="w3-btn w3-teal" href="{{ route('allsales') }}">All Sales</a>
                                                <a class="w3-btn w3-teal" href="{{ route('salo_date') }}">Timely</a>
                                                {{--}}<a onclick="document.getElementById('sales').style.display='block'">Timely</a>--}}

                                              </div>
                                        </div>
                                        <div class="panel panel-primary w3-card-4 col-md-3">
                                            <div class="panel-heading">Inventory</div>
                                            <div class=" w3-border">
                                                <a href="{{ route('inventorie') }}" class="w3-btn w3-teal">All Inventory</a>
                                                <a href="{{ route('inventoryrep') }}" class="w3-btn w3-teal">Timely</a>

                                                {{--}}<a onclick="document.getElementById('inventory').style.display='block'" >Timely</a>--}}
                                            </div>
                                        </div>
                                        <div class="panel panel-primary w3-card-4 col-md-3">
                                            <div class="panel-heading">Receivables</div>
                                            <div class=" w3-border">
                                                <a class="w3-btn w3-teal" href="{{ route('receive') }}">All Receivables</a>
                                                <a class="w3-btn w3-teal" href="{{ route('inventoryrep') }}">Timely</a>
                                                {{--}}<a onclick="document.getElementById('receivables').style.display='block'">Timely</a>--}}
                                            </div>
                                        </div>
                                        <div class="panel panel-primary w3-card-4 col-md-3">
                                            <div class="panel-heading">Income</div>
                                            <div class=" w3-border">
                                                <a href="{{ route('income') }}" class="w3-btn w3-teal">Income</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @include('public.reports.date_select')
                                <div class="panel panel-primary w3-card-4">
                                    <div class="panel-heading">Quick Links</div>
                                    <a class="w3-btn w3-teal" href="{{ route('sales.lpo') }}">LPO</a>
                                    <a class="w3-btn w3-teal" href="{{ route('cheque') }}">Cheque</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection
    <script>
      $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
          {
            ranges   : {
              'Today'       : [moment(), moment()],
              'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
              'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
              'Last 30 Days': [moment().subtract(29, 'days'), moment()],
              'This Month'  : [moment().startOf('month'), moment().endOf('month')],
              'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate  : moment()
          },
          function (start, end) {
            $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
          }
        )

        //Date picker
        $('#datepicker').datepicker({
          autoclose: true
        })

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass   : 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass   : 'iradio_minimal-red'
        })
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass   : 'iradio_flat-green'
        })

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        //Timepicker
        $('.timepicker').timepicker({
          showInputs: false
        })
      })
    </script>
