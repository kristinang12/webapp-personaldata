<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Personaldata-Kristinealcober</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset ('assets-homepage/img/favicon.png')}}" rel="icon">
  <link href="{{asset ('assets-homepage/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets-homepage/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('assets-homepage/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets-homepage/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('assets-homepage/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets-homepage/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets-homepage/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets-homepage/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.9.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    @include('layouts.navbar')

    @yield('content')

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets-homepage/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('assets-homepage/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('assets-homepage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets-homepage/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('assets-homepage/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('assets-homepage/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('assets-homepage/assets/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{ asset('assets-homepage/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{ asset('assets-homepage/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets-homepage/assets/js/main.js')}}"></script>

</body>

</html>