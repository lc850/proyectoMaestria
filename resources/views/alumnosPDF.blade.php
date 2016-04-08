<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PDF Alumnos</title>
</head>
<body>
	<h1>Reporte de alumnos</h1>
	<hr>
	@foreach($alumnos as $a)
	<ol>
		<li>{{$a->nombre}}</li>
	</ol>
	@endforeach
</body>
</html>