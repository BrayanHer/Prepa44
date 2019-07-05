


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <!-- Bootstrap core CSS-->
  <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="admin/css/sb-admin.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script>
  $(document).ready(function(){
    $("#import").mouseover(function() {
         $("#Info").html('<b>¡Estos datos son importantes! No olvides llenarlos</b  >');
         document.getElementById("import").style.background = "#0a6f0cb3";
         
       });
});
</script>
 
<style>

#msinfo{
    position: relative;
  top: 0%;
  left:-11%;
}
#modalColor{

  background:#2aa4a4b3;
  color:#fff;
  font-size:120%;
  left:380px;
}



</style>

</head>

<body class="bg-dark">
<br><br>
  <div class="container">
<div class="row">

    <div id="msinfo" class="alert alert-primary" role="alert">
        !Hola!  bienvenido al sistema Epo 44 para iniciar verifica tus datos 
        <strong>Los correos y telefonos son muy importantes</strong>
        <br>
        <strong> &nbsp; Es recomendable que cambies tu contraseña</strong>
        <br><br>
        <button id="modal"type="button" class="btn btn-success btn-sm btn-block" data-toggle="modal" data-target="#IdLibros">
            <i class="fa fa-check" aria-hidden="true">&nbsp; Verificar mis datos</i>
        </button>
    </div>

    <div class="modal fade" id="IdLibros" tabindex="-1" role="dialog" aria-labelledby="IdLibrosLabel" aria-hidden="true">
		      		<div class="modal-dialog" role="document">
		        		<div class="modal-content" id="modalColor">
		          			<div class="modal-header">
		            			<h5 class="modal-title" id="IdLibrosLabel"> Verificación de datos  </h5>
		            			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              				<span aria-hidden="true">&times;</span>
		            			</button>
                                </div>
                                @if($errors->first('IdLibro')) 
				     				<i> {{$errors->first('IdLibro')}} </i> 
		    					@endif
                  <input type="hidden" name=""id=""value="{{$Upuser->idu}}">
		    					<div class="form-group col-xl-6">
									<label for="ejemplo_email_1"> Matricula </label>
									<input type="text" class="form-control"  id="" name="" value="{{Session::get('sesionuser')}}">
								</div> 
                                <div class="form-group col-xl-12">
									<label for="ejemplo_email_1"> Nombre </label>
									<input type="text" class="form-control" id="" name="" value="">
								</div> 
                                <div class="form-group col-xl-12">
									<label for="ejemplo_email_1"> Apellido Paterno </label>
									<input type="text" class="form-control" id="" name="" value="">
								</div> 
                                <div class="form-group col-xl-12">
									<label for="ejemplo_email_1"> Apellido Materno </label>
									<input type="text" class="form-control" id="" name="" value="">
								</div> 
              
<div class="container" id="import">
<div id="Info" align="center"></div>
<div class="form-group col-xl-12">
									<label for="ejemplo_email_1"> Correo Electronico </label>
									<input type="email" class="form-control" id="" name="" value=" ">
								</div> 
                                <div class="form-group col-xl-12">
									<label for="ejemplo_email_1"> Nueva contraseña </label>
									<input type="text" class="form-control" id="" name="" value="">
								</div> 
</div>

                                <div class="modal-footer">
                                <a href="{{URL::action('LoginUp@Muser',['idu'=>$Upuser->idu])}}">
								<button type="submit" class="btn btn-success btn-md">
									<span  aria-hidden="true"></span>
                  <i class="fa fa-check" aria-hidden="true">&nbsp;Guardar</i>
								</button>
                </a>
				  			</div>

		          			</div>

</div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script> 
</body>

</html>
