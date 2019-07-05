@extends('administrador')
@section('admincontent')
	<br><br>
    <h1 align="center"> Modificación de Materia </h1>
    <br><br><br><br>

	<form action="{{route('GMateria')}}" method="POST" enctype='multipart/form-data'>                         
	{{csrf_field()}} 
		<div class="container">
			<div class="row">

       			@if($errors->first('IdMateria')) 
					<i> {{$errors->first('IdMateria')}} </i> 
				@endif
				<div class="form-group col-xl-2">
					<label for="ejemplo_email_1"> Clave </label>
					<input type="text" class="form-control" id="IdMateria" name="IdMateria" value="{{$Materia->IdMateria}}" readonly='readonly'>
				</div>

				@if($errors->first('Materia')) 
					<i> {{$errors->first('Materia')}} </i> 
				@endif	
				<div class="form-group col-xl-12">
					<label for="ejemplo_email_1"> Materia </label>
					<input type="text" class="form-control" id="Materia" name="Materia" value="{{$Materia->Materia}}">
				</div>

				<div class="form-group col-xl-12">
					<label for="ejemplo_email_1"> Semestre </label>
							<select class="form-control col-xl-12" name='IdPeriodo'>
								<option value='{{$IdPeriodo}}'>{{$Periodo1}}</option>
								@foreach($Periodos as $pe)
									<option value='{{$pe->IdPeriodo}}'>{{$pe->Periodo}}</option>
								@endforeach
							</select>
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