@extends('administrador')
@section('admincontent')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@foreach($Usuarios as $user)
<script type="text/javascript">
            $(document).ready(function(){
			 $("#eyeblack").click(function(){
				$("#Oc").hide();
			 });
			 $("#eyewhite").click(function(){
				$("#Oc").show();
			 });
            });
        </script>
	@endforeach
<style>
tbody{
    font-size:15px;
}
#eyeblack{
color:black;
}
#eyewhite{
	float:center;
	top:;
color:black;
}
</style>
<div class="col-md-12">
      			<div class="hidden-lg"></div>
      				<h3 class="page-header">
          				<small> Registros de Usuarios </small>
        			
					<button id="eyewhite" type="submit" class="btn btn-info btn-sm">
							<i class="fa fa-fw fa-eye"></i>
					</button>
					</h3>
					<hr color="black" size=1>
      		</div>
      		<div class="col-md-12"> 
              <table class="table">
					<thead align="center" class="thead-dark col-md-10">
						<tr>
							<th scope="col-md-5">Clave</th>
							<th scope="col-md-5">Nombre</th>
							<th scope="col-md-5">Correo</th>
							<th scope="col-md-5">Usuario</th>
							<th scope="col-md-5">Contraseña</th>
							<th scope="col-md-5">Tipo de Usuario</th>
							<th colspan="2" scope="col-md-5"><i class="fa fa-angle-down"></i> &nbsp;Opciones</th>

						</tr>
					</thead>
					@foreach($Usuarios as $user)
					<tbody class="col-md-10">
						<tr id="Oc" align="center">
							<th scope="row">{{$user->idu}}
							<button id="eyeblack" type="submit" class="btn btn-info btn-sm">
							<i id="eyeblack" class="fa fa-fw fa-eye-slash"></i>
							</button>
							</th>
							<td>{{$user->nombre}}</td>
							<td>{{$user->correo}}</td>
							<td>{{$user->usuario}}</td>
							<td>{{$user->password}}</td>
                            <td>{{$user->tipo}}</td>
							@if($user->deleted_at == "")
							<td>
							<a href="{{URL::action('Administrador@ModUsuario',['idu'=>$user->idu])}}">
								<button type="submit" class="btn btn-warning btn-sm">
									<i class="fa fa-fw fa-pencil-square-o"></i>
										Modificar
								</button>
							</a>
							</td>
							<td>
							<a href="{{URL::action('Administrador@ElUsuario',['idu'=>$user->idu])}}">
								<button type="submit" class="btn btn-danger btn-sm">
									<i class="fa fa-fw fa-toggle-off"></i>
										Desactivar
								</button>
							</a>
							</td>
								
							@else
							<td>
							<a href="{{URL::action('Administrador@ActUsuario',['idu'=>$user->idu])}}">
								<button type="submit" class="btn btn-success btn-sm">
									<i class="fa fa-fw fa-reply"></i> 
										&nbsp;Activar&nbsp;&nbsp;
								</button>
							</a>
							</td>
							<td>
							<a href="{{URL::action('Administrador@EFUsuario',['idu'=>$user->idu])}}">
								<button type="submit" class="btn btn-danger btn-sm">
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
