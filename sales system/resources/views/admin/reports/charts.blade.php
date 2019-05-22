

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
                <!-- page content -->
                    <div role="main">
                        <div class="row">
                            <link  rel="stylesheet" href="{{ asset('app/dist/w3.css')}}">
    <div class="col-lg-12 offset-lg-1" style="padding:1%">
        <div class="card">
            <div class="card-body">

            <nav class="breadcrumb">
                <a class="breadcrumb-item" href="#">Home</a>
            </nav>
            <div class="row">
                <div class="col-lg-5">
                    <div class="w3-card-16">
                        <header class="w3-container w3-blue">
                            <h5>summary report on purchases</h5>
                        </header>

                        <div id="canvas-holder" style="width:100%">
                            <canvas id="chart-area"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6"><!--start col-lg-4-->
                    <div class="w3-card-16">
                        <header class="w3-container w3-blue">
                            <h5>summary report on Inventory levels</h5>
                        </header>
                        <div id="container" style="width: 100%;">
                            <table class="w3-table w3-striped w3-border">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>level</th>
                                    <th>Price</th>
                                    <th>Reorder</th>
                                </tr>
                                </thead>
                                @foreach($products as $product)
                                <tbody>
                                <tr>
                                    <td>{{ $product->prod_code }}</td>
                                    <td>{{ $product->prod_name }}</td>
                                    <td>{{ $product->qty }}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{ $product->reorder }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!--end col-lg-4-->
{{--}}                <div class="col-lg-6">
                    <div class="w3-card-16">
                        <header class="w3-container w3-blue">
                            <h5>summary report on sales products</h5>
                        </header>

                        <div id="canvas-holder" style="width:100%">
                            <canvas id="chart-area"></canvas>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="w3-card-16">
                        <header class="w3-container w3-blue">
                            <h5>summary report on sales types</h5>
                        </header>

                        <div id="canvas-holder" style="width:100%">
                            <canvas id="chart-area1"></canvas>
                        </div>
                    </div>
                </div>
--}}
            </div>
        </div>




    </div>
</div>

</div>





<script>
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };

    var config = {
        type: 'pie',
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
                label: 'Dataset 1'
            }],

            labels: [
                @foreach($products as $product)
                '{{ $product->prod_name }}',
                @endforeach
/* 'Batteries',
                'shock absorbers',
                'terminals',
                'others'*/
            ]

        },

        options: {
            responsive: true
        }
    };

    window.onload = function() {
        var ctx = document.getElementById('chart-area').getContext('2d');
        window.myPie = new Chart(ctx, config);
    };

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
    });
</script>




</div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.datatable_script')
</body>
{{--}}
<script>
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };

    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
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
                'y12',
                'malata',
                'tiles',
                'door frames',
                'cement'
            ]
        },
        options: {
            responsive: true
        }
    };

    window.onload = function() {
        var ctx = document.getElementById('chart-area2').getContext('2d');
        window.myPie = new Chart(ctx, config);
    };

    document.getElementById('randomizeData2').addEventListener('click', function() {
        config.data.datasets.forEach(function(dataset) {
            dataset.data = dataset.data.map(function() {
                return randomScalingFactor();
            });
        });

        window.myPie.update();
    });

    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset2').addEventListener('click', function() {
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

    document.getElementById('removeDataset2').addEventListener('click', function() {
        config.data.datasets.splice(0, 1);
        window.myPie.update();
    });
</script>


<script>
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };

    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                ],
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.orange,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.blue,
                ],
                label: 'Dataset 11'
            }],
            labels: [
                'cash',
                'lpo',
                'credit',
                'cheque',
                'others'
            ]
        },
        options: {
            responsive: true
        }
    };

    window.onload = function() {
        var ctx = document.getElementById('chart-area1').getContext('2d');
        window.myPie = new Chart(ctx, config);
    };

    document.getElementById('randomizeData1').addEventListener('click', function() {
        config.data.datasets.forEach(function(dataset) {
            dataset.data = dataset.data.map(function() {
                return randomScalingFactor();
            });
        });

        window.myPie.update();
    });

    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset1').addEventListener('click', function() {
        var newDataset = {
            backgroundColor: [],
            data: [],
            label: 'New dataset1 ' + config.data.datasets.length,
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

    document.getElementById('removeDataset1').addEventListener('click', function() {
        config.data.datasets.splice(0, 1);
        window.myPie.update();
    });
</script>

--}}