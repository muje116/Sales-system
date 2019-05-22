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
                                        <a class="w3-btn btn-lg w3-blue w3-border " href="{{ route('userRepo') }}">Reports </a>
                                    </h1>

                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Select Date</div>
                        <div class="panel-body">


                            <form action="{{ route('salesdisplay') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group ">
                                    <label for="reservation">Date Range</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    <input  type="text" name="date" class="form-control pull-right active" id="reservation" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Display</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary w3-card-8">
                        <div class="panel-heading">Sales</div>
                        <div class="panel-body">
                            <table id="example1" class="table">
                                <thead>
                                <tr>

                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($sales as $sale)

                                    <tr>
                                     <td>{{ $sale->prod_name }}</td>
                                    <td>{{ $sale->qty }}</td>
                                    <td>{{ $sale->price }}</td>
                                    <td>
                                      {{ $sale->created_at }}
                                    </td>
                                    </tr>
@endforeach






                                </tbody>
                            </table>
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
{{--}}
<div class="daterangepicker dropdown-menu show-calendar opensleft" style="top: 227px; right: 70px; left: auto; display: block;">
    <div class="calendar first left"><div class="calendar-date">
            <table class="table-condensed">
                <thead>
                <tr>
                    <th class="prev available"><i class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i></th>
                    <th colspan="5" class="month">Oct 2018</th>
                    <th class="next available"><i class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i></th>
                </tr>
                <tr>
                    <th>Su</th>
                    <th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr>
                </thead>
                <tbody>
                <tr>
                    <td class="available off" data-title="r0c0">30</td><td class="available" data-title="r0c1">1</td><td class="available" data-title="r0c2">2</td><td class="available" data-title="r0c3">3</td><td class="available" data-title="r0c4">4</td><td class="available" data-title="r0c5">5</td><td class="available" data-title="r0c6">6</td></tr><tr><td class="available" data-title="r1c0">7</td><td class="available" data-title="r1c1">8</td>
                    <td class="available" data-title="r1c2">9</td><td class="available" data-title="r1c3">10</td><td class="available" data-title="r1c4">11</td><td class="available" data-title="r1c5">12</td><td class="available" data-title="r1c6">13</td></tr><tr><td class="available" data-title="r2c0">14</td><td class="available" data-title="r2c1">15</td><td class="available" data-title="r2c2">16</td><td class="available" data-title="r2c3">17</td><td class="available" data-title="r2c4">18</td><td class="available" data-title="r2c5">19</td><td class="available" data-title="r2c6">20</td></tr><tr><td class="available active start-date end-date" data-title="r3c0">21</td><td class="available" data-title="r3c1">22</td><td class="available" data-title="r3c2">23</td><td class="available" data-title="r3c3">24</td><td class="available" data-title="r3c4">25</td>
                    <td class="available" data-title="r3c5">26</td><td class="available" data-title="r3c6">27</td></tr><tr><td class="available" data-title="r4c0">28</td><td class="available" data-title="r4c1">29</td><td class="available" data-title="r4c2">30</td><td class="available" data-title="r4c3">31</td><td class="available off" data-title="r4c4">1</td><td class="available off" data-title="r4c5">2</td><td class="available off" data-title="r4c6">3</td>
                </tr><tr><td class="available off" data-title="r5c0">4</td><td class="available off" data-title="r5c1">5</td><td class="available off" data-title="r5c2">6</td><td class="available off" data-title="r5c3">7</td><td class="available off" data-title="r5c4">8</td><td class="available off" data-title="r5c5">9</td><td class="available off" data-title="r5c6">10</td></tr></tbody></table></div></div><div class="calendar second right"><div class="calendar-date"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i></th>
                    <th colspan="5" class="month">Mar 2019</th><th class="next available"><i class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="available off" data-title="r0c0">24</td><td class="available off" data-title="r0c1">25</td><td class="available off" data-title="r0c2">26</td>
                    <td class="available off" data-title="r0c3">27</td><td class="available off" data-title="r0c4">28</td><td class="available" data-title="r0c5">1</td><td class="available" data-title="r0c6">2</td></tr><tr><td class="available" data-title="r1c0">3</td><td class="available" data-title="r1c1">4</td><td class="available" data-title="r1c2">5</td><td class="available" data-title="r1c3">6</td><td class="available" data-title="r1c4">7</td><td class="available" data-title="r1c5">8</td><td class="available" data-title="r1c6">9</td></tr><tr><td class="available" data-title="r2c0">10</td><td class="available" data-title="r2c1">11</td><td class="available" data-title="r2c2">12</td><td class="available" data-title="r2c3">13</td><td class="available" data-title="r2c4">14</td><td class="available" data-title="r2c5">15</td><td class="available" data-title="r2c6">16</td>
                </tr><tr><td class="available" data-title="r3c0">17</td><td class="available" data-title="r3c1">18</td><td class="available" data-title="r3c2">19</td><td class="available" data-title="r3c3">20</td><td class="available" data-title="r3c4">21</td><td class="available" data-title="r3c5">22</td><td class="available" data-title="r3c6">23</td></tr><tr><td class="available" data-title="r4c0">24</td><td class="available" data-title="r4c1">25</td>
                    <td class="available" data-title="r4c2">26</td><td class="available" data-title="r4c3">27</td><td class="available" data-title="r4c4">28</td><td class="available" data-title="r4c5">29</td><td class="available" data-title="r4c6">30</td></tr><tr><td class="available" data-title="r5c0">31</td><td class="available off" data-title="r5c1">1</td><td class="available off" data-title="r5c2">2</td>
                    <td class="available off" data-title="r5c3">3</td>
                    <td class="available off" data-title="r5c4">4</td>
                    <td class="available off" data-title="r5c5">5</td>
                    <td class="available off" data-title="r5c6">6</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="ranges">
        <div class="range_inputs">
            <div class="daterangepicker_start_input">
                <label for="daterangepicker_start">From</label>
                <input class="input-mini" type="text" name="daterangepicker_start" value="">
            </div>
            <div class="daterangepicker_end_input">
                <label for="daterangepicker_end">To</label>
                <input class="input-mini" type="text" name="daterangepicker_end" value="">
            </div>
            <button class="applyBtn btn btn-small btn-sm btn-success">Apply</button>&nbsp;
            <button class="cancelBtn btn btn-small btn-sm btn-default">Cancel</button>
        </div>
    </div>
</div>
</script>
--}}