@extends('principal')

@section('maestros')
	<div class="col-xs-12">
		<table class="table table-striped ">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Edad</th>
					<th>Sexo</th>
					<th>Materia</th>
					<th>Agregar</th>
					<th>Modificar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				@foreach($maestros as $a)
				<tr>
					<td>{{ $a->Id }}</td>
					<td>{{ $a->Nombre . " " . $a->Apellidos }}</td>
					<td>{{ $a->Sexo }}</td>
					<td>{{ $a->Edad }}</td>
					<td>{{ $a->GradoEstudios }}</td>
					<td><a href="{{ url('/agregarMaestro') }}"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a></td>
					<td><a href="{{ url('/modificarMaestro') }}/{{$a->id}}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
					<td><a href="{{ url('/eliminarMaestro') }}/{{$a->id}}"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a></td>	
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>	
@endsection