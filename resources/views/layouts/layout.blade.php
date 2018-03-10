<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home | Job ShowRoom </title>
    <meta name="description" content="Job ShowRoom , Job portal Nepal">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Google fonts links-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!--Font awesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Core css -->
    {{--<link rel="stylesheet" href="css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}">

    <link href="css/animate.min.css" rel="stylesheet">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">

    <!-- Responsive css-->
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css')}}" />
    <!--[if lt IE 9]>
    <script src="{{ URL::asset('js/html5shiv.js')}}"></script>
    <script src="{{ URL::asset('js/respond.min.js')}}"></script>    <![endif]-->
</head>

<body>
<div class="page-wrapper">
    @yield('body')
</div>


@include('layouts.footer')
</body>
</html>

