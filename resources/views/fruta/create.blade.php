@if (isset($fruta) && is_object($fruta))
	<h1>Editar fruta</h1>
@else
	<h1>Crear una fruta</h1>
@endif

<form action="{{ isset($fruta) ? action('FrutaController@update') : action('FrutaController@save') }}" method="post">
	{{ csrf_field() }}
	@if (isset($fruta))
		<input type="hidden" name="id" value="{{ $fruta->id }}">
	@endif
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" value="{{ isset($fruta->nombre) ? $fruta->nombre : '' }}">
	<br>
	<label for="descripcion">Descripcion</label>
	<input type="text" name="descripcion" value="{{ isset($fruta->nombre) ? $fruta->descripcion : '' }}">
	<br>
	<label for="precio">Precio</label>
	<input type="number" name="precio" value="{{ isset($fruta->nombre) ? $fruta->precio : 'o' }}">
	<br>
	<input type="submit" value="Guardar">
</form>