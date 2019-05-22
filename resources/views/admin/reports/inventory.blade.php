
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
                            @foreach ($company as $details)
        <h5><b>{{ $details->name}}</b> </h5>
        <h6>Address: {{ $details->address}}</h6>
        <h6>Contact #: {{ $details->contact}}</h6>

        <h5><b>purchases as of <?php echo date("M d, Y");?></b></h5>
                            @endforeach
        <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Print</a>
        <a class = "btn btn-primary btn-print" href = "{{ redirect()->back() }}"><i class ="glyphicon glyphicon-arrow-left"></i> Back to Homepage</a>

        <table class="table table-bordered table-striped">
                    <thead>
					
                      <tr>
					      <th>Product Name</th>
                        <th>Qty Left</th>
						
            						<th>Price</th>
            						<th>Total</th>
            						<th>Reorder</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
							<tr>
                        <td>{{ $product->prod_name }}</td>
                        <td>{{ $product->qty }}</td>
						
						<td>{{ $product->price }}</td>
						<td>{{ $product->price * $product->qty }}</td>
                          @if($product->qty < $product->reorder)
						<td class="text-center">{{ $product->reorder }} <span class='badge bg-red'><i class='glyphicon glyphicon-refresh'></i>Reorder</span>
                            @endif
                        </td>

                      </tr>

@endforeach
                    </tbody>
                    <tfoot>

                    <tr>

                        <th colspan="5">Prepared by:</th>

                    </tr>

                    <tr>
                        <td>{{Auth::user()->name}}</td>

                    </tr>

                    </tfoot>
                  </table>
                </div>
						</div>
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

	@include('includes.datatable_script')    <!-- /gauge.js -->
  </body>
</html>
