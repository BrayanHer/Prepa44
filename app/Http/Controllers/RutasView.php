<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Http\Requests;
 use Session;

    class RutasView extends Controller
    {

        // Pagina Web 
        public function inicio()
        {
            return view('inicio');
        }
        public function index()
        {
            return view('apin');
        }
 public function index_Al()
        {
            return view('home');
        }
           public function V_Acerca(){
            return view('ContenidoWeb.AcercaEpo');
        }
        public function V_Ubicacion(){
            return view('ContenidoWeb.Ubicacion');
        }      
          public function V_Login(){
            return view('Admin.login');
        }
        public function V_Servicios(){
            return view('ContenidoWeb.Servicios');
        }
        public function V_Vinculacion(){
            return view('ContenidoWeb.Vinculacion');
        }
        public function V_Reinscripciones(){
            return view('ContenidoWeb.Reinscripciones');
        }
        public function V_Inscripciones(){
            return view('ContenidoWeb.Inscripciones');
        }
        public function V_Tramites(){
            return view('ContenidoWeb.Tramites');
        }

        // Sistema
        public function V_Admin(){
            if(Session::get('sesionidu')!="")
            return view('administrador');
            else{
                Session::flash('error', 'Debe iniciar sesion');
                return redirect()->route('login');
            }
        }
        public function Administracion(){
            if(Session::get('sesionidu')!="")
            return view('Admin.Administracion');
            else{
                Session::flash('error', 'Debe iniciar sesion');
                return redirect()->route('login');
            }
        }
        public function Maestro(){
            if(Session::get('sesionidu')!="")
            return view('Maestros.Maestro');
            else{
                Session::flash('error', 'Debe iniciar sesion');
                return redirect()->route('login');
            }
           
        }
        public function C_alumno(){
            if(Session::get('sesionidu')!="")
            return view('Alumnos.Consulta');
            else{
                Session::flash('error', 'Debe iniciar sesion');
                return redirect()->route('login');
            }          
        }
        
        public function S_Listas(){
            return view('V_admin.A_Listas');
        }
        public function RegistroP(){
            return view('Maestros.RegistroP');
        }
        public function RegistroE(){
            return view('Maestros.RegistroE');
        }
        public function TareasD(){
            return view('Maestros.Tareas');
        }
        
    }
