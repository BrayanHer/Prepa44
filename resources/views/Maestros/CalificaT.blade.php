@extends('administrador')
@section('admincontent')
<style>
tbody{
    font-size:15px;
}
</style>
<div class="col-md-12">
      			<div class="hidden-lg"></div>
      				<h3 class="page-header">
          				<small> Calificacion de Tareas </small>
        			</h3>
					<hr color="black" size=1>
      		</div>
      		<div class="col-md-12"> 
              <table class="table">
					<thead align="center" class="thead-dark col-md-10">
						<tr>
							<th scope="col-md-5">Clave</th>
							<th scope="col-md-5">Materia</th>
							<th scope="col-md-5">Tema</th>
							<th scope="col-md-5">Alumno</th>
							<th scope="col-md-5">Archivo</th>
							<th scope="col-md-5">Calificacion</th>
							<th scope="col-md-5"><i class="fa fa-angle-down"></i> &nbsp;Opciones</th>

						</tr>
					</thead>
					<!-- ___ -->@foreach($Califica as $Cal)
					<tbody class="col-md-10">
						<tr align="center">
							<th scope="row">{{$Cal->IdTEnt}}</th>
							<td>{{$Cal->Materia}}</td>
							<td>{{$Cal->Tema}}</td>
                            <td>{{$Cal->Alumno}}</td>
							<td>{{$Cal->Archivo}}</td>
							<td>{{$Cal->Calificacion}}</td>
							<td>
							<a href="{{URL::action('Tarea@ModCalificacion',['IdTEnt'=>$Cal->IdTEnt])}}">
								<button type="submit" class="btn btn-warning btn-sm">
									<i class="fa fa-fw fa-pencil-square-o"></i>
										Modificar
								</button>
							</a>
							</td>	
						</tr>
					<!-- ___ -->@endforeach
  					</tbody>
				</table>
      		</div>
@stop
