@extends('administrador')
@section('admincontent')
<!-- inicia registros de tareas -->
<div class="col-md-12">
    <div class="hidden-lg"></div>
    <h3 class="page-header">
        <small>Registros Obtenidos</small>
    </h3>
	<hr color="black" size=1>
</div>
<form action="{{route('GDescripcion')}}" method="POST" enctype='multipart/form-data'>                         
{{csrf_field()}}
<div class="container">
	<div class="row">
		<table class="form-group col-xl-6" >
		<tr>
		<th>			<div class="form-group col-xl-6" hidden >
						<label for="ejemplo_email_1"> Clave </label>
						<input type="text" class="form-control" id="IdAviso" name="IdAviso" value="{{$IdAviso}}" readonly='readonly'>
					</div>

				<div class="form-group col-xl-12">
					<label for="ejemplo_email_1"> Rango de fechas para el pre-registro </label>
					<input type="text" class="form-control" id="Descripcion" name="Descripcion"placeholder="Ejem:5 al 28 Febrero del 2018">
					
				</div>
				
				</th>
		<th><div>				<br>
						<button type="submit" class="btn btn-success btn-sm">
							<span  aria-hidden="true"></span> Enviar
						</button>
				</div></th>
		</tr>
		</table>	
	</div>
</div>

</form>

<div class="col-md-12"> 
			<table class="table">
				<thead align="center" class="thead-dark col-md-12">
					<tr>
						<th scope="col-md-10">Clave</th>
						<th scope="col-md-10">Letra de Apellido</th>
						<th scope="col-md-10">Fecha de Tramite</th>
						<th colspan="2" scope="col-md-10"><i class="fa fa-angle-down"></i> &nbsp;Opciones</th>
					</tr>
				</thead>
				@foreach($Servicios as $serv)
				<tbody class="col-md-10">
					<tr align="center">
						<th scope="row">{{$serv->IdFRIR}}</th>
            			<th scope="row">{{$serv->LApellido}}</th>
            			<th scope="row">{{$serv->Fecha}}</th>
						<td>
							<a href="{{URL::action('PaginaWeb@MFecha',['IdFRIR'=>$serv->IdFRIR])}}">
								<button type="submit" class="btn btn-warning">
									<i class="fa fa-fw fa-pencil-square-o"></i>
										Modificar
								</button>
							</a>
						</td>
                    </tr>
				@endforeach
  				</tbody>
	        </table>
        </div>
<!-- fin de regestros de tareas -->
@stop
