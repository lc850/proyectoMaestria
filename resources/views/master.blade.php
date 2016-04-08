<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo de Blade</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Ejemplo de Blade</h1>
				<hr>
			</div>
			<div class="col-xs-12">
				<ul class="nav nav-pills">
				  <li role="presentation" class="active"><a href="{{url('/')}}">Home</a></li>
				  <li role="presentation"><a href="{{url('/consulta')}}">Consulta</a></li>
				  <li role="presentation"><a href="#">Messages</a></li>
				</ul>
			</div>
		</div>
		@yield('consulta')
		<div class="jumbotron">
		  <h1>Hello, world!</h1>
		  <p>...</p>
		  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
		</div>
		<div class="col-xs-12">
			FOOTER
		</div>
	</div>
</body>
</html>