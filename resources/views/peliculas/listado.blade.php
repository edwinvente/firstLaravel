<h1>{{ $titulo }}</h1>
<p>Los personajes principales son</p>
@if(count($listado) > 0)
	@foreach($listado as $personaje)
		<ul>
			<li>{{ $personaje }}</li>
		</ul>
	@endforeach
@else
	<p>No hay personajes este año</p>
@endif

<?php echo isset($director)? $director:'No hay director'; ?>
