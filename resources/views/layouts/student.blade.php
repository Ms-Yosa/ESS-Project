<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>AMSAI SIS</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ URL::to("vendors/feather/feather.css") }}">
  <link rel="stylesheet" href="{{ URL::to("vendors/ti-icons/css/themify-icons.css") }}">
  <link rel="stylesheet" href="{{ URL::to("vendors/css/vendor.bundle.base.css") }}">
  <!-- endinject -->
    <!-- FONT -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet"> -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet"  href="{{ URL::to("vendors/datatables.net-bs4/dataTables.bootstrap4.css") }}">
  <link rel="stylesheet"  href="{{ URL::to("vendors/ti-icons/css/themify-icons.css") }}">
  <link rel="stylesheet"  href="{{ URL::to("js/select.dataTables.min.css") }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{  URL::asset('css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />


  <!-- table -->
  <style>
        .my-custom-scrollbar {
            position: relative;
            height: 500px;
            overflow: auto;
        }
        .table-wrapper-scroll-y {
            display: block;
        }
    </style>

  <!-- plugins:js -->
  <script src="{{ URL::to('vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ URL::to('vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ URL::to('vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ URL::to('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ URL::asset('js/dataTables.select.min.js') }}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ URL::asset('js/off-canvas.js') }}"></script>
  <script src="{{ URL::asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ URL::asset('js/template.js') }}"></script>
  <script src="{{ URL::asset('js/settings.js') }}"></script>
  <script src="{{ URL::asset('js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script type="text/javascript" src="{{ URL::asset('js/dashboard.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/Chart.roundedBarCharts.js') }}"></script>
  <!-- End custom js for this page-->
</head>
<body>
  <div class="container-scroller">
      <!-- Nav header start -->
      @include('partials.user.navbar_user')

    <div class="container-fluid page-body-wrapper">
      @include('partials.user.sidebar_user')
      <!-- Nav header end -->
      <!-- Content body start -->
      @yield('content')
      <!-- Content body end -->
    </div>
        <!-- Footer start -->
        @include('partials.user.footer_user')
        <!-- Footer end -->
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
</body>

</html>

