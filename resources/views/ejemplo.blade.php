<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejmplo de Rutas en Laravel 5.2</title>
	<link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}" />
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Proyecto en Laravel 5.2</h1>
				<hr>
			</div>
			<div class="col-xs-12">
				<ul class="nav nav-pills">
					@foreach($carreras as $c)
					  <li role="presentation"><a href="{{url('alumnos')}}/{{$c->id}}">{{$c->nombre}}</a></li>
					@endforeach
				</ul>
			</div>
			@yield('contacto')
			@yield('home')
			@yield('registro')
			@yield('muestraRegistros')
			@yield('modificar')
			@yield('alumnos')
		</div>
	</div>
</body>
</html>