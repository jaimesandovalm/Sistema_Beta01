<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Label - Premium Responsive Bootstrap 4 Admin & Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets_Admin1/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets_Admin1/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="assets_Admin1/css/demo_1/style.css">
    <!-- Layout style -->
    <link rel="shortcut icon" href="assets_Admin1/images/favicon.ico" />
</head>

<body class="header-fixed">
    <!-- partial:partials/_header.html -->
    @include('Admin1.Layouts.nav')
    <!-- partial -->
    <div class="page-body">
        <!-- partial:partials/_sidebar.html -->
        @include('Admin1.Layouts.sidebar')
        <!-- partial -->
        <div class="page-content-wrapper">
            @yield('content')
            <!-- content viewport ends -->
            <!-- partial:partials/_footer.html -->
            @include('Admin1.Layouts.footer')
            <!-- partial -->
        </div>
        <!-- page content ends -->
    </div>
    <!--page body ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->
    <script src="assets_Admin1/vendors/js/core.js"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <script src="assets_Admin1/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets_Admin1/vendors/chartjs/Chart.min.js"></script>
    <script src="assets_Admin1/js/charts/chartjs.addon.js"></script>
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="assets_Admin1/js/template.js"></script>
    <script src="assets_Admin1/js/dashboard.js"></script>
    <!-- endbuild -->
</body>

</html>
