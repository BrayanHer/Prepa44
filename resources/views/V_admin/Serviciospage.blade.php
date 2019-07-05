
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Información</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">

<p align="center">¿Qué tengo que hacer?</p>
<p align="left">
El Aspirante deberá Pre-Registrarse del @foreach($AvisosPage as $avi) {{$avi->Descripcion}} @endforeach de acuerdo 
a la primera letra de su CURP en las fechas señaladas en la convocatoria
en la página del gobierno del Estado de México.
<a href="https://ingresoms.edugem.gob.mx">https://ingresoms.edugem.gob.mx</a>
</p>
<p align="left"><strong>En esta página podrás obtener la solicitud de pre-registro y tu comprobante</strong></p>
<p align="left">
A) La Información para el pre-registro tendrá que ser recopilada con la asesoría de
tu orientador educativo, padre o tutor</p>
<p align="left">
B) Es de suma importancia requisitar el estudio socioeconómico, ya que es paso 
importante para el pre-registro</p>
<p align="left">
C) Contestar la encuesta de CENEVAL en línea (se solicita durante el proceso de pre-registro).
 Es requisito importante para el registro.</p>
 <p align="left">
D) Imprimir tu comprobante de Pre-registro y recuperar las firmas que se solicitan en el mismo</p>
          
      </th>
    </tr>
  </tbody>
</table>

			<!-- ________________________________________________________________________ -->
            
            <table class="table">
				<thead align="center" class="thead-dark col-md-12">
					<tr>
						<th scope="col-md-10">Letra de Apellido</th>
						<th scope="col-md-10">Fecha de Tramite - Año| Mes |Dia</th>
					</tr>
               
				</thead>
				@foreach($Servicios as $serv)
				<tbody class="col-md-10">
					<tr align="center">
            			<th scope="row">{{$serv->LApellido}}</th>
            			<th scope="row">{{$serv->Fecha}}</th>
                    </tr>
				@endforeach
  				</tbody>
	        </table>