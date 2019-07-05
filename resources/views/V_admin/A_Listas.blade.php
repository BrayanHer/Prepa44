@extends('administrador')
@section('admincontent')
<style>
* {
	margin:2px;
	padding:1px;
}

#Bcol{
    color:#000;
}

#tamsa{
    font-size:80%;
    color:black;
}
</style>

<form action="">                        
   		{{csrf_field()}}
		<div class="container">
			<div class="row">
				<div class="alert alert-dark col-md-12" role="alert" align="center">
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#IdLibros">
						<i class="fa fa-fw fa-plus"></i>
					</button> &nbsp; Agregar nuevo "Lista"
				</div>

				<!-- Modal -->
    		    <div class="modal fade" id="IdLibros" tabindex="-1" role="dialog" aria-labelledby="IdLibrosLabel" aria-hidden="true">
		      		<div class="modal-dialog" role="document">
		        		<div class="modal-content">
		          			<div class="modal-header">
		            			<h5 class="modal-title" id="IdLibrosLabel"> Subir Nueva Lista</h5>
		            			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              				<span aria-hidden="true">&times;</span>
		            			</button>
                                </div>

                                <div class="modal-body">
		          			<!-- contenido del modal empieza -->
                              
                            <div class="row">
                                    <div class="form-group col-xl-6">
									<label for="ejemplo_email_1"> Ciclo escolar </label>
									<input type="text" class="form-control" id="IdLibro" name="IdLibro">
								</div>

                                <div class="form-group col-xl-6">
									<label for="ejemplo_email_1"> Turno </label>
									<input type="text" class="form-control" id="IdLibro" name="IdLibro" >
								</div>
                             </div>

                          

                             <label for="ejemplo_email_1"> Período del semestre </label>
									<select class="form-control col-xl-12" name='IdEditorial'>
											<option value='1'> Agosto - Febrero</option>
											<option value='2'> Febrero - Julio</option>
									
									</select>
                            <div class="row">
                                    <div class="form-group col-xl-3">
									<label for="ejemplo_email_1"> Grupo </label>
									<input type="text" class="form-control" id="IdLibro" name="IdLibro">
								</div>

                                <div class="form-group col-xl-8">
									<label for="ejemplo_email_1"> Seleccione Archivo </label>
									<input type="file" class="form-control" id="IdLibro" name="IdLibro" >
								</div>
                             </div>
                                
                              <!-- contenido del modal Acaba -->
                              </div>



				  			<div class="modal-footer">
								<button type="submit" class="btn btn-success btn-md">
									<span  aria-hidden="true"></span> Enviar
								</button>
				  			</div>
						</div>
	  		  		</div>
				</div>  
			</div>
		</div> 
  	</form>
		<!-- Aqui termina el modal -->
 <!-- Empiezan las listas -->
 <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button id="Bcol" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
          Primer Semestre
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">

            <table>
                <tr>
<th>     
        <div class="card" style="width: 16rem;">
        <div class="card-body">
            <h5 class="card-title">primero-1</h5>
        </div>
        <img class="card-img-top" src="img/excel.png" alt="Card image cap">
        <div class="card-body">
            <a id="tamsa" href="#" class="card-link"><i class="fa fa-eye" aria-hidden="true"></i> Vista Previa</a>
            <a id="tamsa" href="#" class="card-link"><i class="fa fa-download" aria-hidden="true"></i>Descargar</a>
            <a id="tamsa" href="#" class="card-link"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Modificar</a>
            <a id="tamsa" href="#" class="card-link"><i class="fa fa-trash" aria-hidden="true"></i>Eliminar</a>
        </div>
        </div>
</th>
<th>     
        <div class="card" style="width: 16rem;">
        <div class="card-body">
            <h5 class="card-title">primero-2</h5>
        </div>
        <img class="card-img-top" src="img/word.jpg" alt="Card image cap">
        <div class="card-body">
            <a id="tamsa" href="#" class="card-link"><i class="fa fa-eye" aria-hidden="true"></i> Vista Previa</a>
            <a id="tamsa" href="#" class="card-link"><i class="fa fa-download" aria-hidden="true"></i>Descargar</a>
            <a id="tamsa" href="#" class="card-link"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Modificar</a>
            <a id="tamsa" href="#" class="card-link"><i class="fa fa-trash" aria-hidden="true"></i>Eliminar</a>
        </div>
        </div>
</th>


<th>     
        <div class="card" style="width: 16rem;">
        <div class="card-body">
            <h5 class="card-title">primero-3</h5>
        </div>
        <img class="card-img-top" src="img/pp.jpg" alt="Card image cap">
        <div class="card-body">
            <a id="tamsa" href="#" class="card-link"><i class="fa fa-eye" aria-hidden="true"></i> Vista Previa</a>
            <a id="tamsa" href="#" class="card-link"><i class="fa fa-download" aria-hidden="true"></i>Descargar</a>
            <a id="tamsa" href="#" class="card-link"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Modificar</a>
            <a id="tamsa" href="#" class="card-link"><i class="fa fa-trash" aria-hidden="true"></i>Eliminar</a>
        </div>
        </div>
</th>


<th>     
        <div class="card" style="width: 16rem;">
        <div class="card-body">
            <h5 class="card-title">primero-4</h5>
        </div>
        <img class="card-img-top" src="img/pd.jpg" alt="Card image cap">
        <div class="card-body">
            <a id="tamsa" href="#" class="card-link"><i class="fa fa-eye" aria-hidden="true"></i> Vista Previa</a>
            <a id="tamsa" href="#" class="card-link"><i class="fa fa-download" aria-hidden="true"></i>Descargar</a>
            <a id="tamsa" href="#" class="card-link"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Modificar</a>
            <a id="tamsa" href="#" class="card-link"><i class="fa fa-trash" aria-hidden="true"></i>Eliminar</a>
        </div>
        </div>
</th>





                </tr>
            </table>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button id="Bcol" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
<i class="fa fa-angle-right" aria-hidden="true"></i>
          Tercer Semestre
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
Contenido 2
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button id="Bcol" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <i class="fa fa-angle-right" aria-hidden="true"></i>

          Quinto Semestre
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
Contenido 3
      </div>
    </div>
  </div>
</div>
  <!-- Terminan las listas -->

@stop

