<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url('user/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('user/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('user/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('user/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('user/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('user/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('user/css/style.css')}}" type="text/css">
</head>
<body>

@include('inc.header')


    @yield('content')

    @include('inc.footer')
<!-- Js Plugins -->
<script src="{{url('user/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('user/js/bootstrap.min.js')}}"></script>
<script src="{{url('user/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('user/js/jquery.slicknav.js')}}"></script>
<script src="{{url('user/js/owl.carousel.min.js')}}"></script>
<script src="{{url('user/js/jquery.nice-select.min.js')}}"></script>
<script src="{{url('user/js/mixitup.min.js')}}"></script>
<script src="{{url('user/js/main.js')}}"></script>
</body>
</html>
