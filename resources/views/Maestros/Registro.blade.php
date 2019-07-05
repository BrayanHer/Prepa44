@extends('administrador')
@section('admincontent')
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Registros de Maestros</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
		<script src="main.js"></script>
	</head>
	
	<style>
		* {
			margin:1px;
			padding:1px;
		}
		::-webkit-input-placeholder { /* Chrome */
			font-size: 13px;
		}

		::-moz-placeholder{
			font-size: 13px;
		}
	</style>

	<body>
		<form action="{{route('G_Maestro')}}" method="POST" enctype='multipart/form-data'>
			{{csrf_field()}}
				<div class="container">
					<div class="row">
					@include('partials.alertas')
<!-- ------------------Aqui va el separador------------------------------------- -->
						<div class="col-xl-12">
            				<div class="hidden-lg"></div>
                			<h3 class="page-header">
				                <p><i class="fa fa-users"></i>&nbsp;Registro de Profesores</p>
                			</h3>
							<hr color="black" size=1>
        				</div>
<!-- ------------------Termina el separador------------------------------------- -->

						<div class="form-group col-xl-1">
							@if($errors->first('IdMaestro')) 
								<small> {{ $errors->first('IdMaestro') }} </small> <br>
							@endif
							<label for="ejemplo_email_1">Clave</label>
							<input type="text" class="form-control" id="IdMaestro" name="IdMaestro"  value="{{$IdMaestro}}" readonly>
						</div>

						<div class="form-group col-xl-3">
							@if($errors->first('Matricula')) 
								<small> {{ $errors->first('Matricula') }} </small> <br>
							@endif
							<label for="ejemplo_email_1">Matrícula</label>
							<input type="text" class="form-control" id="Matricula" name="Matricula" placeholder="Introduce su Matrícula">
						</div>

						<div class="form-group col-xl-3">
							@if($errors->first('NombreM')) 
								<small> {{ $errors->first('NombreM') }} </small> <br>
							@endif
							<label for="ejemplo_email_1">Nombre</label>
							<input type="text" class="form-control" id="NombreM" name="NombreM"	placeholder="Introduce su Nombre">
						</div>

						<div class="form-group col-xl-3">
							@if($errors->first('APaterno')) 
								<small> {{ $errors->first('APaterno') }} </small> <br>
							@endif
							<label for="ejemplo_email_1">Apellido Paterno</label>
							<input type="text" class="form-control" id="APaterno" name="APaterno" placeholder="Introduce su Apellido Paterno">
						</div>
			
						<div class="form-group col-xl-3">
							@if($errors->first('AMaterno')) 
								<small> {{ $errors->first('AMaterno') }} </small> <br>
							@endif
							<label for="ejemplo_email_1">Nombre Materno</label>
							<input type="text" class="form-control" id="AMaterno" name="AMaterno" placeholder="Introduce su Apellido Materno">
						</div>
			
						<div class="form-group col-xl-3">
							@if($errors->first('Correo')) 
								<small> {{ $errors->first('Correo') }} </small> <br>
							@endif
							<label for="ejemplo_email_1">Correo</label>
							<input type="text" class="form-control" id="Correo" name="Correo" placeholder="Introduce su Correo">
						</div>

						<div class="form-group col-xl-3">
							@if($errors->first('Telefono')) 
								<small> {{ $errors->first('Telefono') }} </small> <br>
							@endif
							<label for="ejemplo_email_1">Teléfono</label>
							<input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Introduce su Teléfono">
						</div>
<!-- --------------termina formulario -->
<!-- button -->
						<div class="container">
							<div>
								<button type="submit" class="btn btn-success btn-md"> Guardar </button>
							</div>
						</div>
<!-- end button -->
					</div>
				</div>
		</form>	
	</body>
</html>
@endsection
