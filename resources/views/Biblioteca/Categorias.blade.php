@extends('administrador')
@section('admincontent')

<style>
* {
	margin:2px;
	padding:1px;
}
</style>

    <form action="{{route('Gcategorias')}}" method="POST" enctype='multipart/form-data'>                        
		{{csrf_field()}}	  
		<div class="container">
			<div class="row">
				<div class="alert alert-primary col-md-12" role="alert" align="center">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#IdCategoria">
						<i class="fa fa-fw fa-plus"></i>
					</button> &nbsp; Agregar nueva "Categoria"
				</div>
				<!-- Modal -->
                <div class="modal fade" id="IdCategoria" tabindex="-1" role="dialog" aria-labelledby="IdCategoriaLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="IdCategoriaLabel"> Insertar Categoría </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                	<span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                @if($errors->first('IdCategoria')) 
                                	<i> {{$errors->first('IdCategoria')}} </i> 
                                @endif
                                <div class="form-group col-xl-2">
                                    <label for="ejemplo_email_1"> Clave </label>
                                    <input type="text" class="form-control" id="IdCategoria" name="IdCategoria" value="{{$IdCategoria}}" readonly='readonly'>
                                </div>
                        
                                @if($errors->first('Categoria')) 
                                	<i> {{$errors->first('Categoria')}} </i> 
                                @endif	
                                <div class="form-group col-xl-12">
                                    <label for="ejemplo_email_1"> Categoría </label>
                                    <input type="text" class="form-control" id="Editorial" name="Categoria" value="{{old('Categoria')}}" 
                                        placeholder="Introduce la Categoria">
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
        <div class="col-md-10"> 
			<table class="table">
				<thead align="center" class="thead-dark col-md-10">
					<tr>
						<th scope="col-md-10">Clave</th>
						<th scope="col-md-10">Categoría</th>
						<th colspan="2" scope="col-md-10"><i class="fa fa-angle-down"></i> &nbsp;Opciones</th>
					</tr>
				</thead>
				@foreach($Categorias as $ca)
				<tbody class="col-md-10">
					<tr align="center">
						<th scope="row">{{$ca->IdCategoria}}</th>
						<td>{{$ca->Categoria}}</td>

						@if($ca->deleted_at == "")
						<td>
						<a href="{{URL::action('Categoria@MCategoria',['IdCategoria'=>$ca->IdCategoria])}}">
							<button type="submit" class="btn btn-warning">
								<i class="fa fa-fw fa-pencil-square-o"></i>
									Modificar
							</button>
						</a>
						</td>
						<td>
						<a href="{{URL::action('Categoria@ELCategoria',['IdCategoria'=>$ca->IdCategoria])}}">
							<button type="submit" class="btn btn-danger">
								<i class="fa fa-fw fa-toggle-off"></i>
									Desactivar
							</button>
						</a>
						</td>
								
						@else
						<td>
						<a href="{{URL::action('Categoria@ACategoria',['IdCategoria'=>$ca->IdCategoria])}}">
							<button type="submit" class="btn btn-success">
								<i class="fa fa-fw fa-reply"></i> 
									&nbsp;Activar&nbsp;&nbsp;
							</button>
						</a>
						</td>
						<td>
						<a href="{{URL::action('Categoria@EFCategoria',['IdCategoria'=>$ca->IdCategoria])}}">
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