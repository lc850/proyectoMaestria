<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Materias</title>
		<link rel="stylesheet" href="{{ asset("css/bootstrapCerulean.css") }}" />
	</head>
	<body>
	<h1>Listado de materias</h1>
		<table class="table table-stripped table-hover">
			<thead>
				<tr>
					<th>Nombre </th>
				</tr>
			</thead>
			<tbody>
					@foreach($materias as $a)
						<tr>
							<td>{{$a->Nombre.' '.$a->Apellido}}</td>
						</tr>
					@endforeach		
			</tbody>
		</table>
	</body>
</html>
