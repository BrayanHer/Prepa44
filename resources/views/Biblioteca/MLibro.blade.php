@extends('administrador')
@section('admincontent')
	<br><br>
    <h1 align="center"> Modificación de Libro </h1>
    <br><br><br><br>
<form action="{{route('GLibro')}}" method="POST" enctype='multipart/form-data'>                         
	{{csrf_field()}} 
	<div class="container">
		<div class="row">
            @if($errors->first('IdLibro')) 
                <i> {{$errors->first('IdLibro')}} </i> 
            @endif
            <div class="form-group col-xl-1">
			    <label for="ejemplo_email_1"> Clave </label>
				<input type="text" class="form-control" id="IdLibro" name="IdLibro" value="{{$libro->IdLibro}}" readonly='readonly'>
			</div>
		        
			@if($errors->first('Titulo')) 
				<i> {{$errors->first('Titulo')}} </i> 
			@endif	
			<div class="form-group col-xl-4">
			    <label for="ejemplo_email_1"> Título </label>
			    <input type="text" class="form-control" id="Editorial" name="Titulo" value="{{$libro->Titulo}}">
			</div>

			<div class="form-group col-xl-4">
				<label for="ejemplo_email_1"> Autor </label>
					<select class="form-control" name='IdAutor'>
						<option value='{{$IdAutor}}'>{{$Autor}}</option>
						@foreach($Autores as $au)
							<option value='{{$au->IdAutor}}'>{{$au->Nombre}} </option>
						@endforeach
					</select>
			<br>	<br>
			</div>
			
			<div class="form-group col-xl-3">
				<label for="ejemplo_email_1"> Editorial </label>
					<select class="form-control" name='IdEditorial'>
						<option value='{{$IdEditorial}}'>{{$Editorial}}</option>
						@foreach($Editoriales as $ed)
							<option value='{{$ed->IdEditorial}}'>{{$ed->Editorial}} </option>	
						@endforeach
					</select>
			<br>	<br>
			</div>

			<div class="form-group col-xl-3">
				<label for="ejemplo_email_1"> Categoría </label>
				<select class="form-control" name='IdCategoria'>
						<option value='{{$IdCategoria}}'>{{$Categoria}}</option>
						@foreach($Categorias as $ca)
							<option value='{{$ca->IdCategoria}}'>{{$ca->Categoria}} </option>	
						@endforeach
					</select>
			<br>	<br>
			</div>

			@if($errors->first('Edicion')) 
				<i> {{$errors->first('Edicion')}} </i> 
			@endif	
			<div class="form-group col-xl-3">
				<label for="ejemplo_email_1"> Edición </label>
				<input type="text" class="form-control" id="Edicion" name="Edicion" value="{{$libro->Edicion}}">
			</div>

			@if($errors->first('AnoPublicacion')) 
				<i> {{$errors->first('AnoPublicacion')}} </i> 
			@endif	
			<div class="form-group col-xl-2">
				<label for="ejemplo_email_1"> Año Publicación </label>
				<input type="Date" class="form-control" id="AnoPublicacion" name="AnoPublicacion" value="{{$libro->AnoPublicacion}}">
			</div>

			<div class="container">
          		<div class="row">			
					<div>				
						<button type="submit" class="btn btn-success btn-md">
							<span  aria-hidden="true"></span> Enviar
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>					
</form>	
@stop