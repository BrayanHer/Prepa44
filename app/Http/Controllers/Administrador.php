<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\usuarios;
use Session;
class Administrador extends Controller
{
    public function C_Usuarios(){
$Usuarios = usuarios::withTrashed()->orderBy('idu', 'asc')->get();

            if(Session::get('sesionidu')!="")
                    return view ("V_admin.C_Usuarios")
                                ->with('Usuarios', $Usuarios);
            else{
     Session::flash('error', 'Debe iniciar sesion');
                    return redirect()->route('login');
                     }   
    }

    //Eliminación Lógica
    public function ElUsuario($idu){
        usuarios::find($idu)->delete();

        return redirect()->back();
    }

//Activación
    public function ActUsuario($idu){
        usuarios::withTrashed()->where('idu',$idu)->restore();

        return redirect()->back();
    }

//Eliminación Física
    public function EFUsuario($idu){
        usuarios::withTrashed()->where('idu',$idu)->forceDelete();
        
        return redirect()->back();
    }

    public function ModUsuario($idu){
        $Usuarios = usuarios::where('idu', '=', $idu)
        ->get();

        if(Session::get('sesionidu')!="")
                                        return view ("V_admin.ModUsuario")
                                        ->with('Usuarios', $Usuarios[0]);
								  else{
									  Session::flash('error', 'Debe iniciar sesion');
									  return redirect()->route('login');
								  }
                    
    }

    public function GUsuario(Request $request){
        $idu  = $request->idu;        
        $nombre   = $request->nombre;
        $correo = $request->correo;	
        $usuario = $request->usuario;	
        $password = $request->password;
        $tipo = $request->tipo;		
         

            $this->validate($request,[
                'idu'   => 'required|numeric',
                'nombre'    => 'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
                'correo'  => 'required|email',
                'usuario'    => 'required',
                'tipo'    => 'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],

            ]);

            $login = usuarios::find($idu);
            $login->nombre   = $idu;
			$login->nombre   = $request->nombre;
			$login->correo   = $request->correo;
			$login->usuario  = $request->usuario;
			$login->password = $request->password;
			$login->tipo     = $request->tipo;
			$login->Registro = 'si';
			$login->save();

    return redirect('C_Usuarios');
    }
    
    
}
