<h1>{{ $titulo }}</h1>

<p>(Accion index del controlador de peliculas)</p>
@if(isset($pagina))
	La pagina es: <h3>{{ $pagina }}</h3>
@endif

<a href="{{ route('detalle.pelicula') }}">Ir al detalle</a>