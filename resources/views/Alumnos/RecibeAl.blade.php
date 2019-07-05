@extends('administrador')
@section('admincontent')
<style>
tbody{
    font-size:15px;
}
#FontStr{
	color:#28a745;
}
</style>
<div class="col-md-12">
      			<div class="hidden-lg"></div>
      				<h3 class="page-header">
          				<small> Nuevas Tareas </small>
        			</h3>
					<hr color="black" size=1>
      		</div>
      		<div class="col-md-12"> 
              <table class="table">
					<thead align="center" class="thead-dark col-md-10">
						<tr>
							<th scope="col-md-5">Fecha</th>
							<th scope="col-md-5">Materia</th>
							<th scope="col-md-5">Tema</th>
							<th scope="col-md-5">Instrunciones</th>
							<th scope="col-md-5">Fecha Entrega</th>
							<th scope="col-md-5">Tipo de Entrega</th>
							<th scope="col-md-5">Enviar mi tarea</th>
					

						</tr>
					</thead>
					
					@foreach($Consulta as $ma)
				<tbody class="col-md-10">
					<tr align="center">
						<th scope="row">{{$ma->FechaHoraInicio}}</th>
						<td>{{$ma->Materia}}</td>
						<td>{{$ma->Tema}}</td>
						<td>{{$ma->Descripcion}}</td>
						<td>{{$ma->FechaHoraFin}}</td>
						<td>{{$ma->TipoTarea}}</td>

@if($ma->Archivo==" ")
		<td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#IdLibros">
						<i class="fa fa-fw fa-send"></i> Enviar Tarea
					</button></td>
@else
							<td>
							<strong id="FontStr"><i class="fa fa-check-square-o" aria-hidden="true"></i> &nbsp; Tarea Entregada</strong>
							</td>	
@endif	
                    </tr>
					
  					</tbody>
					  @endforeach
				</table>

      		</div>
			  <form action="{{route('GTarea')}}" method="POST" enctype='multipart/form-data'>
			  {{csrf_field()}}   
	 <div class="modal fade" id="IdLibros" tabindex="-1" role="dialog" aria-labelledby="IdLibrosLabel" aria-hidden="true">
		      		<div class="modal-dialog" role="document">
		        		<div class="modal-content">
		          			<div class="modal-header">
		            			<h5 class="modal-title" id="IdLibrosLabel"> Enviar Tarea</h5>
		            			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              				<span aria-hidden="true">&times;</span>
		            			</button>
		            			<!-- Aqui va el contenido -->

		            			<!-- Aqui termina el ontenido -->

		            		</div>
		            		<!-- Aqui va el contenido -->
							<div class="form-group col-xl-12">
									<input type="text" class="form-control" id="IdTEnt" name="IdTEnt" value="{{$IdTEnt}}" hidden >
								</div>

								@foreach($Consulta as $c)
								<div class="form-group col-xl-12" hidden>
									<input type="text" class="form-control" id="IdTarea" name="IdTarea" value="{{$c->IdTarea}}" >
								</div>

								<div class="form-group col-xl-12" hidden>
									<input type="text" class="form-control" id="IdAlumno" name="IdAlumno" value="{{$c->IdAlumno}}" >
								</div>
								@endforeach
							

								<div class="form-group col-xl-12">
									<label for="ejemplo_email_1"> Seleccione su Tarea </label>
									<input type="file" class="form-control" id="Archivo" name="Archivo" >
								</div>

								
								<div class="modal-footer">
								<button type="submit" class="btn btn-success btn-md">
									<span  aria-hidden="true"></span> Enviar
								</button>
				  			</div>
		            			<!-- Aqui termina el ontenido -->
		            		  
		            	</div>
		            </div>
		        </div>
		   

</form>
@stop
	