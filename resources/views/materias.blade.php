<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Lista Materias</title>
		<link rel="stylesheet" href="{{ asset("css/bootstrapCerulean.css") }}" />
	</head>
	<body>
	<h1>Listado de Materias</h1>
		<table class="table table-stripped table-hover">
			<thead>
				<tr>
					<th>Nombre Materia</th>
					<th>Año</th>
					<th>Semestre</th>
				</tr>
			</thead>
			<tbody>
					@foreach($materias as $materia)
						<tr>
							<td>{{$materia->nombre}}</td>
							<td>{{$materia->año}}</td>	
							<td>{{$materia->semestre}}</td>
						</tr>
					@endforeach		
			</tbody>
		</table>
	</body>
</html>
