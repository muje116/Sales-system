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
        <!-- page content -->
        <div role="main">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class = "x-panel">
						<div class="right_col" role="main">
								<?php		/*
			$branch=$_GET['id'];
			$query=mysqli_query($con,"select * from branch where branch_id='$branch'")or die(mysqli_error());
			$row=mysqli_fetch_array($query);*/

	?>
									@foreach ($company as $shop)
                  <h5><b>{{ $shop->name }}</b> </h5>
                  <h6>Address: {{ $shop->address }}</h6>
                  <h6>Contact #; {{ $shop->contact }}  </h6>
				  <h5><b>Sales as of today, <?php echo date("M d, Y h:i a");?></b></h5>
                  @endforeach
				  <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Print</a>
				  <a class = "btn btn-primary btn-print" href = "{{ route('home') }}"><i class ="glyphicon glyphicon-arrow-left"></i> Back to Homepage</a>



							<div class="row tile_count">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 tile_stats_count">
								<span class="count_top"><i class="fa fa-money"></i> Total Sales</span>
								<?php
								$year1 = date("Y");
								$month = date("m");
								?>
								<div class="count">
									{{ $sale}}
								</div>

								<span class="count_bottom"><i class="green"></i>For the month of  <?php echo date("F",strtotime($month));?>, <?php echo $year1;?></span>
								</div>

								<div class="col-md-3 col-sm-3 col-xs-3 tile_stats_count">
								<span class="count_top"><i class="fa fa-money"></i> Total Receivables</span>
								<?php
								$date = date("M. d, Y");?>
								<div class="count green">{{ $credit }}</div>
								<span class="count_bottom"><i class="green">Total Receivables as of</i> <?php echo $date;?></span>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 tile_stats_count">
											<span class="count_top"><i class="fa fa-user"></i> Number products re-order</span>

											<div class="count">{{ $reorder }}</div>
											<span class="count_bottom"><i class="green">as of today</i></span>
								</div>
								<div class="col-lg-12 col-sm-12 col-xs-12">
										<div class="">
										  <div class="x_title">
											<h2>Total Monthly Sales <small></small></h2>
											<ul class="nav navbar-right panel_toolbox">
											  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
											  </li>
											  <li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
												<ul class="dropdown-menu" role="menu">
												  <li><a href="#">Settings 1</a>
												  </li>
												  <li><a href="#">Settings 2</a>
												  </li>
												</ul>
											  </li>
											  <li><a class="close-link"><i class="fa fa-close"></i></a>
											  </li>
											</ul>
											<div class="clearfix"></div>
										  </div>
										  <div class="x_content">
											<div id="graph"></div>
												<table id="example1" class="table table-bordered table-striped">
												<tr>
												<th>Payment Type</th>
												<th class="text-right">SALES</th>
											</tr>


                    <tbody>
<?php

	$year=date("Y");
?>
@foreach ($sales as $sal )
			<tr>



                <th> {{ $sal->payment_type }}</th>
				<td class="text-right"><b>{{ $sal->amount }}</b></td>

			</tr>
        @endforeach
			<tr>
                <th><h2>TOTAL</h2></th>
				<th class="text-right"><h2><b>{{ $total}}000</b></h2></td>
			</tr>
	            </tbody>
                    <tfoot>



        </tfoot>
       </table>

										  </div>
										</div>
							</div>
							</div>
					</div>








					</div>
				</div>
			</div>
        </div>
        <!-- /page content -->

        <!-- footer content -->

        <!-- /footer content -->
      </div>
    </div>
	 <script src="{{ asset('vendors/jquery/dist/jquery.min.js')}}"></script>
	<script src="{{ asset('js/highcharts.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/exporting.js ')}}"></script>

    <!-- FastClick -->

	<script type="text/javascript">
    $(document).ready(function() {
      var options = {
              chart: {
                  renderTo: 'graph',
                  type: 'column',
                  marginRight: 20,
                  marginBottom: 25
              },
              title: {
                  text: '',
                  x: -20 //center
              },
              subtitle: {
                  text: '',
                  x: -10
              },
              xAxis: {
                  categories: []
              },
              yAxis: {

                  title: {
                      text: 'Total Monthly Sales'
                  },
                  plotLines: [{
                      value: 0,
                      width: 1,
                      color: '#808080'
                  }]
              },
              tooltip: {
                  formatter: function() {
                          return '<b>'+ this.series.name +'</b><br/>'+  Highcharts.numberFormat(this.y, 0)
                          this.x +': '+ this.y

                  ;
                  }
              },
              legend: {
                  layout: 'vertical',
                  align: 'right',
                  verticalAlign: 'top',
                  x: 0,
                  y: 100,
                  borderWidth: 0
              },
              series: []
          }

          $.getJSON("data.php", function(json) {
			options.xAxis.categories = json[0]['name'];
            options.series[0] = json[1];
            //options.series[1] = json[2];



            chart = new Highcharts.Chart(options);
          });
      });
    </script>
		@include('includes.datatable_script')

		</div>
	</div>
</div><!-- /gauge.js -->
  </body>
