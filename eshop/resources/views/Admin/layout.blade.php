<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{url('admin/assets/img/favicon/favicon.icon')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{url('admin/assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{url('admin/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{url('admin/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{url('admin/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{url('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{url('admin/assets/vendor/libs/apex-charts/apex-charts.css')}}" />
    <!-- Helpers -->
    <script src="{{url('admin/assets/vendor/js/helpers.js')}}"></script>
    <script src="{{url('admin/assets/js/config.js')}}"></script>
</head>
<body>

@include('Admin.inc.header')



<!-- Core JS -->
<!-- build:js admin/assets/vendor/js/core.js -->
<script src="{{url('admin/assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{url('admin/assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{url('admin/assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{url('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

<script src="{{url('admin/assets/vendor/js/menu.js')}}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{url('admin/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

<!-- Main JS -->
<script src="{{url('admin/assets/js/main.js')}}"></script>

<!-- Page JS -->
<script src="{{url('admin/assets/js/dashboards-analytics.js')}}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
