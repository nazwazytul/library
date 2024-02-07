<!-- resources/views/layouts/admin.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('templates/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ asset('templates/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('templates/assets/images/favicon.ico')}}" />
</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('partials.header')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_sidebar.html -->
           <!-- Sidebar Content -->
           @if (Auth::user()->role == 'petugas')
           @include('partials.sidebarpetugas')
       @endif
       @if (Auth::user()->role == 'admin')
       @include('partials.sidebar')
       @endif
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
   
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('partials.footer')
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
   
        

        <script src="{{ asset('templates/assets/vendors/js/vendor.bundle.base.js')}}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{ asset('templates/assets/vendors/chart.js/Chart.min.js')}}"></script>
        <script src="{{ asset('templates/assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('templates/assets/js/off-canvas.js')}}"></script>
        <script src="{{ asset('templates/assets/js/hoverable-collapse.js')}}"></script>
        <script src="{{ asset('templates/assets/js/misc.js')}}"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="{{ asset('templates/assets/js/dashboard.js')}}"></script>
        <script src="{{ asset('templates/assets/js/todolist.js')}}"></script>
        <!-- End custom js for this page -->
      </body>
    </html>
