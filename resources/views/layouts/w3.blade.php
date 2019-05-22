<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Randera</title>
    <link rel="stylesheet" href="{{ asset('app/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('app/css/toastr.min.css')}}">
    <link rel="stylesheet" href="{{ asset('app/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('app/css/w3.css')}}">
    {{--<link rel="stylesheet" href="{{ asset('app/css/custom.css')}}">--}}
    <link href="{{ asset('app/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('app/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('app/css/sb-admin.css') }}" rel="stylesheet">
    <link href="{{ asset('app/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

    @include('includes.css')

  <link rel="stylesheet" href="{{ asset('lte/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('lte/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{ asset('lte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/iCheck/all.css')}}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset('lte/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/timepicker/bootstrap-timepicker.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('lte/bower_components/select2/dist/css/select2.min.css')}}">
    <script src="{{ asset('app/js/angular.min.js') }}"></script>
<style>
    @media print{
        .btn-print {
            display:none !important;
        }
        .no-print	{
            display:none !important;
        }
        .box.not.content-header {
            border-top:none !important;
        }
        .cart{
            display:none !important;
        }
        .not{
            display-top: none !important;
             display:none !important;
        }
       /* .container{
            display:none !important;
        }*/

    }
</style>
</head>
<body>
<nav class="w3-sidenav w3-light-grey w3-card-8 " data-widget="tree" style="display:none; color: rgba(85,89,153,0.6);" id="mySidenav">
    <div class="profile clearfix">
        <div class="profile_pic">
            <img src="{{ asset('app/img/admin.png') }}" alt="..." style="width:40%" class="w3-circle w3-margin-top">
        </div>
        <div class="w3-section">
            <span>Welcome</span>
            <h2>{{ Auth::user()->name }}</h2>
        </div>
    </div>

    <a href="javascript:void(0)"
       onclick="w3_close()"
       class="w3-closenav w3-large">Close &times;</a>
    <a href="{{ route('home') }} " class="w3-hover-black">Home</a>
    <a href="{{ route('inventory') }}" class="w3-hover-blue">inventory</a>
    <a href="{{ route('sales_cus') }} " class="w3-hover-red">Sales</a>
    <a href="{{ route('quotations') }}" class="w3-hover-purple">Quotations</a>
    <a href="{{ route('customers') }}" class="w3-hover-orange">Receivables</a>
    <a href="{{ route('userRepo') }}" class="w3-hover-orange">Reports</a>
    <a href="" class="w3-hover-green">Edit Details</a>
    <div class="w3-dropdown-hover">
        <a href="#">{{ Auth::user()->name }}<i class="fa fa-caret-down"></i></a>
        <div class="w3-dropdown-content w3-blue w3-card-4">
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    </div>

</nav>

<div id="main">
    <div class="not">
            <header class="w3-container w3-teal">
                <span class="w3-opennav w3-xlarge" onclick="w3_open()" id="openNav">&#9779;</span>
                <h3>Sales And Inventory Management System</h3>


            </header>

        <div class="container">

            @if ($errors ->count() >0)
                <ul class="list-group">
                    @foreach ($errors as $error)
                        <li class="list-group-item-danger">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            @endif
            <!-- this section is subject to chnage if toastr starts working, this is just a backup for warnings-->
                @if(Session::has('success'))
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{Session::get('success')}}
                    </div>
                @endif
                @if(Session::has('error'))
                    <div class="alert alert-error">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{Session::get('error')}}
                    </div>
                @endif
                @if(Session::has('info'))
                    <div class="alert alert-info">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{Session::get('info')}}
                    </div>
                @endif

            </div>

        </div>



            @yield('content')

        <div>
        <footer class="footer no-print">
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    </div>
                </div>
            </div>
            </div>
        </footer>
        </div>
</div>
<!-- Scripts -->
        <script>
            function w3_open() {
                document.getElementById("main").style.marginLeft = "20%";
                document.getElementById("mySidenav").style.width = "20%";
                document.getElementById("mySidenav").style.display = "block";
                document.getElementById("openNav").style.display = 'none';
            }
            function w3_close() {
                document.getElementById("main").style.marginLeft = "0%";
                document.getElementById("mySidenav").style.display = "none";
                document.getElementById("openNav").style.display = "inline-block";


            }
        </script>
