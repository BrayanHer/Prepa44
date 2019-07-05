@extends('administrador')
@section('admincontent')

<style>
* {
	margin:2px;
	padding:1px;
}
</style>
    <form action="{{route('GPrestamos')}}" method="POST" enctype='multipart/form-data'>                        
   		{{csrf_field()}}
		<div class="container">
			<div class="row">
				<div class="alert alert-primary col-md-12" role="alert" align="center">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#IdPrestamos">
						<i class="fa fa-fw fa-plus"></i>
					</button> &nbsp; Nuevo "Prestamo de Libro"
				</div>
				<!-- Modal -->
    		    <div class="modal fade" id="IdPrestamos" tabindex="-1" role="dialog" aria-labelledby="IdPrestamosLabel" aria-hidden="true">
		      		<div class="modal-dialog" role="document">
		        		<div class="modal-content">
		          			<div class="modal-header">
		            			<h5 class="modal-title" id="IdPrestamosLabel"> Prestamo Libro </h5>
		            			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              				<span aria-hidden="true">&times;</span>
		            			</button>
		          			</div>

				  			<div class="modal-body">
							    @if($errors->first('IdPrestamo')) 
							    	<i> {{$errors->first('IdPrestamo')}} </i> 
					    		@endif
		    					<div class="form-group col-xl-2">
									<label for="ejemplo_email_1"> Clave </label>
									<input type="text" class="form-control" id="IdPrestamo" name="IdPrestamo" value="{{$IdPrestamo}}" readonly='readonly'>
								</div>
		        
								@if($errors->first('IdAlumno')) 
									<i> {{$errors->first('IdAlumno')}} </i> 
								@endif	
								<div class="form-group col-xl-12">
									<label for="ejemplo_email_1"> Matrícula </label>
            							<select class="form-control" name='IdAlumno'>
											@foreach($Alumnos as $al)
												<option> Seleccione una Matrícula </option>
												<option value='{{$al->IdAlumno}}'>{{$al->Matricula}} </option>
											@endforeach
										</select>
								</div>

								@if($errors->first('IdLibro')) 
									<i> {{$errors->first('IdLibro')}} </i> 
								@endif	
								<div class="form-group col-xl-12">
									<label for="ejemplo_email_1"> Libro </label>
									<select class="form-control" name='IdLibro'>
										@foreach($Libros as $li)
											<option> Seleccione un Libro </option>
											<option value='{{$li->IdLibro}}'>{{$li->Titulo}} </option>
										@endforeach
									</select>
								</div>

								@if($errors->first('FechaPrestamo')) 
									<i> {{$errors->first('FechaPrestamo')}} </i> 
								@endif	
								<div class="form-group col-xl-12">
									<label for="ejemplo_email_1"> Fecha de Prestamo </label>
									<input type="Date" class="form-control" id="FechaPrestamo" name="FechaPrestamo" value="{{old('FechaPrestamo')}}" 
										placeholder="Introduce la Fecha de Prestamo">
								</div>

								@if($errors->first('FechaEntrega')) 
									<i> {{$errors->first('FechaEntrega')}} </i> 
								@endif	
								<div class="form-group col-xl-12">
									<label for="ejemplo_email_1"> Fecha de Entrega </label>
									<input type="Date" class="form-control" id="FechaEntrega" name="FechaEntrega" value="{{old('FechaEntrega')}}" 
										placeholder="Introduce la Fecha de Entrega">
								</div>
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
                <small>Registros Obtenidos</small>
            </h3>
			<hr color="black" size=1>
        </div>
        <div class="col-md-12"> 
			<table class="table">
				<thead align="center" class="thead-dark col-md-12">
					<tr>
						<th scope="col-md-10">Clave</th>
						<th scope="col-md-10">Matrícula</th>
                        <th scope="col-md-10">Libro</th>
						<th scope="col-md-10">Fecha de Prestamo</th>
						<th scope="col-md-10">Fecha de Entrega</th>
						<th colspan="2" scope="col-md-10"><i class="fa fa-angle-down"></i> &nbsp;Opciones</th>
					</tr>
				</thead>
				@foreach($Prestamo as $pr)
				<tbody class="col-md-12">
					<tr align="center">
						<th scope="row">{{$pr->IdPrestamo}}</th>
                        <td>{{$pr->Alumno}}</td>
                        <td>{{$pr->Titulo}}</td>
                        <td>{{$pr->FechaPrestamo}}</td>
                        <td>{{$pr->FechaEntrega}}</td>
                        
                        @if($pr->deleted_at == "")
						<td>
						<a href="{{URL::action('PrestamoLibro@MPrestamo',['IdPrestamo'=>$pr->IdPrestamo])}}">
							<button type="submit" class="btn btn-warning">
								<i class="fa fa-fw fa-pencil-square-o"></i>
									Modificar
							</button>
						</a>
						</td>
						<td>
						<a href="{{URL::action('PrestamoLibro@ELPrestamo',['IdPrestamo'=>$pr->IdPrestamo])}}">
							<button type="submit" class="btn btn-danger">
								<i class="fa fa-fw fa-toggle-off"></i>
									Desactivar
							</button>
						</a>
						</td>	
						@else
						<td>
						<a href="{{URL::action('PrestamoLibro@APrestamo',['IdPrestamo'=>$pr->IdPrestamo])}}">
							<button type="submit" class="btn btn-success">
								<i class="fa fa-fw fa-reply"></i> 
									&nbsp;Activar&nbsp;&nbsp;
							</button>
						</a>
						</td>
						<td>
						<a href="{{URL::action('PrestamoLibro@EFPrestamo',['IdPrestamo'=>$pr->IdPrestamo])}}">
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