@extends('administrador')
@section('admincontent')
<style>
  * {
    margin:2px;
    padding:1px;
  }
  #idicon{
      color:black;
  }
  #bodyint{
    background-color: #d6d8d9;
  }
  a{
      color:white;
  }
  #cb{
      color:black;
  }
</style>
<div class="container">
    <div class="row"> 
    <!--________________________  -->
    <div class="alert alert-dark col-md-11" role="alert">
    <div class="row">
  <div class="col-sm-3">
  <button class="btn btn-dark btn-sm" data-toggle="collapse" href="#Estudiantes" role="button" aria-expanded="false" aria-controls="collapseExample">
  <i class="fa fa-graduation-cap"></i>&nbsp;
               Estudiantes
                </button>  
  </div>
  <div class="col-sm-3">
  <button class="btn btn-dark btn-sm" data-toggle="collapse" href="#Docentes" role="button" aria-expanded="false" aria-controls="collapseExample">
  <i class="fa fa-users"></i>&nbsp;
               Maestros
                </button>
  </div>
  <div class="col-sm-3">
  <button class="btn btn-dark btn-sm" data-toggle="collapse" href="#Pagina" role="button" aria-expanded="false" aria-controls="collapseExample">
  <i class="fa fa-globe" aria-hidden="true"></i>&nbsp;
                Pagina Web
                </button>
  </div>
  <div class="col-sm-2">
  <button class="btn btn-dark btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
  <i class="fa fa-sliders"></i>&nbsp;
                Administrador
                </button>
  </div>
</div> 
    </div>

    
            <div class="collapse  col-md-11" id="Estudiantes">
                <div  id="bodyint"class="card card-body">
                <strong><i id="idicon" class="fa fa-wrench"></i> &nbsp;Configuracion de los Alumnos</strong>
                    <div class="row col-md-12">
<a href="{{route('Alumnos')}}" >
                        <button id="cb" type="button" class="btn btn-success"  data-toggle="tooltip" data-placement="top" title="Agrear alumnos">
                            <i id="idicon"class="fa fa-user-plus"></i>
                            Agregar Alumno
                        </button>
</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="{{route('Alumnos')}}" >
                        <button id="cb" type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Agrear alumnos">
                            <i id="idicon"class="fa fa-table"></i>
                            Registro de alumnos
                        </button>
</a>
                    </div>    
                </div>
            </div>
    
    <!--________________________  -->
    
              
            <div class="collapse  col-md-11" id="Docentes">
                <div  id="bodyint"class="card card-body">
                <strong><i id="idicon" class="fa fa-wrench"></i> &nbsp;Configuracion de los Docentes</strong>
                    <div class="row col-md-12">
<a href="{{route('Alumnos')}}" >
                        <button id="cb" type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Agrear alumnos">
                            <i id="idicon"class="fa fa-user-plus"></i>
                            Agregar Maestro
                        </button>
</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="{{route('Alumnos')}}" >
                        <button id="cb" type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Agrear alumnos">
                            <i id="idicon"class="fa fa-table"></i>
                            Registro de Maestros
                        </button>
</a>
                    </div>    
                </div>
            </div>
    
    <!--________________________  -->
   
               
            <div class="collapse  col-md-11" id="Pagina">
                <div  id="bodyint"class="card card-body">
                <strong><i id="idicon" class="fa fa-wrench"></i> &nbsp;Configuracion de la pagina Web</strong>
                    <div class="row col-md-12">
                    
 <a href="">                      
                        <button id="cb" type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Agrear alumnos">
                            <i id="idicon"class="fa fa-globe"></i>
                            Servicios y tramites
                        </button>
</a>                          
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="">
                         <button id="cb" type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Agrear alumnos">
                            <i id="idicon"class="fa fa-globe"></i>
                            Talleres y Actividades
                        </button>
</a>
                    </div>    
                </div>
            </div>
       
    <!--________________________  -->
       
               
            <div class="collapse  col-md-11" id="collapseExample">
                <div  id="bodyint"class="card card-body">
                <strong><i id="idicon" class="fa fa-wrench"></i> &nbsp;Configuracion del Administrador</strong>
                    <div class="row col-md-12">
<a href="">
                        <button id="cb" type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Agrear alumnos">
                           <i  id="idicon" class="fa fa-cogs"></i>
                            Directivos
                        </button>
</a>
 <a href="">                         
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <button  id="cb" type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Agrear alumnos">
                           <i  id="idicon" class="fa fa-cogs"></i>
                            Materias
                        </button>
</a>  
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="">
                        <button id="cb" type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Agrear alumnos">
                           <i  id="idicon" class="fa fa-cogs"></i>
                            Listas de grupos
                        </button>
</a>
                    </div>    
                </div>
            </div>
       
    <!--________________________  -->
    </div>
</div>
@stop   
