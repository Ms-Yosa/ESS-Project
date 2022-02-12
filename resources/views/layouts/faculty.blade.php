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
  <!-- Plugin css for this page -->
  <link rel="stylesheet"  href="{{ URL::to("vendors/datatables.net-bs4/dataTables.bootstrap4.css") }}">
  <link rel="stylesheet"  href="{{ URL::to("vendors/ti-icons/css/themify-icons.css") }}">
  <link rel="stylesheet"  href="{{ URL::to("js/select.dataTables.min.css") }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{  URL::asset('css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <!-- plugins:js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
  {{-- message toastr --}}
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
  <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body>
  <div class="container-scroller">
      <!-- Nav header start -->
      @include('partials.faculty.navbar')

    <div class="container-fluid page-body-wrapper">
      @include('partials.faculty.sidebar')
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

