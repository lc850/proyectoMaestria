@extends('ejemplo')

@section('alumnos')
	<div class="col-xs-12">
		<ul>
			@foreach($alumnos as $a)
				<li>$a->nombre</li>
			@endforeach
		</ul>
	</div>
@stop