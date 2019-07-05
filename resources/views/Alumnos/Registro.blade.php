@extends('administrador')
@section('admincontent')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Tabs - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
</head>
<body>
<!-------------------------------------------------------- INICIA COLAPSE ---------------------------------------------------------------->
 <div class="container">
 <div class="row">
		<p>
			<button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
			<i class="fa fa-pencil" aria-hidden="true"></i>

			Modificar mis Datos
			</button>
		</p>
		<div class="collapse" id="collapseExample">
			<div class="card card-body">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
			</div>
		</div>
 </div>
 </div>
 <br>
 <!-- -----------------------------------------------------FIN DEL COLAPSE-------------------------------------------------------------- -->
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Datos del Alumnos</a></li>
    <li><a href="#tabs-2"> Información Adicional</a></li>
    <li><a href="#tabs-3">Datos de los Padres</a></li>
  </ul>
  <div id="tabs-1">
  <style>
::-webkit-input-placeholder { /* Chrome */
	font-size: 13px;
}

::-moz-placeholder{
	font-size: 13px;
}
small{
	color:Red;
}
p{
	font-size:23px;
}
</style>
<form action="{{route('GAlumnos')}}" method="POST" enctype="multipart/form-data">
{{csrf_field()}}

<div class="container">
<div class="row">


@include('partials.alertas')
			<div id="mat"class="row col-xl-12">

			 <div class="form-group">
			 @if($errors->first('IdMatricula')) 
