
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <title>{{ env('APP_NAME') }}</title>

  {{-- <link rel="icon" href="http://ebook.test/uploads/book-icon.png"> --}}

  @include('layouts.header_scripts')

</head>
{{-- 
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
 --}}
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-stati-ctop">
      <div class="container">
        <div class="navbar-header">
          <a href="{{ url('/') }}" class="navbar-brand">{{ env('APP_NAME') }}</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active ">
              <a href="#">
                <i class="fa fa-home"></i>
                Home
              </a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
              @auth
                  {{-- // The user is authenticated... --}}
                  <li> <a href="http://ebook.test/home"> <i class="fa fa-user"></i> Winnie </a> </li>
              @endauth

              @guest
                  {{-- // The user is not authenticated... --}}
                  <li> <a href="{{ route('login') }}"> <i class="fa fa-sign-in"></i> Login </a> </li>
                  <li> <a href="{{ route('register') }}"> <i class="fa fa-user-plus"></i> Register </a> </li>
              @endguest
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>




  <!-- Full Width Column -->
  <div class="content-wrapper">

    <div class="container">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                  @yield('content')
      
                  <center>
                      <img src="{{ url('images/ad/336x280.jpg') }}">
                      <img src="{{ url('images/ad/336x280.jpg') }}">
                  </center>

                </div>
                @include('layouts.right_content');
            </div>
        </section>
        <!-- /.content -->

    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  
  @include('layouts.footer')

</div>
<!-- ./wrapper -->

@include('layouts.footer_scripts')

@stack('scripts')

</body>
</html>
