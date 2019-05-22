@extends('layouts.w3')

@section('content')

    <div class="container-fluid">
        <div class="row bg-border-color medium-padding120">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">

                        <div class="cart">

                            <h1 class="align-center">Credit Sales Reports <span class="c-primary"> </span></h1>


                            <div class="col-md-12" >
                                <section class="content-header">

                                    <ol class="breadcrumb">
                                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                                        <li class="active">reports</li>
                                        <li>Receivables</li>

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
                    <div class="col-md-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Select Date</div>
                            <div class="panel-body">


                                <form action="{{ route('receivedisplay') }}" method="post">
                                    {{ csrf_field() }}
                                    <fieldset class="form-group">
                                        <label for="exampleInputEmail1">Date Range</label>
                                        <input type="text" class="form-control" name="date" id="reservation" placeholder="Enter range">
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary">Display</button>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-9">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Credit Sales</div>
                            <div class="panel-body">
                                    <form action="#" method="post" class="cart-main">

                                        <table id="example1" class="w3-table w3-bordered w3-striped w3-card-4 w3-hoverable">
                                            <thead>
                                            <tr class="w3-blue">
                                                <th>Customer Name</th>
                                                <th>Phone Number</th>
                                                <th>Address</th>
                                                <th>Amount owing</th>
                                                <th>Date Due</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>


                                            @foreach($credit as $pdt)


                                                <tr class="cart_item">


                                                    <td class="product-thumbnail">

                                                        <div class="cart-product__item">
                                                            <div class="cart-product-content">
                                                                {{ $pdt->sales->customer->customer_name }}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{ $pdt->sales->customer->contact }}</td>
                                                    <td>{{ $pdt->sales->customer->address }}</td>
                                                    {{--}}<td>
                                                        <div class="product-price">
                                                            <div class="cart-product-content">
                                                                {{ $pdt->bank }}
                                                            </div>
                                                        </div>
                                                    </td>--}}

                                                    <td class="product-price">
                                                        {{ $pdt->sales->amount }}
                                                    </td>
                                                    <td>{{ $pdt->due_date }}</td>
                                                    <td class="product-quantity">

                                                        <div class="quantity">
                                                            <div class="quantity">

                                                                {{$pdt->status }}
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td class="product-quantity">
                                                        <a href="{{ route('view_cheque', ['id' =>$pdt->sales_id]) }}" class="btn btn-xs btn-info">
                                                            <span class="text">view</span>
                                                            <i class="seoicon-commerce"></i>
                                                        </a>

                                                    </td>

                                                </tr>


                                            @endforeach

                                            </tbody>
                                        </table>


                                    </form>

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
