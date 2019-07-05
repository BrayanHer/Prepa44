@extends('administrador')
@section('admincontent')
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Procesos Educativos</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
            .table-wrapper-scroll-y {
                display: block;
                max-height: 250px;
                overflow-y: auto;
                -ms-overflow-style: -ms-autohiding-scrollbar;
            }
        </style>
        
        <script type="text/javascript">
            $(document).ready(function(){

                $("#Examen").click(function() {
                    $("#Examen1").load('{{url('ConsultaE')}}' + '?' + $(this).closest('form').serialize()) ;
                   
                    $("#Planeancion1").hide();
                    $("#Examen1").show();

                });

                $("#Planeacion").click(function() {
                    $("#Planeancion1").load('{{url('ConsultaP')}}' + '?' + $(this).closest('form').serialize()) ;
                   
                    $("#Examen1").hide();
                    $("#Planeancion1").show();
                });   

                     
            });
        </script>
    </head>
    <body>
            
        <div class="container col-md-12">
            <div>
                <div class="hidden-lg"></div>
                    <hr color="black" size=1>
                        <h5 class="page-header">
                            <p><i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp; Planeaciones Y Exámenes</p>
                        </h5>		
                </div> 
                <p>
                    <a class="btn btn-info" data-toggle="collapse" href="#Examenes1" role="button" aria-expanded="false" aria-controls="Examenes1" id="Examen" name="Examen">
                        <i class="fa fa-file-text-o" aria-hidden="true"></i> &nbsp;Examenes
                    </a>
                    <a class="btn btn-info" data-toggle="collapse" href="#Planeaciones1" role="button" aria-expanded="false" aria-controls="Planeaciones1" id="Planeacion" name="Planeacion">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> &nbsp; Planeaciones
                    </a>
                </p>
                <div class="collapse" id="Examenes1">
                    <div class="card card-body" id="Examen1">

                    </div>
                </div>

                <div class="collapse" id="Planeaciones1">
                    <div class="card card-body"id="Planeancion1">

                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
@stop