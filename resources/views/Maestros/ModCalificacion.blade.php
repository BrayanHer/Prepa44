@extends('administrador')
@section('admincontent')
    
<div class="col-md-12">
    <div class="hidden-lg"></div>
    <h3 class="page-header">
        <small>Modificar Usuario</small>
    </h3>
	<hr color="black">

<form action="{{route('GCali')}}" method="POST" enctype='multipart/form-data'>   

	{{csrf_field()}}
 
	<div class="container">
		<div class="row">
        @if($errors->first('IdTEnt')) 
			<i> {{$errors->first('IdTEnt')}} </i> 
		@endif
		<div class="form-group col-xl-2" hidden>
			<label for="ejemplo_email_1"> Clave </label>
			<input type="text" class="form-control" id="IdTEnt" name="IdTEnt" value="{{$Califica->IdTEnt}}" readonly>
		</div>

           <div class="form-group col-xl-12" hidden>
			<input type="text" class="form-control" id="IdAlumno" name="IdAlumno" value="{{$Califica->IdAlumno}}" readonly>
		</div>     
        <div class="form-group col-xl-12" hidden>
			<input type="text" class="form-control" id="IdTarea" name="IdTarea" value="{{$Califica->IdTarea}}" readonly>
		</div> 
		@if($errors->first('Alumno')) 
			<i> {{$errors->first('Alumno')}} </i> 
		@endif	
		<div class="form-group col-xl-12">
			<label for="ejemplo_email_1"> Alumno </label>
			<input type="text" class="form-control" id="Alumno" name="Alumno" value="{{$Califica->Alumno}}" readonly>
		</div>

		@if($errors->first('Archivo')) 
	    	<i> {{$errors->first('Archivo')}} </i> 
		@endif	
		<div class="form-group col-xl-12">
			<label for="ejemplo_email_1"> Archivo </label>
			<input type="text" class="form-control" id="Archivo" name="Archivo" value="{{$Califica->Archivo}}" readonly >
		</div>
        @if($errors->first('Calificacion')) 
	    	<i> {{$errors->first('Calificacion')}} </i> 
		@endif	
		<div class="form-group col-xl-12">
			<label for="ejemplo_email_1"> Calificación </label>
			<input type="text" class="form-control" id="Calificacion" name="Calificacion" value="{{$Califica->Calificacion}}" >
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