<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Administrador</title>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{asset('admin/css/sb-admin.css')}}" rel="stylesheet">
</head>
<style>
#Bag{
  color:rgb(0, 86, 179);
}
</style>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">

  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html"><i class="fa fa-user"></i> &nbsp;
  {{Session::get('sesionname')}}
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      
<!-- Lista de maestros -->
@if(Session::get('sesiontipo')=="Maestro" || Session::get('sesiontipo')=="Admin" )
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Maestros">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fa fa-users"></i>
            <span class="nav-link-text">Maestros</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="#"><i class="fa fa-circle-o" aria-hidden="true"></i> &nbsp;Estudiantes</a>
            </li>
            <li>
              <a href="{{route('TareasD')}}"><i class="fa fa-circle-o" aria-hidden="true"></i> &nbsp;Tareas</a>
            </li>
            <li>
              <a href="{{route('ConsultaPE')}}"><i class="fa fa-circle-o" aria-hidden="true"></i> &nbsp;Planeación y Exámenes</a>
            </li>
          </ul>
        </li>
<!-- fin de lista de maestros -->
@endif
@if(Session::get('sesiontipo')=="Alumno" || Session::get('sesiontipo')=="Admin")
<!-- inicio de lista de Alumnos -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Alumnos">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
          <i class="fa fa-graduation-cap"></i>
            <span class="nav-link-text">Alumnos</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="{{route('RegistroP')}}"><i class="fa fa-circle-o" aria-hidden="true"></i> &nbsp;Tareas</a>
            </li>
            @if(Session::get('sesionreg')=="si")
            
           @else
            <li>
              <a href="{{route('Alumnos')}}"><i class="fa fa-circle-o" aria-hidden="true"></i> &nbsp;Información Personal</a>
            </li>
             @endif
             <li>
            </li>
          </ul>
        </li>

<!-- fin de lista de alumnos -->
@endif

  @if(Session::get('sesiontipo')=="Admin")

<!-- fin de lista biblioteca -->
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Administradores">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAdmin" data-parent="#exampleAccordion">
          <i class="fa fa-sliders"></i>
            <span class="nav-link-text">Administrador</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseAdmin">
            <li>
              <a href="{{route('Administracion')}}"><i class="fa fa-circle-o" aria-hidden="true"></i> &nbsp;Configuración General</a>
            </li>
            <li>
              <a href="{{route('Listas')}}"><i class="fa fa-circle-o" aria-hidden="true"></i> &nbsp;Listas de Grupos</a>
            </li>
            <li>
              <a href="{{route('C_Usuarios')}}"><i class="fa fa-circle-o" aria-hidden="true"></i> &nbsp;Lista de Usuarios</a>
            </li>
          </ul>
@endif
        <!-- -------------------------aqui se cierran los endif--- -->
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">        
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Busca por...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Cerrar Sesión</a>
        </li>
      </ul>
    </div>
  </nav>

  
  <div class="content-wrapper">
    <div class="container-fluid">
    <div   class="cotainer col-md-12">
    
    <div class="row">
    @include('partials.alertas')
    <!-- aqui va el calendario -->
    <div class="col-sm-7">
    
    </div>
<!-- Aqui finaliza -->

      <div class="row">
      <br><br>
      </div>
    <!-- aqui terminan los correos -->
   </div>
    
    </div>

    
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
        <!-- numeros de soporte tecnico y correos -->
          <small></small>
<!-- termina coreros y soporte -->
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Seguro que quieres salir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="{{route('Login')}}">Cerrar Sesión</a>
          </div>
        </div>
      </div>
    </div>
                  
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{asset('admin/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin/vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin/js/sb-admin.min.js')}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('admin/js/sb-admin-datatables.min.js')}}"></script>
    <script src="{{asset('admin/js/sb-admin-charts.min.js')}}"></script>
  </div>
  <div>
                        @yield('admincontent')
                  </div> 
    </div>
</body>

</html>
