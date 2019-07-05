@extends('administrador')
@section('admincontent')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<div class="col-md-12">
            <div class="hidden-lg"></div>
      	    <h3 class="page-header">
               	<small>Registros Obtenidos</small>
            </h3>
			<hr color="black" size=1>
        </div>
        <div class="col-md-10"> 
			<table class="table">
				<thead align="center" class="thead-dark col-md-10">
					<tr>
						<th scope="col-md-10">Clave</th>
						<th scope="col-md-10">Nombre del Profesor</th>
						<th scope="col-md-10">Correo</th>
						<th scope="col-md-10">Matrícula</th>
						<th colspan="2" scope="col-md-10"><i class="fa fa-angle-down"></i> &nbsp;Opciones</th>
					</tr>
				</thead>
				@foreach($Maestros as $ma)
				<tbody class="col-md-10">
					<tr align="center">
						<th scope="row">{{$ma->IdMaestro}}</th>
						<td>{{$ma->NombreM}}&nbsp;{{$ma->APaterno}}&nbsp;{{$ma->AMaterno}}</td>
						<td>{{$ma->Correo}}</td>
						<td>{{$ma->Matricula}}</td>

						@if($ma->deleted_at == "")
						<td>
						<a href="{{URL::action('Categoria@MCategoria',['IdCategoria'=>$ma->IdCategoria])}}">
							<button type="submit" class="btn btn-warning">
								<i class="fa fa-fw fa-pencil-square-o"></i>
									Modificar
							</button>
						</a>
						</td>
						<td>
						<a href="{{URL::action('Maestro@Des_Maestro',['IdMaestro'=>$ma->IdMaestro])}}">
							<button type="submit" class="btn btn-danger">
								<i class="fa fa-fw fa-toggle-off"></i>
									Desactivar
							</button>
						</a>
						</td>
								
						@else
						<td>
						<a href="{{URL::action('Maestro@Act_Maestro',['IdMaestro'=>$ma->IdMaestro])}}">
							<button type="submit" class="btn btn-success">
								<i class="fa fa-fw fa-reply"></i> 
									&nbsp;Activar&nbsp;&nbsp;
							</button>
						</a>
						</td>
						<td>
						<a href="{{URL::action('Maestro@Del_Categoria',['IdMaestro'=>$ma->IdMaestro])}}">
							<button type="submit" class="btn btn-danger">
								<i class="fa fa-fw fa-trash"></i> 
									&nbsp;&nbsp;Eliminar&nbsp;
							</button>
						</a>
						</td>
						@endif
					</tr>
				@endforeach
  				</tbody>
	        </table>
        </div>
</body>
</html>
@endsection
