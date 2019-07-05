@extends('administrador')
@section('admincontent')
<style>
    *{margin:2px;padding:1px;}#Bcol{color:#000;}#tamsa{font-size:80%;color:black;}#cen{align:center;}
</style>

<form action="{{route('Gtarea')}}" method="POST" enctype='multipart/form-data'>                        
    {{csrf_field()}}
    <div class="container">
        <div class="row">
            <div class="row col-md-12">
            <div class="alert alert-success col-lg-5" role="alert" align="center">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#IdLibros">
                    <i class="fa fa-fw fa-plus"></i>
                </button> &nbsp; Agregar nuevo "Tarea"
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <div class="alert alert-warning col-md-5" role="alert" align="center">
            <a href="{{route('CalTarea')}}">
            <button type="button" class="btn btn-warning" data-toggle="modal" id="Modificar">
                    <i class="fa fa-fw fa-edit"></i>
                </button></a>   &nbsp; Calificar Tarea
              
            </div>
            </div>
            
        
<!-- Modal -->
            <div class="modal fade" id="IdLibros" tabindex="-1" role="dialog" aria-labelledby="IdLibrosLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
		        	<div class="modal-content">
		          		<div class="modal-header">
                            @if($errors->first('IdTarea')) 
                                <i> {{$errors->first('IdTarea')}} </i> 
                            @endif
                            <input name="IdTarea" id="IdTarea" value="{{$IdTarea}}" hidden>
		            		<h5 class="modal-md" id="IdLibrosLabel">Subir Nueva Tarea</h5>
		            		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		            			<span aria-hidden="true">&times;</span>
		        			</button>
                        </div>
      
		          		<div class="modal-body"><!-- contenido del modal empieza -->
                            <div class="container">
                                <div class="row" align="center">
                                    <div class="form-group col-xl-12">
									    <strong for="ejemplo_email_1"> Seleccione el Grupo</strong><br>
                                        @foreach($Cursos as $cur)
                                        <input type="checkbox" class="inlineRadio1" id="SelGrupo" name="SelGrupo[]" value="{{$cur->IdCurso}}">{{$cur->Grupo}}
                                        @endforeach
                                    </div>
                     
    <!-- aqui creo que el primer foreach -->
                                    <div class="row col-xl-12">
                                        <strong class="col-xl-10" id="cen"> Materia </strong>
    
                                        <select class="form-control" name='Materia' id="Materia">
                                            @foreach($Materia as $mat)
                                                <option value='{{$mat->IdMateria}}'>{{$mat->Materia}}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                    </div>
     <!-- Aqui el segundo foreach -->
                                    <strong class="col-xl-10" id="cen"> Fecha y Hora </strong>
                                    <div class="row col-xl-12">
                                        @if($errors->first('FechaInicio')) 
                                            <i> {{$errors->first('FechaInicio')}} </i> 
                                        @endif
                                        <div class="form-group col-xl-6">
                                            <span>Fecha de Inicio</span>
                                            <input type="date" class="form-control" id="FechaInicio" name="FechaInicio">
                                            
                                            @if($errors->first('FechaEntrega')) 
                                                <i> {{$errors->first('FechaEntrega')}} </i> 
                                            @endif
                                            <span>Fecha de Entrega</span>
                                            <input type="date" class="form-control" id="FechaEntrega" name="FechaEntrega" >
                                        </div>

                                        @if($errors->first('HoraInicio')) 
                                            <i> {{$errors->first('HoraInicio')}} </i> 
                                        @endif
                                        <div class="form-group col-xl-5">
                                            <span>Hora de Inicio</span>
                                            <input type="time" class="form-control" id="HoraInicio" name="HoraInicio">
                                           
                                            @if($errors->first('HoraEntrega')) 
                                                <i> {{$errors->first('HoraEntrega')}} </i> 
                                            @endif
                                            <span>Hora de Entrega</span>
                                            <input type="time" class="form-control" id="HoraEntrega" name="HoraEntrega">
                                        </div>
                                    </div>

                                    @if($errors->first('Tema')) 
                                        <i> {{$errors->first('Tema')}} </i> 
                                    @endif
                                    <div class="form-group col-xl-11">
                                        <strong class="col-xl-10" id="cen"> Nombre de la Tarea </strong>
                                        <input type="text" class="form-control" id="Tema" name="Tema">
                                    </div>

                                    @if($errors->first('Descripción')) 
                                        <i> {{$errors->first('Descripción')}} </i> 
                                    @endif
                                    <div class="form-group col-xl-11">
                                        <strong  id="cen"> Descripcion de la Tarea </strong>
                                        <textarea class="form-control"id="Descripción" name="Descripción"></textarea>
                                    </div>

                                    @if($errors->first('TipoTarea')) 
                                        <i> {{$errors->first('TipoTarea')}} </i> 
                                    @endif
                                    <div class="form-group col-xl-11">
                                        <strong class="col-xl-10" id="cen"> Nombre de la Tarea </strong><br>
                                        <input type="radio" name="TipoTarea" id="TipoTarea" value="Fisica"> Tarea Fisica<br>
                                        <input type="radio" name="TipoTarea" id="TipoTarea" value="Digital"> Tarea Digital
                                    </div>
                        
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success btn-md">
                                            <span  aria-hidden="true"></span> Enviar
                                        </button>
                                    </div>
                                </div>
                            </div>  
                        </div> 
<!-- Modal close -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- inicia registros de tareas -->
<div class="col-md-12">
    <div class="hidden-lg"></div>
    <h3 class="page-header">
        <small>Registros Obtenidos</small>
    </h3>
	<hr color="black" size=1>
</div>
<div class="col-md-12"> 
			<table class="table">
				<thead align="center" class="thead-dark col-md-12">
					<tr>
						<th scope="col-md-10">Clave</th>
						<th scope="col-md-10">Materia</th>
						<th scope="col-md-10">Tema</th>
						<th scope="col-md-10">Descripcion</th>
						<th scope="col-md-10">Fecha de Inici</th>
                        <th scope="col-md-10">Fecha de entrega</th>
                        <th scope="col-md-10">Tipo Entrega</th>
                        <th scope="col-md-10">Grupos</th>
					</tr>
				</thead>
				@foreach($C_Tarea as $tar)
				<tbody class="col-md-10">
					<tr align="center">
						<th scope="row">{{$tar->IdTarea}}</th>
						<td>{{$tar->Materia}}</td>
						<td>{{$tar->Tema}}</td>
						<td>{{$tar->Descripcion}}</td>
						<td>{{$tar->FechaHoraInicio}}</td>
                        <td>{{$tar->FechaHoraFin}}</td>
                        <td>{{$tar->TipoTarea}}</td>
                        <td>{{$tar->Grupo}}</td>
                        
				@endforeach
  				</tbody>
	        </table>
        </div>
<!-- fin de regestros de tareas -->
@stop


