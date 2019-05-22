
@include('admin.header')
<style type="text/css">
    h5,h6{
        text-align:center;
    }


    @media print {
        .btn-print {
            display:none !important;
        }
        .btn-primary{
            display:none !important;
        }
        .dont{
            display:none !important;
        }
        .main-footer	{
            display:none !important;
        }
        .box.box-primary {
            border-top:none !important;
        }
        .angel{
            display:none !important;
        }
        .hide-section{
            display:none;
        }


    }
</style>

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

                            <h5><b>Total sales as of <?php echo date("M d, Y");?></b></h5>
                        @endforeach

                        <div class="panel-heading">
				  <h3 class="box-title dont">Select Date</h3>
				  <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Print</a>
				  <a class = "btn btn-primary btn-print" href = "{{ route('home') }}"><i class ="glyphicon glyphicon-arrow-left"></i> Back to Homepage</a>
				</div>
				<div class="box-body">
				
				  <!-- /.form group -->
				  <form method="post" action="{{ route('display') }}" >
					  {{ csrf_field() }}
					<div class="form-group col-md-6 dont">
						<label>From</label>

						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						  </div>
						<input type="date" class="form-control select2" name="month" tabindex="1" autofocus required>

								  

					</div>
                <!-- /.input group -->
					</div>
					<div class="form-group col-md-5 dont">
						<label>To</label>

						<div class="input-group">
						  <div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						  </div>
						<input  type="date" class="form-control select2" name="month2" tabindex="1" required>

					</div>
                <!-- /.input group -->
					</div>
              <!-- /.form group --><br>
					<button type="submit" class="btn btn-primary" name="display">Display</button>
				</form>
				
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->  
				
				</div>			
			</div>
			
			
			<div class="row">
								
				
				<div class="col-md-12 col-sm-12 col-xs-12">					
					<div id="graph">
						<table id="select-2" class="table table-bordered table-striped">
							<thead>
							<tr class="w3-blue">

								<th class="product-thumbnail">CustomerName</th>
								<th class="product-title">Type of Payment</th>
								<th class="product-price">Total Amount</th>
								<th class="product-quantity">Date Of Sale</th>
								<th class="product-quantity"></th>

							</tr>
							</thead>
							<tbody>
							@foreach($sales as $pdt)
								<tr>





									<td>{{ $pdt->customer->customer_name }}</td>
									<td> {{ $pdt->payment_type }} </td>
									<td>{{ $pdt->amount }}</td>
									<td>{{ $pdt->created_at }}</td>
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

    <script src="{{ asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('js/highcharts.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/exporting.js ')}}"></script>
		<script type="text/javascript">
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'graph',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
										spacingBottom: 50,
                },
                title: {
                    text: '',
										style: { fontFamily: '\'Lato\', sans-serif', lineHeight: '18px', fontSize: '26px' }
                },
                tooltip: {
                    formatter: function() {
                        return '<b>'+ this.point.name +'</b>: '+ Highcharts.numberFormat(this.percentage, 2) +' %';
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            color: '#000000',
														style: { fontFamily: '\'Lato\', sans-serif', lineHeight: '18px', fontSize: '14px' },
                            connectorColor: '#000000',
                            formatter: function() {
                                return '<b>'+ this.point.name +'</b>: '+ Highcharts.numberFormat(this.percentage, 2) +' %';
                            }
                        }
                    }
                },
                series: [{
                    type: 'pie',
                    name: 'Employability Rate',
                    data: []
                }]
            }
            
            $.getJSON("datapie.php", function(json) {
                options.series[0].data = json;
                chart = new Highcharts.Chart(options);
            });
            
            
            
        });   
        </script>

		@include('includes.datatable_script')
    <!-- /gauge.js -->
</div></body>
</html>
