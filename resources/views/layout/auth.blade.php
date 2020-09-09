<!DOCTYPE html>
<!-- saved from url=(0050)http://www.wpkixx.com/html/winku-dark/landing.html -->
<html lang="en" class=" "><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Winku Social Network Toolkit</title>
    <link rel="icon" href="http://www.wpkixx.com/html/winku-dark/images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{asset('assets/login/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/login/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/login/color.css')}}">
    <link rel="stylesheet" href="{{asset('assets/login/responsive.css')}}">

</head>
<body>
@yield('content')
@include('site.auth.includes.scripts')

@include('site.auth.includes.latest')
</body>
</html>
