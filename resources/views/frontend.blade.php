@component('parts.frontend.page-header')@endcomponent

<!-- Page Wrapper -->
<div id="wrap" class="layout"> 
  
  <!-- Top bar -->
  @component('parts.frontend.topbar')@endcomponent
  
  <!-- Header -->
  @component('parts.frontend.header')@endcomponent
  
  @yield('content')
  <!-- End Content --> 
  
  @component('parts.frontend.footer')@endcomponent

  @component('parts.frontend.bottom')@endcomponent
</div>
<!-- End Page Wrapper --> 

@component('parts.frontend.page-footer')@endcomponent
