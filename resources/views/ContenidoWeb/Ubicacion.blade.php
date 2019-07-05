@extends('Encabezado')
@section('homecontent')
<!DOCTYPE html>
<html lang="en">
<body>
<br><br>
<br><br>
<br>
<style>
h4{
	color:black;
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
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h4>Teléfono de la Institución</h4>
                            <p>01(712)265-2075</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-4">
                        <div class="single-contact-info">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h4>Dirección</h4>
                            <p> Venustiano Carranza S/N, Centro, 50850 Temoaya, Méx.</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-4">
                        <div class="single-contact-info">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h4>Correo Electrónico</h4>
                            <p>Preparatoria_oficial@EPO44.org</p>
                        </div>
                    </div>
                </div>

                <!-- Google Maps -->
                <div class="google-maps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3761.615631759361!2d-99.5980928!3d19.472132!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2725bc5486ba1%3A0x63c826a9dbcea541!2sPREPARATORIA+OFICIAL+NO.+44!5e0!3m2!1ses-419!2smx!4v1544739954129" width="100%" height="445px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
	<br><br><br>
</body>
</html>
@stop
