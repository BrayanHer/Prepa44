@extends('administrador')
@section('admincontent')
    <br><br>
    <h1 align="center"> Modificación de Prestamo Libro </h1>
    <br><br><br><br>
<form action="{{route('GPrestamo')}}" method="POST" enctype='multipart/form-data'>                         
	{{csrf_field()}}
	<div class="container">
		<div class="row">
      @if($errors->first('IdPrestamo')) 
        <i> {{$errors->first('IdPrestamo')}} </i> 
      @endif
				<div class="form-group col-xl-1">
				  <label for="ejemplo_email_1"> Clave </label>
						<input type="text" class="form-control" id="IdPrestamo" name="IdPrestamo" value="{{$prestamo->IdPrestamo}}" readonly='readonly'>
				</div>
		        
				@if($errors->first('IdMatricula')) 
					<i> {{$errors->first('IdMatricula')}} </i> 
				@endif	
				<div class="form-group col-xl-2">
					<label for="ejemplo_email_1"> Matrícula </label>
					<input type="text" class="form-control" id="IdMatricula" name="IdMatricula" value="{{$prestamo->IdMatricula}}" readonly='readonly'>
				</div>

				@if($errors->first('IdLibro')) 
					<i> {{$errors->first('IdLibro')}} </i> 
				@endif	
        
        <div class="form-group col-xl-4">
          <label for="ejemplo_email_1"> Libro </label>
            <select class="form-control" name='IdLibro'>
              <option value='{{$IdLibro}}'>{{$Libro}}</option>
              @foreach($Libros as $li)
                <option value='{{$li->IdLibro}}'>{{$li->Titulo}} </option>
              @endforeach
        	  </select>
        </div>

				@if($errors->first('FechaPrestamo')) 
					<i> {{$errors->first('FechaPrestamo')}} </i> 
				@endif	
				<div class="form-group col-xl-2">
					<label for="ejemplo_email_1"> Fecha de Prestamo </label>
					<input type="Date" class="form-control" id="FechaPrestamo" name="FechaPrestamo" value="{{$prestamo->FechaPrestamo}}">
				</div>

				@if($errors->first('FechaEntrega')) 
					<i> {{$errors->first('FechaEntrega')}} </i> 
				@endif	
				<div class="form-group col-xl-2">
					<label for="ejemplo_email_1"> Fecha de Entrega </label>
					<input type="Date" class="form-control" id="FechaEntrega" name="FechaEntrega" value="{{$prestamo->FechaEntrega}}">
				</div>
			
        <div class="container">
          <div class="row">
            <div>	
              <br>			
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