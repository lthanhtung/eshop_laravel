<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="icon" type="image/x-icon" href="{{url('user/assets/favicon.ico')}}" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{url('user/assets/favicon.ico')}}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{url('user/css/styles.css')}}" rel="stylesheet" />
</head>
<body>

    @include('inc.nav')
    @include('inc.header')


    @yield('content')

    @include('inc.footer')
</body>
</html>
