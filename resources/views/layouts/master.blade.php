<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Página Laravel - @yield('titulo')</title>
</head>
<body>
	@section('header')
		<h1>Cabecera de la web Master</h1>
	@show
	<hr>

	<div class="container">
		@yield('content')
	</div>

	<hr>
	@section('footer')
		<h1>Pie de pagina de la web Master</h1>
	@show
</body>
</html>	