<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
	<link href="/vendor/sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet">
	<link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link type="text/css" href="/build/css/app.css" rel="stylesheet">
	<link type="text/css" href="/build/css/bootstrap-datepicker.css" rel="stylesheet">
	<script type="text/javascript" src="/build/js/jquery.min.js"></script>				
	<script type="text/javascript" src="/vendor/bootstrap/js/bootstrap.min.js"></script>	
	<title>COTIZADOR SEGUROS | @yield('title')</title>
</head>
<body>
	@include('layouts.header')
	<div id="page-wrapper" style="min-height: 626px;">
		@yield('content')
	</div>
	@include('layouts.footer')	
	<script src="/vendor/metisMenu/metisMenu.min.js"></script>
	<script src="/vendor/sb-admin-2/js/sb-admin-2.min.js"></script>
	<script type="text/javascript" src="/build/js/app.js"></script>	
	<script type="text/javascript" src="/build/js/bootstrap-datepicker.js"></script>
</body>
</html>