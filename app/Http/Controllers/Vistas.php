<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;

class Vistas extends Controller
// ******************** P A G I N A   W E B ****************************
{
    public function Home(){return view('index');}
    public function Inicio(){return view('Encabezado');}
    public function Acerca(){ return view('ContenidoWeb.AcercaEpo');}
    public function Tramites(){ return view('ContenidoWeb.Servicios');}
    public function Talleres(){ return view('ContenidoWeb.Vinculacion');}
    public function Inscripciones(){ return view('ContenidoWeb.Inscripciones');}
    public function Reinscripciones(){ return view('ContenidoWeb.Reinscripciones');}
    public function Monto(){ return view('ContenidoWeb.Tramites');}
    public function Ubicacion(){ return view('ContenidoWeb.Ubicacion');}
    public function V_Login(){return view('Admin.login');}
    // ******************** S I S T E M A ****************************
    public function V_Admin(){
        if(Session::get('sesionidu')!="")return view('administrador');else{Session::flash('error', 'Debe iniciar sesion');return redirect()->route('login');}
    }
    public function Administracion(){
        if(Session::get('sesionidu')!="")return view('Admin.Administracion');else{Session::flash('error', 'Debe iniciar sesion');return redirect()->route('login');
        }
    }
    public function Maestro(){
        if(Session::get('sesionidu')!="")return view('Maestros.Maestro');else{Session::flash('error', 'Debe iniciar sesion');return redirect()->route('login');
        }
       
    }
    public function C_alumno(){
        if(Session::get('sesionidu')!="")return view('Alumnos.Consulta');else{Session::flash('error', 'Debe iniciar sesion');return redirect()->route('login');
        }          
    }
    public function S_Listas(){return view('V_admin.A_Listas');}
    public function RegistroP(){return view('Maestros.RegistroP');}
    public function RegistroE(){return view('Maestros.RegistroE');}
    public function TareasD(){return view('Maestros.Tareas');}
    public function Formulario(){return view('V_Admin.Form');}
    public function Muser(){return view('V_Admin.Muser');}
}
