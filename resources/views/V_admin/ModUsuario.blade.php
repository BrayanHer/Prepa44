@extends('administrador')
@section('admincontent')
    
<div class="col-md-12">
    <div class="hidden-lg"></div>
    <h3 class="page-header">
        <small>Modificar Usuario</small>
    </h3>
	<hr color="black">
<form action="{{route('GUsuario')}}" method="POST" enctype='multipart/form-data'>   

	{{csrf_field()}}

	<div class="container">
		<div class="row">
        @if($errors->first('idu')) 
			<i> {{$errors->first('idu')}} </i> 
		@endif
		<div class="form-group col-xl-2" hidden>
			<label for="ejemplo_email_1"> Clave </label>
			<input type="text" class="form-control" id="idu" name="idu" value="{{$Usuarios->idu}}">
		</div>
		        
		@if($errors->first('nombre')) 
			<i> {{$errors->first('nombre')}} </i> 
		@endif	
		<div class="form-group col-xl-12">
			<label for="ejemplo_email_1"> Nombre del usuario </label>
			<input type="text" class="form-control" id="nombre" name="nombre" value="{{$Usuarios->nombre}}"'>
		</div>

		@if($errors->first('correo')) 
	    	<i> {{$errors->first('correo')}} </i> 
		@endif	
		<div class="form-group col-xl-12">
			<label for="ejemplo_email_1"> Correo Electronico </label>
			<input type="text" class="form-control" id="correo" name="correo" value="{{$Usuarios->correo}}" >
		</div>
        @if($errors->first('correo')) 
	    	<i> {{$errors->first('correo')}} </i> 
		@endif	
		<div class="form-group col-xl-12">
			<label for="ejemplo_email_1"> Usuario </label>
			<input type="text" class="form-control" id="correo" name="usuario" value="{{$Usuarios->usuario}}" >
		</div>
        @if($errors->first('password')) 
	    	<i> {{$errors->first('password')}} </i> 
		@endif	
		<div class="form-group col-xl-12">
			<label for="ejemplo_email_1"> Contraseña </label>
			<input type="text" class="form-control" id="password" name="password" value="{{$Usuarios->password}}" >
		</div>
        @if($errors->first('tipo')) 
	    	<i> {{$errors->first('tipo')}} </i> 
		@endif	
		<div class="form-group col-xl-12">
			<label for="ejemplo_email_1"> Tipo de Usuario </label>
			<input type="text" class="form-control" id="tipo" name="tipo" value="{{$Usuarios->tipo}}"readonly='readonly' >
		</div>

            <div>				
                <button type="submit" class="btn btn-success btn-md">
                    <span  aria-hidden="true"></span> Enviar
                </button>
			</div>
		</div>
	</div>					
</form>	
@stop