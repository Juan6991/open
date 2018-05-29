<!DOCTYPE html>
<html lang="es"> 
<head>
	<meta charset="utf-8">
	<title>@yield('tittle','Default') | OpenPlan </title>

	<link rel="stylesheet"   href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
	
</head>
@include('admin.templade.partials.nav')


<body>

		


		<section>
			@yield('content')
		</section>
		<script src="{{asset('plugins/jquery/js/jquery-3.3.1.js')}}"></script>
		<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

	
</body>
</html>