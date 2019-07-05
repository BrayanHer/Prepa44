<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Http\Requests;
 use App\Http\Controllers\Controller;

 use Illuminate\Support\Facades\Input;
 use Illuminate\Support\Facades\Response;
 use Illuminate\Support\Facades\Validator;
 use Session;

 use App\autores;

    class Autor extends Controller{
    //Alta
        public function AltasA(){
            $clavequesigueA = autores::withTrashed()->orderBy('IdAutor', 'desc')
                                                        ->take(1)
                                                        ->get();
                if(count($clavequesigueA)==0){
                    $IdAutor = 1;
                }
                else{
                    $IdAutor = $clavequesigueA[0]->IdAutor + 1;
                }
        
    //Consulta    
            $Autores = autores::withTrashed()->orderBy('IdAutor', 'asc') //withTrashed -> todos ->eliminados (lógico) o no
                                                ->get();

                if(Session::get('sesionidu')!="")
                    return view ("Biblioteca.Autores")
                        ->with('IdAutor', $IdAutor)
                        ->with('Autores', $Autores);
                else{
                    Session::flash('error', 'Debe iniciar sesión');
                        return redirect()->route('login');
                }
        }

        public function GAutores(Request $request){
            $IdAutor  = $request->IdAutor;        
            $Nombre   = $request->Nombre;
            $APaterno = $request->APaterno;
            $AMaterno = $request->AMaterno;		 

                $this->validate($request,[
                    'IdAutor'   => 'required|numeric',
                    'Nombre'    => 'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
                    'APaterno'  => 'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/']
                ]);

            $Aut = new autores;
            $Aut->IdAutor  = $request->IdAutor;
            $Aut->Nombre   = $request->Nombre;        
            $Aut->APaterno = $request->APaterno;
            $Aut->AMaterno = $request->AMaterno;
            $Aut->save();

                return redirect()->back();
        }
 
    //Eliminación Lógica
        public function ELAutor($IdAutor){
            autores::find($IdAutor)->delete();

            return redirect()->back();
        }

    //Activación
        public function AAutor($IdAutor){
            autores::withTrashed()->where('IdAutor',$IdAutor)->restore();

            return redirect()->back();
        }

    //Eliminación Física
        public function EFAutor($IdAutor){
            autores::withTrashed()->where('IdAutor',$IdAutor)->forceDelete();
            
            return redirect()->back();
        }

    //Modificación
        public function MAutor($IdAutor){
            $autor = autores::where('IdAutor', '=', $IdAutor)
                                ->get();
            if(Session::get('sesionidu')!="")
                return view ("Biblioteca.MAutor")
                        ->with('autor', $autor[0]);
            else{
                Session::flash('error', 'Debe iniciar sesión');
                    return redirect()->route('login');
            }
        }

        public function GAutor(Request $request){
            $IdAutor  = $request->IdAutor;        
            $Nombre   = $request->Nombre;
            $APaterno = $request->APaterno;
            $AMaterno = $request->AMaterno;		 

                $this->validate($request,[
                    'IdAutor'   => 'required|numeric',
                    'Nombre'    => 'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
                    'APaterno'  => 'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/']
                ]);

            $Aut = autores::find($IdAutor);
            $Aut->IdAutor  = $request->IdAutor;
            $Aut->Nombre   = $request->Nombre;        
            $Aut->APaterno = $request->APaterno;
            $Aut->AMaterno = $request->AMaterno;
            $Aut->save();

        return redirect('AltasA');
        }
    }