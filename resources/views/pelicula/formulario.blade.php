<h1>Formulario en laravel</h1>

<form action="{{ action('PeliculaController@recibir') }}" method='post'>
	{{ csrf_field() }}
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" />
	<br>
	<label for="email">Correo</label>
	<input type="text" name="email" />
	<br>
	<input type="submit" value="Enviar">
</form>