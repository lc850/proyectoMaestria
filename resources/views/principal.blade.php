<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Principal</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>UAS</h1>
                <hr>
            </div>
            <div class="col-xs-12">
				<ul class="nav nav-pills">
			    	<li class="active" role="presentation"><a>Principal</a></li>
			    	<li  role="presentation"><a href="{{url('/materias')}}">Materias</a></li>
			    	<li  role="presentation"><a href="{{url('/maestros')}}">Maestros</a></li>
			    	<li  role="presentation"><a href="{{url('/alumnos')}}">Alumnos</a></li>
				</ul>
			</div>
			<div class="lista jumbotron col-xs-12">
				<img src="{{ asset('imagenes/uas.png') }}" style="float: right;" alt="" width="200px" height="240px" class="img-rounded">
				<p style="text-align: justify;">
					La Universidad Autónoma de Sinaloa, aunque con diversas denominaciones en sus 143 años de existencia, ha sido un significativo soporte cultural y moral de Sinaloa y el noroeste de México.

					Abrió sus puertas como Liceo Rosales el 5 de mayo de 1873, según decreto del gobernador liberal Eustaquio Buelna. La galería de sus notables alumnos, maestros, investigadores y egresados ilustres es prolongada: Eustaquio Buelna, Rafael Buelna Tenorio, Ruperto L. Paliza, Epitacio Osuna, Ramón Ponce de León, Bernardo J. Gastélum, Genaro Estrada, Solón Zabre Morell, Enrique Félix Castro, José Luis Ceceña Cervantes, entre otros muchos, tuvieron que ver con esta noble institución en distintos momentos de su historia.

					Como Colegio Rosales, ya en 1874 y siguientes se creó como la institución educativa superior más importante de Sinaloa y el noroeste. En 1918 recibe por vez primera la autonomía siendo Universidad de Occidente. En 1965 pasa a llamarse Universidad Autónoma de Sinaloa.

					La Universidad Autónoma de Sinaloa constituye actualmente un espacio cultural robusto donde conviven armónicamente las diferentes expresiones del pensamiento universal. El cultivo de la ciencia, la tecnología y las humanidades se traducen en acciones académicas progresivamente vigorosas.
				</p>
			</div>
		</div>
		<div class="row">
			@yield('maestros')
		</div>
		<footer class="row">
			<div class="col-xs-12 text-center">
				UAS 2016 &copy;
			</div>
		</footer>
	</div>
</body>
</html>