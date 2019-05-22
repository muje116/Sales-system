
@include('admin.header')
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

          <!-- /top tiles -->

              <script src="{{ asset('lte/Chart.bundle.js')}}"></script>
              <script src="{{ asset('lte/utils.js')}}"></script>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Inventory </h3>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2017 - January 28, 2019</span> <b class="caret"></b>
                    </div>
                  </div>
                </div>

              {{--}}  <div class="col-md-9 col-sm-9 col-xs-12">
                  <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>
                  <div style="width: 100%;">
                    <div id="canvas_dahs" class="demo-placeholder" style="width: 100%; height:270px;"></div>
                  </div>
                </div>--}}
                <div class="col-md-12 col-sm-12 col-xs-12 bg-white">


                  <div class="col-md-12 col-sm-12 col-xs-6">
                      <div id="canvas-holder" style="width:100%">
                          <canvas id="chart"></canvas>
                      </div>
                  </div>

                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />
              <div class="row">


            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2> Sales Summary</h2>
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
                <div id="canvas-holder" style="width:100%">
                  <canvas id="chart-area"></canvas>
                </div>

              </div>
            </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320 overflow_hidden">
                <div class="x_title">
                  <h2>Sold Products</h2>
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
                  <table class="" style="width:100%">
                    <tr>
                      <th style="width:100%;">
                        <p>Top Selling Products</p>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        <canvas id="canvas1" style="width:100%"></canvas>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>


            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Profit</h2>
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
                  <div class="dashboard-widget-content">
                    <ul class="quick-list">
                      <li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>
                      </li>
                      <li><i class="fa fa-bar-chart"></i><a href="#"> Sales</a> </li>
                      <li><i class="fa fa-line-chart"></i><a href="#">Income</a>
                      </li>

                    </ul>

                    <div class="sidebar-widget">
                      <h4> Target</h4>
                      <canvas width="150" height="80" id="foo" class="" style="width: 160px; height: 100px;"></canvas>
                      <div class="goal-wrapper">
                        <span class="gauge-value pull-left">K</span>
                        <span id="gauge-text" class="gauge-value pull-left">3200</span>
                        <span id="goal-text" class="goal-value pull-right">K500000</span>
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
        <footer>
          <div class="pull-right">
            Sales and Inventory Control
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

	@include ('admin.script')
    <!-- /gauge.js -->
    </div>
  </div>
</div>
</div>
</body>
<script>
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };

    var config = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [
                    @foreach($products as $product)
                        '{{ $product->qty }}',
                    @endforeach
                ],
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.orange,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.blue,
                ],
                label: 'Dataset 12'
            }],
            labels: [
                @foreach($products as $product)
                    '{{ $product->prod_name }}',
                @endforeach
            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'inventory'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };

    ///    window.onload = function() {
    var ctx = document.getElementById('chart').getContext('2d');
    window.myDoughnut = new Chart(ctx, config);
    //    };










    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };

    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [

                  						'{{ $lpo }}',
                  						'{{ $cash }}',
                  						'{{ $credit }}',
                  						'{{ $cheque }}',

                ],
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.orange,
                    window.chartColors.yellow,
                    window.chartColors.green,
                ],
                label: 'Dataset 2'
            }],
            labels: [
              'LPO',
    					'Cash',
    					'Credit',
    					'Cheque'
            ]
        },
        options: {
            responsive: true
        }
    };

    //window.onload = function() {
        var ctx = document.getElementById('chart-area').getContext('2d');
        window.myPie = new Chart(ctx, config);
    //};
/*
    document.getElementById('randomizeData').addEventListener('click', function() {
        config.data.datasets.forEach(function(dataset) {
            dataset.data = dataset.data.map(function() {
                return randomScalingFactor();
            });
        });

        window.myPie.update();
    });

    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset').addEventListener('click', function() {
        var newDataset = {
            backgroundColor: [],
            data: [],
            label: 'New dataset ' + config.data.datasets.length,
        };

        for (var index = 0; index < config.data.labels.length; ++index) {
            newDataset.data.push(randomScalingFactor());

            var colorName = colorNames[index % colorNames.length];
            var newColor = window.chartColors[colorName];
            newDataset.backgroundColor.push(newColor);
        }

        config.data.datasets.push(newDataset);
        window.myPie.update();
    });

    document.getElementById('removeDataset').addEventListener('click', function() {
        config.data.datasets.splice(0, 1);
        window.myPie.update();
    });*/
</script>
