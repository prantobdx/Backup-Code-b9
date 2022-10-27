<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/')}}front-asset/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}front-asset/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}front-asset/css/style.css">
</head>
<body>

@include('front.includes.header')

@yield('content')

@include('front.includes.footer')

<script src="{{asset('front-asset')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('front-asset')}}/js/jquery-3.6.1.min.js"></script>
</body>
</html>
