<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Resume JMasterDev1990</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Resume Website Template Free Download" name="keywords">
    <meta content="Resume Website Template Free Download" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="assets/lib/slick/slick.css" rel="stylesheet">
    <link href="assets/lib/slick/slick-theme.css" rel="stylesheet">
    <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <div class="wrapper">

        <!--Sidebar-->
        @include('Layouts.sidebar')
        <!--FinSidebar-->

        <div class="content">
            <!-- Header Start -->
            @include('Resumen.header')
            <!-- Header End -->

            <!-- Large Button Start -->
            <div class="large-btn">
                <div class="content-inner">
                    <a class="btn" href="#"><i class="fa fa-download"></i>Resume</a>
                    <a class="btn" href="#"><i class="fa fa-hands-helping"></i>Hire Me</a>
                </div>
            </div>
            <!-- Large Button End -->

            <!-- About Start -->
            @include('Resumen.about')
            <!-- About End -->

            <!-- Education Start -->
            @include('Resumen.education')
            <!-- Education Start -->

            <!-- Experience Start -->
            @include('Resumen.experience')
            <!-- Experience Start -->

            <!-- Service Start -->
            @include('Resumen.service')
            <!-- Service Start -->

            <!-- Portfolio Start -->
            @include('Resumen.portfolio')
            <!-- Portfolio Start -->

            <!-- Review Start -->
            @include('Resumen.review')
            <!-- Review End -->

            <!-- Contact Start -->
            @include('Resumen.contact')
            <!-- Contact End -->

            <!-- Footer Start -->
            @include('Layouts.footer')
            <!-- Footer Start -->
        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/slick/slick.min.js"></script>
    <script src="assets/lib/typed/typed.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
</body>

</html>