<script src="{{ asset('app/js/toastr.min.js') }}"></script>
<script src="{{ asset('app/vendor/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('app/js/jquery-2.1.3.min.js')}}"></script>
        <!-- Scripts -->
    {{--}}    <script src="{{ asset('scripts/app.js') }}"></script>
        <!-- Scripts -->
        <script src="{{ asset('scripts/app.js') }}"></script>
--}}
        <script>
            @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
            @endif

            @if (Session::has('info'))
            toastr.info("{{ Session::get('info') }}")
            @endif
            @if (Session::has('error'))
            toastr.error("{{ Session::get('error') }}")
            @endif


            $('#modal-save').on('click', function() {
                $.ajax({
                    method: 'POST',
                    url: url,
                    data: {body: $('#post-body').val(), postId: 'postId', _token: token}
                })
            })
            $(document).ready(function() {
                $('#example').DataTable();
            } );

            $(function () {
  $('#example1').DataTable()
  $('#example2').DataTable({
    'paging'      : true,
    'lengthChange': false,
    'searching'   : false,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false
  })
})
        </script>
<!-- lte stuff -->

<script src="{{ asset('lte/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('lte/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- DataTables -->
<script src="{{ asset('lte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('lte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

<script src="{{ asset('lte/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<!-- InputMask -->
<script src="{{ asset('lte/plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{ asset('lte/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{ asset('lte/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<!-- date-range-picker -->
<script src="{{ asset('lte/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('lte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('lte/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('lte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('lte/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('lte/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('lte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{ asset('lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{ asset('lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('lte/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('lte/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('lte/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{ asset('lte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{ asset('lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('lte/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('lte/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('lte/dist/js/demo.js')}}"></script>
        <!--end of modal-->
        <!-- jQuery 2.1.4 -->{{--}}
<script src="{{ asset('app/js/toastr.min.js') }}"></script>
<script src="{{ asset('app/vendor/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('app/vendor/datatables/dataTables.bootstrap4.js') }}"></script>

<script src="{{ asset('app/vendor/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('app/vendor/jquery/moment.min.js') }}"></script>
<script src="{{ asset('app/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Core plugin JavaScript-->
<script src="{{ asset('app/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<!-- Page level plugin JavaScript-->

<!-- Custom scripts for all pages-->
<script src="{{ asset('app/js/toastr.min.js') }}"></script>
<script src="{{ asset('app/js/sb-admin.min.js') }}"></script>
<!-- Custom scripts for this page-->

<script src="{{ asset('app/js/sb-admin.min.js') }}"></script>
<script src="{{ asset('app/vendor/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('app/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('js/sb-admin-datatables.min.js') }}"></script>
--}}
<script type='text/javascript'>
    //<![CDATA[
    jQuery(function($) { 'use strict';
        $("#ele2").find('.print-link').on('click', function() {
            //Print ele2 with default options
            $.print("#ele2");
        });
        $("#ele4").find('button').on('click', function() {
            //Print ele4 with custom options
            $("#ele4").print({
                //Use Global styles
                globalStyles : false,
                //Add link with attrbute media=print
                mediaPrint : false,
                //Custom stylesheet
                stylesheet : "http://fonts.googleapis.com/css?family=Inconsolata",
                //Print in a hidden iframe
                iframe : false,
                //Don't print this
                noPrintSelector : ".avoid-this",
                //Add this at top
                prepend : "Hello World!!!<br/>",
                //Add this on bottom
                append : "<span><br/>Buh Bye!</span>",
                //Log to console when printing is done via a deffered callback
                deferred: $.Deferred().done(function() { console.log('Printing done', arguments); })
            });
        });
        // Fork https://github.com/sathvikp/jQuery.print for the full list of options
    });
    //]]>
</script>
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

</body>
</html>
