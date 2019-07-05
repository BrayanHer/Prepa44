@extends('administrador')
@section('admincontent')
    
<form action="{{route('GCategoria')}}" method="POST" enctype='multipart/form-data'>                         
	{{csrf_field()}}
	<div class="container">
		<div ciilass="row">
        @if($errors->first('IdCategoria')) 
			<i> {{$errors->first('IdCategoria')}} </i> 
		@endif
		<div class="form-group col-xl-2">
			<label for="ejemplo_email_1"> Clave </label>
			<input type="text" class="form-control" id="IdCategoria" name="IdCategoria" value="{{$categoria->IdCategoria}}" readonly='readonly'>
		</div>
		        
		@if($errors->first('Categoria')) 
			<i> {{$errors->first('Categoria')}} </i> 
		@endif	
		<div class="form-group col-xl-12">
			<label for="ejemplo_email_1"> Categoría </label>
			<input type="text" class="form-control" id="Categoria" name="Categoria" value="{{$categoria->Categoria}}" >
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