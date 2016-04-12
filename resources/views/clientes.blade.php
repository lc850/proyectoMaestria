<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Clientes</title>
		<link rel="stylesheet" href="{{ asset("css/bootstrapCerulean.css") }}" />
	</head>
	<body>
	<h1>Listado de Clientes</h1>
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
	</body>
</html>
