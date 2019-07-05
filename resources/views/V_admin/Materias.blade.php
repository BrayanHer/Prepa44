@extends('administrador')
@section('admincontent')

<style>
* {
	margin:2px;
	padding:1px;
}
</style>
    <form action="{{route('GMaterias')}}" method="POST" enctype='multipart/form-data'>                        
   		{{csrf_field()}}
		<div class="container">
			<div class="row">
				<div class="alert alert-primary col-md-12" role="alert" align="center">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#IdMaterias">
						<i class="fa fa-fw fa-plus"></i>
					</button> &nbsp; Agregar nueva "Materia"
				</div>

				<!-- Modal -->
    		    <div class="modal fade" id="IdMaterias" tabindex="-1" role="dialog" aria-labelledby="IdMateriasLabel" aria-hidden="true">
		      		<div class="modal-dialog" role="document">
		        		<div class="modal-content">
		          			<div class="modal-header">
		            			<h5 class="modal-title" id="IdMateriasLabel"> Insertar Materia </h5>
		            			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              				<span aria-hidden="true">&times;</span>
		            			</button>
		          			</div>

				  			<div class="modal-body">
				    			@if($errors->first('IdMateria')) 
				     				<i> {{$errors->first('IdMateria')}} </i> 
		    					@endif
		    					<div class="form-group col-xl-2">
									<label for="ejemplo_email_1"> Clave </label>
									<input type="text" class="form-control" id="IdMateria" name="IdMateria" value="{{$IdMateria}}" readonly='readonly'>
								</div>
								
								@if($errors->first('Materia')) 
									<i> {{$errors->first('Materia')}} </i> 
								@endif	
								<div class="form-group col-xl-12">
									<label for="ejemplo_email_1"> Materia </label>
									<input type="text" class="form-control" id="Materia" name="Materia" value="{{old('Materia')}}" 
										placeholder="Introduce la Materia">
								</div>
							
								<label for="ejemplo_email_1"> Semestre </label>
									<select class="form-control col-xl-12" name='IdPeriodo'>
										@foreach($Periodos as $pe)
											<option> Seleccione un Semestre </option>
											<option value='{{$pe->IdPeriodo}}'>{{$pe->Periodo}}</option>
										@endforeach
									</select>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-success btn-md">
									<span  aria-hidden="true"></span> Enviar
								</button>
							</div>
		 		  		</div>
	  		  		</div>
				</div> 
			</div>
		</div> 
  	</form>

	<div class="col-md-12">
        <div class="hidden-lg"></div>
            <h3 class="page-header">
                <small> Materias </small>
            </h3>
			<hr color="black" size=1>
        </div>
        
		<div class="col-md-12"> 
			<table class="table">
				<thead align="center" class="thead-dark col-md-10">
					<tr>
						<th scope="col-md-10">Clave</th>
				 		<th scope="col-md-10">Materia</th>
	            	    <th scope="col-md-10">Semestre</th>
						<th colspan="2" scope="col-md-10"><i class="fa fa-angle-down"></i> &nbsp;Opciones</th>
					</tr>
				</thead>
				<tbody class="col-md-10">
					@foreach($Materias as $ma)
			    		<tr align="center">
							<th scope="row">{{$ma->IdMateria}}</th>
								<td>{{$ma->Materia}}</td>
								<td>{{$ma->Periodo}}</td>
				
                    			@if($ma->deleted_at == "")
									<td>
										<a href="{{URL::action('Materia@MMateria',['IdMateria'=>$ma->IdMateria])}}">
											<button type="submit" class="btn btn-warning">
												<i class="fa fa-fw fa-pencil-square-o"></i>
													Modificar
											</button>
										</a>
									</td>
									<td>
										<a href="{{URL::action('Materia@ELMateria',['IdMateria'=>$ma->IdMateria])}}">
											<button type="submit" class="btn btn-danger">
												<i class="fa fa-fw fa-toggle-off"></i>
													Desactivar
											</button>
										</a>
									</td>			
								@else
									<td>
										<a href="{{URL::action('Materia@AcMateria',['IdMateria'=>$ma->IdMateria])}}">
											<button type="submit" class="btn btn-success">
												<i class="fa fa-fw fa-reply"></i> 
													&nbsp;Activar&nbsp;&nbsp;
											</button>
										</a>
									</td>
									<td>
										<a href="{{URL::action('Materia@EFMateria',['IdMateria'=>$ma->IdMateria])}}">
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
@stop