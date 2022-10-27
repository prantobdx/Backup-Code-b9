<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class-15</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ultra&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css">
</head>
<body>
<div class="container-fluid p-0">

    @include('include.header')

    @yield('content')

    @include('include.footer')

</div>

<script src="{{asset('/')}}assets/js/bootstrap.bundle.js"></script>
</body>
</html>
