 <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
				 <li class="">
                      <a href=javascript:" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          <img src="" alt=""> {{ Auth::user()->name }} <span class="caret"></span>

                          <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">

                      <li>
                          <a href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
                </li>               
              </ul>
            </nav>
          </div>
 </div>