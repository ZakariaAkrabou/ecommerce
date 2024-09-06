<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('layouts.admin.style')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('layouts.admin.side')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('layouts.admin.navbar')
        <!-- partial -->
        @include('admin.body')
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('layouts.admin.js')
  </body>
</html>