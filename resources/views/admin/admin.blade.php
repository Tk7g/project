@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('layouts.partials.mainheader')
  @include('layouts.partials.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section class="content">
      @yield('main-content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.partials.controlsidebar')
  @include('layouts.partials.footer')

  
</div>
<!-- ./wrapper -->

@section('scripts')
    @include('layouts.partials.scripts')
@show
</body>
</html>
