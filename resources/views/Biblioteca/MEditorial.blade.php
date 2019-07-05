@extends('administrador')
@section('admincontent')
    
<form action="{{route('GEditorial')}}" method="POST" enctype='multipart/form-data'>                         
	{{csrf_field()}}
	<div class="container">
		<div ciilass="row">
        @if($errors->first('IdEditorial')) 
			<i> {{$errors->first('IdEditorial')}} </i> 
		@endif
		<div class="form-group col-xl-2">
			<label for="ejemplo_email_1"> Clave </label>
			<input type="text" class="form-control" id="IdEditorial" name="IdEditorial" value="{{$editorial->IdEditorial}}" readonly='readonly'>
		</div>
		        
		@if($errors->first('Editorial')) 
			<i> {{$errors->first('Editorial')}} </i> 
		@endif	
		<div class="form-group col-xl-12">
			<label for="ejemplo_email_1"> Editorial </label>
			<input type="text" class="form-control" id="Editorial" name="Editorial" value="{{$editorial->Editorial}}" >
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