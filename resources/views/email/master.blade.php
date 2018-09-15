@include('layouts.header')
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
                </div>
            </div>
        </section>
        <!-- /.content -->

    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  

</div>
<!-- ./wrapper -->

@include('layouts.footer_scripts')

@stack('scripts')

</body>
</html>
