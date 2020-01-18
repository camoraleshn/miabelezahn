  @component('parts.backend.page-header')@endcomponent

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @component('parts.backend.sidebar')@endcomponent
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @component('parts.backend.navbar')@endcomponent
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        @yield('content')
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @component('parts.backend.footer')@endcomponent
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  @component('parts.backend.page-footer')@endcomponent
