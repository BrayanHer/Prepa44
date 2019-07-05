@extends('administrador')
@section('admincontent')

<style>
* {
	margin:2px;
	padding:1px;
}
</style>

    <form action="{{route('GEditoriales')}}" method="POST" enctype='multipart/form-data'>                        
 		{{csrf_field()}}
		<div class="container">
			<div class="row">
				<div class="alert alert-primary col-md-12" role="alert" align="center">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AEditoriales">
						<i class="fa fa-fw fa-plus"></i>
					</button> &nbsp; Agregar nueva "Editorial"
				</div>
				<!-- Modal -->
    		    <div class="modal fade" id="AEditoriales" tabindex="-1" role="dialog" aria-labelledby="AEditorialesLabel" aria-hidden="true">
	    	      	<div class="modal-dialog" role="document">
			            <div class="modal-content">
	                        <div class="modal-header">
	                            <h5 class="modal-title" id="AEditorialesLabel"> Insertar Editorial </h5>
	                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                            	<span aria-hidden="true">&times;</span>
	                            </button>
	                        </div>	  		
	                        <div class="modal-body">
	                            @if($errors->first('IdEditorial')) 
	                            	<i> {{$errors->first('IdEditorial')}} </i> 
	                            @endif
	                            <div class="form-group col-xl-2">
	                                <label for="ejemplo_email_1"> Clave </label>
	                                <input type="text" class="form-control" id="IdEditorial" name="IdEditorial" value="{{$IdEditorial}}" readonly='readonly'>
	                            </div>
			        
	                            @if($errors->first('Editorial')) 
	                            	<i> {{$errors->first('Editorial')}} </i> 
	                            @endif	
	                            <div class="form-group col-xl-12">
	                                <label for="ejemplo_email_1"> Editorial </label>
	                                <input type="text" class="form-control" id="Editorial" name="Editorial" value="{{old('Editorial')}}" 
	                                                            placeholder="Introduce la Editorial">
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
        <div class="col-md-8"> 
			<table class="table">
				<thead align="center" class="thead-dark col-md-8">
					<tr>
						<th scope="col-md-10">Clave</th>
						<th scope="col-md-10">Editorial</th>
						<th colspan="2" scope="col-md-10"><i class="fa fa-angle-down"></i> &nbsp;Opciones</th>
					</tr>
				</thead>
				@foreach($Editoriales as $ed)
				<tbody class="col-md-10">
					<tr align="center">
						<th scope="row">{{$ed->IdEditorial}}</th>
						<td>{{$ed->Editorial}}</td>
                        
                        @if($ed->deleted_at == "")
						<td>
						<a href="{{URL::action('Editorial@MEditorial',['IdEditorial'=>$ed->IdEditorial])}}">
							<button type="submit" class="btn btn-warning">
								<i class="fa fa-fw fa-pencil-square-o"></i>
									Modificar
							</button>
						</a>
						</td>
						<td>
						<a href="{{URL::action('Editorial@ELEditorial',['IdEditorial'=>$ed->IdEditorial])}}">
							<button type="submit" class="btn btn-danger">
								<i class="fa fa-fw fa-toggle-off"></i>
									Desactivar
								</button>
						</a>
						</td>		
						@else
						<td>
						<a href="{{URL::action('Editorial@AEditorial',['IdEditorial'=>$ed->IdEditorial])}}">
							<button type="submit" class="btn btn-success">
								<i class="fa fa-fw fa-reply"></i> 
									&nbsp;Activar&nbsp;&nbsp;
							</button>
						</a>
						</td>
						<td>
						<a href="{{URL::action('Editorial@EFEditorial',['IdEditorial'=>$ed->IdEditorial])}}">
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