<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">


	<!-- CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/iview.css')}}">
	<link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap-reboot.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/admin/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('assets/admin/css/jquery.mCustomScrollbar.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/admin/css/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/admin/css/admin.css')}}">

    @yield('css')

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{asset('assets/admin/icon/favicon-32x32.png')}}" sizes="32x32">
	<link rel="apple-touch-icon" href="{{asset('assets/admin/icon/favicon-32x32.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>FlixGo – Online Movies, TV Shows & Cinema HTML Template</title>
    <style>
        body{
            background-color: #2b2b31 !important;

        }
    </style>

</head>
<body >
    <div id="app">
   <div>

            @yield('content')
        </div>

    </div>
    @include('sweetalert::alert')



<!-- JS -->
<script src="{{mix('js/app.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/admin/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.mousewheel.min.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.mCustomScrollbar.min.js')}}"></script>
<script src="{{asset('assets/admin/js/select2.min.js')}}"></script>
<script src="{{asset('assets/admin/js/admin.js')}}"></script>

@yield('scripts')
</body>

</html>
