@extends('inicio')
@section('listaAlumnos')
	<div class="col-xs-12">
		<h1>Listado de Alumnos</h1>
			<table class="table table-stripped table-hover">
				<thead>
					<tr>
						<th>Nombre Completo</th>
						<th>Edad</th>
						<th>Sexo</th>
					</tr>
				</thead>
				<tbody>
					@foreach($clientes as $a)
						<tr>
							<td>{{$a->Nombre.' '.$a->Apellido}}</td>
							<td>{{$a->Edad}}</td>	
							<td>{{$a->Sexo}}</td>
							</tr>
					@endforeach		
				</tbody>
			</table>
	</div>
@stop