<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fechaRegistros;
use App\avisos;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;


class PaginaWeb extends Controller  
{
    public function ContServicios(){
        $clavequesigueA = avisos::withTrashed()->orderBy('IdAviso', 'desc')
        ->take(1)
        ->get();

    if (count($clavequesigueA) == 0) {
        $IdAviso = 1;
    } else {
        $IdAviso = $clavequesigueA[0]->IdAviso + 1;
    }
 
        $Avisos = avisos::withTrashed()->orderBy('IdAviso', 'asc')->get();
  
        $Servicios = fechaRegistros::withTrashed()->orderBy('IdFRIR', 'asc')->get();
       

        return view('V_admin.Servicios')
        ->with('Avisos',$Avisos)
        ->with('IdAviso',$IdAviso)
        ->with('Servicios',$Servicios);

    }
    public function PageServicios(){
        $AvisosPage=avisos::withTrashed()->orderBy('IdAviso', 'asc')->get();

        $Servicios = fechaRegistros::withTrashed()->orderBy('IdFRIR', 'asc')->get();

        return view('V_admin.Serviciospage')
        ->with('AvisosPage',$AvisosPage)
        ->with('Servicios',$Servicios);

    }

    //Modificación
    public function MFecha($IdFRIR){
        $serv = fechaRegistros::where('IdFRIR', '=', $IdFRIR)
                            ->get();
        if(Session::get('sesionidu')!="")
            return view ("V_admin.MFechas")
                    ->with('serv', $serv[0]);
        else{
            Session::flash('error', 'Debe iniciar sesión');
                return redirect()->route('login');
        }
    }

    public function GFecha(Request $request){
        $IdFRIR  = $request->IdFRIR;        
        $LApellido   = $request->LApellido;
        $Fecha = $request->Fecha;	
         

            $this->validate($request,[
                'IdFRIR'   => 'required|numeric',
                'LApellido'    => 'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
                'Fecha'  => 'required|date'
            ]);

        $Aut = fechaRegistros::find($IdFRIR);
        $Aut->IdFRIR  = $request->IdFRIR;
        $Aut->LApellido   = $request->LApellido;        
        $Aut->Fecha = $request->Fecha;
        $Aut->save();

    return redirect('ContServicios');

    }
    public function GDescripcion(Request $request){
        $IdAviso  = $request->IdAviso;        
        $Descripcion = $request->Descripcion;

         

            $this->validate($request,[
                'IdAviso'   => 'required|numeric',
                'Descripcion'    => 'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],

            ]);

        $Avi = new avisos;
        $Avi->IdAviso = $request->IdAviso;
        $Avi->Descripcion = $request->Descripcion;        
        $Avi->save();

        return redirect()->back();
    }

}
