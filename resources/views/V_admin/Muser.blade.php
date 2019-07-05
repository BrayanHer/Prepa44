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
		<form  method="POST" enctype='multipart/form-data'>
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
					</div>
				</div>
		</form>	
	</body>
</html>
@endsection
