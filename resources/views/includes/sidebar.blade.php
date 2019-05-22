<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                   <li><a href = "{{ route('dashboard') }}"><i class="fa fa-file"></i> Home<span class="fa fa-chevron-right"></span></a>

				   <li><a href="{{ route('products') }}"><i class="fa fa-building"></i>Inventory <span class="fa fa-chevron-down"></span></a>
                    <li><a href="{{ route('admin_index') }}"><i class="fa fa-building"></i>Customers <span class="fa fa-chevron-down"></span></a>

                  </li>
				    <li><a><i class="fa fa-file"></i>Reports<span class="hover fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{ route('reports') }}">Totals</a></li>
                        <li> <a href="{{ route('overall') }}">Overall</a></li>
                        <li> <a href="{{ route('repo.inventory') }}">Inventory</a></li>
                        <li><a href="{{ route('receivables') }}">receivables</a></li>
                        <li><a href="{{ route('chart') }}">Charts</a></li>
                        <li><a href="{{ route('receivables') }}">Summary</a></li>

                    </ul>
                    </li>
                    <li><a href = "{{ route('categories') }}"><i class="fa fa-file"></i> Categories<span class="fa fa-chevron-right"></span></a></li>
                  <li><a href = "{{ route('suppliers') }}"><i class="fa fa-building"></i> Suppliers <span class="fa fa-chevron-right"></span></a>

                  </li>
                  <li><a href = "{{ route('users.index') }}"><i class="fa fa-users"></i> Users <span class="fa fa-chevron-right"></span></a></li>
                  <li><a href = "{{ route('shop') }}"><i class="fa fa-history"></i> Shop <span class="fa fa-chevron-right"></span></a></li>
                 </ul>
              </div>
</div>
