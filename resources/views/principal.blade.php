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
			    	<li  role="presentation"><a href="{{url('/')}}">Principal</a></li>
			    	<li  role="presentation"><a href="{{url('/materias')}}">Materias</a></li>
			    	<li  role="presentation"><a href="{{url('/maestros')}}">Maestros</a></li>
			    	<li  role="presentation"><a href="{{url('/alumnos')}}">Alumnos</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			@yield('maestros')
			@yield('info')
		</div>
		<footer class="row">
			<div class="col-xs-12 text-center">
				UAS 2016 &copy;
			</div>
		</footer>
	</div>
</body>
</html>