@include('partials.core.head')
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('partials.core.topnav')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">      
      <!-- partial:partials/_sidebar.html -->
      @include('partials.core.sidenav')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          @include('partials.core.breadcrumb')

          <!-- Replace with extends -->
          @include('partials.core.pagecontent')       
          <!-- Replace with extends -->
          
        </div>
        <!-- content-wrapper ends -->
        @include('partials.core.footer')
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  @include('partials.core.js')
</html>