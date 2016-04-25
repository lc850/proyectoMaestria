@extends('inicio')
@section('registrarAlumno')
	<h1>Registrar de Alumno</h1>
		<div class="col-xs-8 well">
			<br>
			<form action="listaAlumnos" method="post">
				<div class="form-group">
					<label for="">Nombre:</label>
					<input name="nombre" type="text" class="form-control" placeholder="Nombre">
				</div>
				<div class="form-group">
					<label for="">Apellido:</label>
					<input name="apellido" type="text" class="form-control" placeholder="Apellido">
				</div>
				<div class="form-group">
					<label for="">Edad:</label>
					<input type="text" name="edad" class="form-control" placeholder="Edad">
				</div>
				<div class="form-group">
					<label for="">Sexo:</label><br>
					<input type="radio" name="sexo" value="Masculino" checked> Masculino <br>
					<input type="radio" name="sexo" value="Femenino" > Femenino
				</div>
				<button type="submit" class="btn btn-success">Registrar</button>
			</form>
		</div>
@stop