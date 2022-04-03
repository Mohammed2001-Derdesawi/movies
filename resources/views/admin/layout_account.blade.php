<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
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

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>FlixGo – Online Movies, TV Shows & Cinema HTML Template</title>

</head>
<body>
@yield('content')


<!-- JS -->
<script src="{{asset('assests/admin/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assests/admin/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assests/admin/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assests/admin/js/jquery.mousewheel.min.js')}}"></script>
<script src="{{asset('assests/admin/js/jquery.mCustomScrollbar.min.js')}}"></script>
<script src="{{asset('assests/admin/js/select2.min.js')}}"></script>
<script src="{{asset('assests/admin/js/admin.js')}}"></script>
@yield('scripts')
</body>

</html>
