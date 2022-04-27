<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16"  style="border-radius:25px" href="{{ URL::to('Assets/Logo.png') }}">
    <!-- Datatable -->
    <link href="{{ URL::to('assets_reference/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::to('assets_reference/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets_reference/css/style.css') }}">
	<link rel="stylesheet" href="{{ URL::to('assets_reference/css/skin.css') }}">
    <!-- Pick date -->
    <link rel="stylesheet" href="{{ URL::to('assets_reference/vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets_reference/vendor/pickadate/themes/default.date.css') }}">
    {{-- message toastr --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        .my-custom-scrollbar {
            position: relative;
            height: 500px;
            overflow: auto;
        }
        .table-wrapper-scroll-y {
            display: block;
        }
        *{
            margin: 0;
            padding: 0;
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
    <!-- Preloader start -->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- Preloader end -->
    <!-- Main wrapper start -->
    <div id="main-wrapper">
        <!-- Nav header start -->

            <div class="nav-header">
                <div>
                   <strong> <span class="navbar-brand nav-label first" style="color:black;text-align:left;padding-left:39px">AMSAI Learning School <br> <small>Student Information System</small> </span></strong>
                </div>

                    <div class="nav-control" >

                    <div class="hamburger">
                        <img class="logo-abbr" style="border-radius:25px; border: 2px solid #FD6300;" src="{{ URL::to('Assets/Logo.png') }}" alt="">

                    </div>

                </div>

            </div>


        <!-- Nav header end -->

        <!-- Sidebar start -->

        @include('partials.admin.sidebar')

        <!-- Sidebar end -->

		<!-- Content body start -->
        @yield('content')
        <!-- Content body end -->

        <!-- Footer start -->
        <br/>
        @include('partials.user.footer_user')
        <!-- Footer end -->
    </div>

    <!-- Required vendors -->
    <script src="{{ URL::to('assets_reference/vendor/global/global.min.js') }}"></script>
	<script src="{{ URL::to('assets_reference/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ URL::to('assets_reference/js/custom.min.js') }}"></script>
    <!-- Chart Morris plugin files -->
    <script src="{{ URL::to('assets_reference/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ URL::to('assets_reference/vendor/morris/morris.min.js') }}"></script>
	<!-- Chart piety plugin files -->
    <script src="{{ URL::to('assets_reference/vendor/peity/jquery.peity.min.js') }}"></script>
	<!-- Demo scripts -->
    <script src="{{ URL::to('assets_reference/js/dashboard/dashboard-2.js') }}"></script>
    <!-- Datatable -->
    <script src="{{ URL::to('assets_reference/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::to('assets_reference/js/plugins-init/datatables.init.js') }}"></script>
	<!-- Svganimation scripts -->
    <script src="{{ URL::to('assets_reference/vendor/svganimation/vivus.min.js') }}"></script>
    <script src="{{ URL::to('assets_reference/vendor/svganimation/svg.animation.js') }}"></script>
    <!-- <script src="{{ URL::to('assets_reference/js/styleSwitcher.js') }}"></script> -->
    <!-- pickdate -->
    <script src="{{ URL::to('assets_reference/vendor/pickadate/picker.js') }}"></script>
    <script src="{{ URL::to('assets_reference/vendor/pickadate/picker.time.js') }}"></script>
    <script src="{{ URL::to('assets_reference/vendor/pickadate/picker.date.js') }}"></script>
    <!-- Pickdate -->
    <script src="{{ URL::to('assets_reference/js/plugins-init/pickadate-init.js') }}"></script>
    {{-- file upload --}}
    <script src="{{ URL::to('assets_reference/js/file-upload.js') }}"></script>

</body>
</html>