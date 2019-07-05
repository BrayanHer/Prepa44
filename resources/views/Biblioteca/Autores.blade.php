@extends('administrador')
@section('admincontent')

<style>
* {
	margin:2px;
	padding:1px;
}
</style>

	<form action="{{route('GAutores')}}" method="POST" enctype='multipart/form-data'>                        
		{{csrf_field()}}
		<div class="container">
			<div class="row">
				<div class="alert alert-primary col-md-12" role="alert" align="center">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AAutores">
						<i class="fa fa-fw fa-plus"></i>
					</button> &nbsp; Agregar nuevo "Autor"
				</div>
				<!-- Modal -->
		    	<div class="modal fade" id="AAutores" tabindex="-1" role="dialog" aria-labelledby="AAutoresLabel" aria-hidden="true">
		     		<div class="modal-dialog" role="document">
		        		<div class="modal-content">
		          			<div class="modal-header">
		            			<h5 class="modal-title" id="AAutoresLabel"> Insertar Autor </h5>
		            			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              				<span aria-hidden="true">&times;</span>
		            			</button>
		          			</div>
							<div class="modal-body">
								@if($errors->first('IdAutor')) 
									<i> {{$errors->first('IdAutor')}} </i> 
								@endif
								<div class="form-group col-xl-2">
									<label for="ejemplo_email_1"> Clave </label>
									<input type="text" class="form-control" id="IdAutor" name="IdAutor" value="{{$IdAutor}}" readonly='readonly'>
								</div>
		        
								@if($errors->first('Nombre')) 
									<i> {{$errors->first('Nombre')}} </i> 
								@endif	
								<div class="form-group col-xl-12">
									<label for="ejemplo_email_1"> Nombre </label>
									<input type="text" class="form-control" id="Nombre" name="Nombre" value="{{old('Nombre')}}" 
										placeholder="Introduce su Nombre">
								</div>

								@if($errors->first('APaterno')) 
									<i> {{$errors->first('APaterno')}} </i> 
								@endif	
								<div class="form-group col-xl-12">
									<label for="ejemplo_email_1"> Apellido Paterno </label>
									<input type="text" class="form-control" id="APaterno" name="APaterno" value="{{old('APaterno')}}" 
										placeholder="Introduce su Apellido Paterno">
								</div>

								@if($errors->first('AMaterno')) 
									<i> {{$errors->first('AMaterno')}} </i> 
								@endif
								<div class="form-group col-xl-12">
									<label for="ejemplo_email_1"> Apellido Materno </label>
									<input type="text" class="form-control" id="AMaterno" name="AMaterno" value="{{old('AMaterno')}}"
										placeholder="Introduce su Apellido Materno">
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
          				<small> Registros Obtenidos </small>
        			</h3>
					<hr color="black" size=1>
      		</div>
      		<div class="col-md-10"> 
				<table class="table">
					<thead align="center" class="thead-dark col-md-10">
						<tr>
							<th scope="col-md-10">Clave</th>
							<th scope="col-md-10">Nombre</th>
							<th scope="col-md-10">Apellido Paterno</th>
							<th scope="col-md-10">Apellido Materno</th>
							<th colspan="2" scope="col-md-10"><i class="fa fa-angle-down"></i> &nbsp;Opciones</th>

						</tr>
					</thead>
					@foreach($Autores as $au)
					<tbody class="col-md-10">
						<tr align="center">
							<th scope="row">{{$au->IdAutor}}</th>
							<td>{{$au->Nombre}}</td>
							<td>{{$au->APaterno}}</td>
							<td>{{$au->AMaterno}}</td>

							@if($au->deleted_at == "")
							<td>
							<a href="{{URL::action('Autor@MAutor',['IdAutor'=>$au->IdAutor])}}">
								<button type="submit" class="btn btn-warning">
									<i class="fa fa-fw fa-pencil-square-o"></i>
										Modificar
								</button>
							</a>
							</td>
							<td>
							<a href="{{URL::action('Autor@ELAutor',['IdAutor'=>$au->IdAutor])}}">
								<button type="submit" class="btn btn-danger">
									<i class="fa fa-fw fa-toggle-off"></i>
										Desactivar
								</button>
							</a>
							</td>
								
							@else
							<td>
							<a href="{{URL::action('Autor@AAutor',['IdAutor'=>$au->IdAutor])}}">
								<button type="submit" class="btn btn-success">
									<i class="fa fa-fw fa-reply"></i> 
										&nbsp;Activar&nbsp;&nbsp;
								</button>
							</a>
							</td>
							<td>
							<a href="{{URL::action('Autor@EFAutor',['IdAutor'=>$au->IdAutor])}}">
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