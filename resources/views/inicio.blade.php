<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Alumnos</title>
		<link rel="stylesheet" href="{{ asset("css/bootstrapCerulean.css") }}" />
	</head>
	<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="nav nav-pills">
					
					<li role="presentation"><a href="{{url('/')}}">Listado Alumnos</a></li>
					<li role="presentation"><a href="{{url('/registrarAlumno')}}">Registro de Alumnos</a></li>
					</ul>
			</div>
		</div>
		<div class="row">
			@yield('registrarAlumno')
			@yield('listaAlumnos')
		</div>
	</div>
	</body>
</html>