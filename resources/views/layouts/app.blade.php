<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Randera</title>


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css')}}">
    
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
        <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('app/css/jquery.dataTables.min.js')}}">

        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                       Inventory Control And Sales System
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                           @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class=" dropdown-menu " role="menu">
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
                        @endif
                    </ul>
                </div>
            </div>
        </nav>



        @yield('content')
        @include('includes.css')
        <div class="container">
            @if ($errors ->count() >0)
                <ul class="list-group">
                    @foreach ($errors as $error)
                        <li class="list-group-item-danger">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            @endif

            @if (Session::has('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">x</button>
                    {{ Session::get('success') }}
                </div>

            @endif
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('app/vendor/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('app/js/jquery-2.1.3.min.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}">

</script>
<script>
  @if (Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
  @endif

  @if (Session::has('info'))
    toastr.info("{{ Session::get('info') }}")
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
</script>
    <!--end of modal-->
   <!-- jQuery 2.1.4 -->
   <script src="{{ asset('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
   <!-- Bootstrap 3.3.5 -->
   <script src="{{ asset('js/bootstrap.min.js')}}"></script>
   <!-- SlimScroll -->
   <script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
   <!-- FastClick -->
   <script src="{{ asset('plugins/fastclick/fastclick.min.js') }}"></script>
   <!-- AdminLTE App -->
   <script src="{{ asset('js/app.min.js')}}"></script>
   <!-- AdminLTE for demo purposes -->
   <script src="{{ asset('js/demo.js')}}"></script>
   <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
   <script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js.autosum.js') }}"></script>

  <!-- jQuery 2.1.4 -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="{{ asset('app/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('plugins/select2/select2.full.min.js')}}"></script>
  <!-- SlimScroll -->
</body>
</html>
