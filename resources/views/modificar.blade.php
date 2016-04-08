@extends('ejemplo')

@section('modificar')
	<div class="col-xs-12 well">
		<br>
		<form action="{{url('/actualizar')}}/{{$alumno->id}}" method="post">
			<div class="form-group">
				<label for="">Nombre:</label>
				<input name="nombre" type="text" class="form-control" placeholder="Nombre" value="{{$alumno->nombre}}">
			</div>
			<div class="form-group">
				<label for="">Edad:</label>
				<input type="text" name="edad" class="form-control" placeholder="Edad" value="{{$alumno->edad}}">
			</div>
			<div class="form-group">
				<label for="">Sexo:</label><br>
				@if($alumno->sexo=="Masculino")
					<input type="radio" name="sexo" value="Masculino" checked> Masculino <br>
					<input type="radio" name="sexo" value="Femenino" > Femenino
				@else
					<input type="radio" name="sexo" value="Masculino"> Masculino <br>
					<input type="radio" name="sexo" value="Femenino" checked> Femenino
				@endif
			</div>
			<div class="form-group">
				<select name="carrera" class="form-control">
					@foreach($carreras as $c)
						<option value="{{$c->id}}">{{$c->nombre}}</option>
					@endforeach
				</select>
			</div>
			<button type="submit" class="btn btn-success">Actualizar</button>
		</form>
	</div>
@stop