@extends('Encabezado')
@section('homecontent')
<!DOCTYPE html>
<html lang="en">
<body>
<script>
$(document).ready(function(){
    $("#Alias").click(function() {
         $("#Contenido").load('{{url('PageServicios')}}' + '?' + $(this).closest('form').serialize()) ;
       });
});
</script>
<br><br>
<br><br>
<br>
<style>
h4{
	color:black;
}
#iconw{
    font-size:80px;
    color:#0e2737;
}
</style>
    <!-- Google Maps & Contact Info Area Start -->
    <section class="google-maps-contact-info">
	<div class="container-fluid">
            <div class="google-maps-contact-content">
                <div class="row">
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-4">
                        <div class="single-contact-info">
                            <i id="iconw"class="fa fa-pencil-square-o" aria-hidden="true"></i><br>
                            <a href="#">Inscripciones</a>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-4">
                        <div class="single-contact-info">
                            <i class="fa fa-handshake-o" aria-hidden="true" id="iconw"></i><br>
                            <a href="#">Reinscripciones</a>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-4">
                        <div class="single-contact-info">
                            <i class="fa fa-file-text" aria-hidden="true"id="iconw"></i><br>
                            <a href="#">Pagos</a>
                        </div>
                    </div>
                </div>

                <!-- Google Maps -->
              <div class="col-lg-12" align="center">
              <br>
         <button   type="button" class="btn btn-dark btn-md" id="Alias"><i class="fa fa-search" aria-hidden="true"></i> &nbsp; Infomarcion sobre las fechas de inscripcion</button>
        <hr style="background-color:black;">
              </div>
                <section id="Contenido">
</section>
            </div>
        </div>
    </section>
	<br><br><br>
</body>
</html>
@stop

