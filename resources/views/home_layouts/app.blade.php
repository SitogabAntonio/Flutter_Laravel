<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{url('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{url('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('vendors/styles/core.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{url('vendors/styles/icon-font.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{url('vendors/styles/style.css')}}" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{url('css/tiny-slider.css')}}">
    <link rel="stylesheet" href="{{url('css/aos.css')}}">
    <link rel="stylesheet" href="{{url('css/glightbox.min.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">

    <link rel="stylesheet" href="{{url('css/flatpickr.min.css')}}">


    <title>SIGRA | Sistem Informasi Gereja</title>
    @yield('styles')
</head>


<body style="background-color : #c9d8e4; ">

        @include('home_layouts._header')
        @yield('content')

    <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('js/tiny-slider.js')}}"></script>

    <script src="{{url('js/flatpickr.min.js')}}"></script>


    <script src="{{url('js/aos.js')}}"></script>
    <script src="{{url('js/glightbox.min.js')}}"></script>
    <script src="{{url('js/navbar.js')}}"></script>
    <script src="{{url('js/counter.js')}}"></script>
    <script src="{{url('js/custom.js')}}"></script>
    @yield('script')

</body>

</html>
