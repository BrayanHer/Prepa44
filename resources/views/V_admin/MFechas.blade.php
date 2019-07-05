@extends('administrador')
@section('admincontent')
    
<div class="col-md-12">
    <div class="hidden-lg"></div>
    <h3 class="page-header">
        <small>Fechas de Registro</small>
    </h3>
	<hr color="black">
<form action="{{route('GFecha')}}" method="POST" enctype='multipart/form-data'>                         
	{{csrf_field()}}
	<div class="container">
		<div class="row">
        @if($errors->first('IdFRIR')) 
			<i> {{$errors->first('IdFRIR')}} </i> 
		@endif
		<div class="form-group col-xl-2" hidden>
			<label for="ejemplo_email_1"> Clave </label>
			<input type="text" class="form-control" id="IdFRIR" name="IdFRIR" value="{{$serv->IdFRIR}}" readonly='readonly'>
		</div>
		        
		@if($errors->first('LApellido')) 
			<i> {{$errors->first('LApellido')}} </i> 
		@endif	
		<div class="form-group col-xl-12">
			<label for="ejemplo_email_1"> Letra Apellido </label>
			<input type="text" class="form-control" id="LApellido" name="LApellido" value="{{$serv->LApellido}}" readonly='readonly'>
		</div>

		@if($errors->first('Fecha')) 
	    	<i> {{$errors->first('Fecha')}} </i> 
		@endif	
		<div class="form-group col-xl-12">
			<label for="ejemplo_email_1"> Fecha </label>
			<input type="date" class="form-control" id="Fecha" name="Fecha" value="{{$serv->Fecha}}" >
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