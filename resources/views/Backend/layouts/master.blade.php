<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SmartEcommerce Admin Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('css/fonts/materialdesignicons.min.css')}}">
      <link rel="stylesheet" href="{{ asset('js/admin/popper.min.js')}}">
    <link rel="stylesheet" href="{{ asset('css/admin/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('flags/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/admin/vendor.bundle.base.js') }}">
    <link rel="stylesheet" href="{{ asset('js/admin/vendor.bundle.addons.js') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
     <link rel="stylesheet" href="{{ asset('admin_icons/font-awesome.min.css') }}">
     <link rel="stylesheet" href="{{ asset('admin_icons/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('css/admin/demo_style.css') }}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{ asset('css/admin/favicon.ico') }}">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      
       @include('Backend.partials.nav')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
       
        <!-- partial -->
        @include('sweetalert::alert')
        @include('Backend.partials.left_sidenavber')
         @yield('content')
      <!-- page-body-wrapper ends -->
    </div>
  </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('admin_icons/fontawesome.css')}}"></script>
    <script src="{{ asset('js/admin/vendor.bundle.base.js')}}"></script>
    <script src="{{ asset('js/admin/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('js/admin/off-canvas.js')}}"></script>
    <script src="{{ asset('js/admin/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('js/admin/dashboard.js')}}"></script>
    <!-- End custom js for this page-->
    <script src="{{asset('js/admin/jquery.cookie.js')}}" type="text/javascript"></script>
  </body>
</html>
