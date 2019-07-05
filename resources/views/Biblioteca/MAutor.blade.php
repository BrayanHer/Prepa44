@extends('administrador')
@section('admincontent')
    
<form action="{{route('GAutor')}}" method="POST" enctype='multipart/form-data'>                         
	{{csrf_field()}}
	<div class="container">
		<div class="row">
        @if($errors->first('IdAutor')) 
			<i> {{$errors->first('IdAutor')}} </i> 
		@endif
		<div class="form-group col-xl-2">
			<label for="ejemplo_email_1"> Clave </label>
			<input type="text" class="form-control" id="IdAutor" name="IdAutor" value="{{$autor->IdAutor}}" readonly='readonly'>
		</div>
		        
		@if($errors->first('Nombre')) 
			<i> {{$errors->first('Nombre')}} </i> 
		@endif	
		<div class="form-group col-xl-12">
			<label for="ejemplo_email_1"> Nombre </label>
			<input type="text" class="form-control" id="Nombre" name="Nombre" value="{{$autor->Nombre}}" >
		</div>

		@if($errors->first('APaterno')) 
	    	<i> {{$errors->first('APaterno')}} </i> 
		@endif	
		<div class="form-group col-xl-12">
			<label for="ejemplo_email_1"> Apellido Paterno </label>
			<input type="text" class="form-control" id="APaterno" name="APaterno" value="{{$autor->APaterno}}" >
		</div>

		@if($errors->first('AMaterno')) 
			<i> {{$errors->first('AMaterno')}} </i> 
		@endif
		<div class="form-group col-xl-12">
			<label for="ejemplo_email_1"> Apellido Materno </label>
			<input type="text" class="form-control" id="AMaterno" name="AMaterno" value="{{$autor->AMaterno}}">
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