<small> {{ $errors->first('IdMatricula') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Matrícula</label>
				<input type="number" class="form-control" id="IdMatricula" name="IdMatricula"
					placeholder="Introduce tu Matrícula" min="1">
			 </div>
			 </div>


			<div class="form-group col-xl-4">
@if($errors->first('Nombre')) 
<small> {{ $errors->first('Nombre') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Nombre</label>
				<input type="text" class="form-control" id="Nombre" name="Nombre"
					placeholder="Introduce tu Nombre">
			</div>


			<div class="form-group col-xl-4">
@if($errors->first('APaterno')) 
<small> {{ $errors->first('APaterno') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Apellido Paterno</label>
				<input type="text" class="form-control"id="APaterno" name="APaterno"
					placeholder="Introduce tu Apellido Paterno">
			</div>

			<div class="form-group col-xl-3">
@if($errors->first('AMaterno')) 
<small> {{ $errors->first('AMaterno') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Apellido Materno</label>
				<input type="text" class="form-control" id="AMaterno" name="AMaterno"
					placeholder="Introduce tu Apellido Materno">
			</div>

			<div class="form-group col-xl-2">
@if($errors->first('Edad')) 
<small> {{ $errors->first('Edad') }} </small> <br> 
@endif
				<label for="ejemplo_email_1">Edad</label>
				<input type="Number" class="form-control" min="0" max="21" id="Edad" name="Edad">
			</div>


			<div class="form-group col-xl-2">
			@if($errors->first('Sexo')) 
<small class="col-sm-1"> {{ $errors->first('Sexo') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Sexo</label>
				<select type="text" class="form-control" id="Sexo" name="Sexo">
					<option value="M">Selecciona:</option>
					<option value="M">Hombre</option>
					<option value="F">Mujer</option>
				</select>
			</div>

			<div class="form-group col-xl-3">
@if($errors->first('FechaNac')) 
<small> {{ $errors->first('FechaNac') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Fecha de Nacimiento</label>
				<input type="date" class="form-control" id="FechaNac" name="FechaNac" >
			</div>

			<div class="form-group col-xl-2">
@if($errors->first('Celular')) 
<small> {{ $errors->first('Celular') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Celular</label>
				<input type="text" class="form-control" id="Celular" name="Celular"
					placeholder="Introduce tu Celular">
			</div>


			<div class="form-group col-xl-2">
@if($errors->first('TelFijo')) 
<small> {{ $errors->first('TelFijo') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Tel. Fijo</label>
				<input type="text" class="form-control" id="TelFijo" name="TelFijo"
					placeholder="Introduce tu Tel. Fijo">
			</div>


			<div class="form-group col-xl-3">
@if($errors->first('Email')) 
<small> {{ $errors->first('Email') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Correo Electrónico</label>
				<input type="email" class="form-control" id="Email" name="Email"
					placeholder="Introduce tu Correo Electrónico">
			</div>


			<div class="form-group col-xl-4">
@if($errors->first('Calle')) 
<small> {{ $errors->first('Calle') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Calle</label>
				<input type="text" class="form-control" id="Calle" name="Calle"
					placeholder="Introduce tu Calle">
			</div>


			<div class="form-group col-xl-2">
@if($errors->first('NumInt')) 
<small> {{ $errors->first('NumInt') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Núm. Interior</label>
				<input type="text" class="form-control" id="NumInt" name="NumInt"
					placeholder="Introduce tu Núm. Int.">
			</div>


			<div class="form-group col-xl-2">
@if($errors->first('NumExt')) 
<small> {{ $errors->first('NumExt') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Núm. Exterior</label>
				<input type="text" class="form-control" id="NumExt" name="NumExt"
					placeholder="Introduce tu Núm. Ext.">
			</div>


			<div class="form-group col-xl-2">
@if($errors->first('CodigoPostal')) 
<small> {{ $errors->first('CodigoPostal') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Código Postal</label>
				<input type="number"min="0" class="form-control" id="CodigoPostal" name="CodigoPostal"
					placeholder="Introduce tu CP">
			</div>


		  	<div class="form-group col-xl-2">
@if($errors->first('Estado')) 
<small> {{ $errors->first('Estado') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Estado</label>
				<input type="text"min="0" class="form-control" id="Estado" name="Estado"
					placeholder="Estado de México" value="Estado de México" readonly>
			</div>
			

<div class="form-group col-xl-2">
	<label for="ejemplo_email_1">Municipio</label>
	<select type="text" class="form-control" id="IdMun" name="IdMun" >
		<option value="M">Selecciona:</option>
		@foreach($Municipios as $muni)
		<option value="{{$muni->IdMun}}">{{$muni->Municipios}}</option>
		@endforeach
	</select>
</div>



<div class="form-group col-xl-3">
	<label for="ejemplo_email_1">Localidad</label>
	<select type="text" class="form-control" id="IdLoc" name="IdLoc">
		<option value="M">Selecciona:</option>
		@foreach($Localidades as $loc)
		<option value="{{$loc->IdLoc}}">{{$loc->Localidad}}</option>
		@endforeach

	</select>
</div>
<!------------------------------------------------------------------------------------------------------------------------------------->			
</div>
</div>

  </div>

  <div id="tabs-2">
<div class="container">
<div class="row">


<div class="form-group col-xl-3">
@if($errors->first('Curp')) 
<small> {{ $errors->first('Curp') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Curp</label>
				<input type="text" class="form-control" id="Curp" name="Curp"
					placeholder="Introduce su Apellido Paterno">
			</div>

			<div class="form-group col-xl-4">
				<label for="ejemplo_email_1">Secundaria de Procedencia</label>
				<input type="text" class="form-control" id="SecProcedencia" name="SecProcedencia"
					placeholder="Introduce su Apellido Paterno">
			</div>

			<div class="form-group col-xl-4">
			@if($errors->first('FolioAsignado')) 
<small> {{ $errors->first('FolioAsignado') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Folio Asigando en Pre-registro</label>
				<input type="text" class="form-control" id="FolioAsignado" name="FolioAsignado"
					placeholder="Introduce su Apellido Paterno">
			</div>
	
			<div class="form-group col-xl-5">
@if($errors->first('ActNacimiento')) 
<small> {{ $errors->first('ActNacimiento') }} </small> <br>
@endif		
				<label for="ejemplo_email_1">Acta de Nacimiento</label>
				<input type="file" class="form-control" id="ActNacimiento" name="ActNacimiento"
					placeholder="Introduce su Apellido Paterno">
			</div>

			<div class="form-group col-xl-5">
			@if($errors->first('CertificadoSec')) 
<small> {{ $errors->first('CertificadoSec') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Certificado de secundaria</label>
				<input type="file" class="form-control" id="CertificadoSec" name="CertificadoSec"
					placeholder="Introduce su Apellido Paterno">
			</div>
			</div>

</div>
  </div>

  <div id="tabs-31">
  <div class="container">
  <div class="row">

  		<div class="col-xl-12">
            <div class="hidden-lg"></div>
                <h3 class="page-header">
                    <p>Datos Paternos</p>
                </h3>
				<hr color="black" size=1>
        </div>
 

  			<div class="form-group col-xl-4">
@if($errors->first('NombrePadre')) 
<small> {{ $errors->first('NombrePadre') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Nombre</label>
				<input type="text" class="form-control" id="NombrePadre" name="NombrePadre"
					placeholder="Introduce su Nombre">
			</div>
			

			<div class="form-group col-xl-4">
@if($errors->first('APPadre')) 
<small> {{ $errors->first('APPadre') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Apellido Paterno</label>
				<input type="text" class="form-control" id="APPadre" name="APPadre"
					placeholder="Introduce su Apellido Paterno">
			</div>

			<div class="form-group col-xl-3">
						
@if($errors->first('AMPadre')) 
<small> {{ $errors->first('AMPadre') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Apellido Materno</label>
				<input type="text" class="form-control" id="AMPadre" name="AMPadre"
					placeholder="Introduce su Apellido Materno">
			</div>
			

			
			<div class="form-group col-xl-3">
			@if($errors->first('CelularPadre')) 
<small> {{ $errors->first('CelularPadre') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Celular</label>
				<input type="text" class="form-control" id="CelularPadre" name="CelularPadre"
					placeholder="Introduce su Número Celular">
			</div>
			<br><br>

		<div class="col-xl-12">
            <div class="hidden-lg"></div>
                <h3 class="page-header">
                    <p>Datos Maternos</p>
                </h3>
				<hr color="black" size=1>
        </div>
		

			<div class="form-group col-xl-4">
			@if($errors->first('NombreMadre')) 
<small> {{ $errors->first('NombreMadre') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Nombre</label>
				<input type="text" class="form-control"id="NombreMadre" name="NombreMadre"
					placeholder="Introduce su Nombre">
			</div>
			

			<div class="form-group col-xl-4">
			@if($errors->first('APMadre')) 
<small> {{ $errors->first('APMadre') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Apellido Paterno</label>
				<input type="text" class="form-control"id="APMadre" name="APMadre"
					placeholder="Introduce su Apellido Paterno">
			</div>
			

			<div class="form-group col-xl-3">
			@if($errors->first('AMMadre')) 
<small> {{ $errors->first('AMMadre') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Apellido Materno</label>
				<input type="text" class="form-control" id="AMMadre" name="AMMadre"
					placeholder="Introduce su Apellido Materno">
			</div>
			

			<div class="form-group col-xl-3">
			@if($errors->first('CelularMadre')) 
<small> {{ $errors->first('CelularMadre') }} </small> <br>
@endif
				<label for="ejemplo_email_1">Celular</label>
				<input type="text" class="form-control" id="CelularMadre" name="CelularMadre"
					placeholder="Introduce Número Celular">
					</div></div>

<div>
<button type="submit" class="btn btn-success btn-md"><i class="fa fa-check-circle"></i>&nbsp;Guardar	</button>
</div>
			</div>
			</div>
			

<!------------------------------------------------------------------------------------------------------------------------------------->			
  </div>
  </div>
</form>
</div>

</div>
</body>
@stop