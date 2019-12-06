@if($personas && count($personas) >=1)
	<p>Existen las personas</p>
	@foreach($personas as $persona)
		<ul>
			<li>{{ $persona }}</li>
		</ul>
	@endforeach
	<p>Hay en mi lista: {{ count($personas) }} personas</p>
@else
	<p>No existen personas</p>
@endif