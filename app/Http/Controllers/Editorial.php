<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Http\Requests;
 use App\Http\Controllers\Controller;

 use App\editoriales;
 use Session;

    class Editorial extends Controller
    {
    //Alta
        public function AltasE(){
            $clavequesigue = editoriales::withTrashed()->orderBy('IdEditorial', 'desc')
                                            ->take(1)
                                            ->get();
            if(count($clavequesigue)==0){
                $IdEditorial = 1;
            }
            else{
                $IdEditorial = $clavequesigue[0]->IdEditorial + 1;
            }
        //Consulta
            $Editoriales = editoriales::withTrashed()->orderBy('IdEditorial', 'asc') //withTrashed -> todos ->eliminados (lógico) o no
                                            ->get();

                                         
                                        if(Session::get('sesionidu')!="")
                                        return view ("Biblioteca.Editoriales")
                                        ->with('IdEditorial', $IdEditorial)           
                                        ->with('Editoriales', $Editoriales);
                     else{
                         Session::flash('error', 'Debe iniciar sesion');
                         return redirect()->route('login');
                     }   
            
  
        }
    
            public function GEditoriales(Request $request){
                $IdEditorial=$request->IdEditorial;        
                $Editorial=$request->Editorial;

                $this->validate($request,[
                    'IdEditorial'   => 'required|numeric',
                    'Editorial'    =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/']
                ]);
                
                $Edi = new editoriales;
                $Edi->IdEditorial=$request->IdEditorial;
                $Edi->Editorial=$request->Editorial;
                $Edi->save();

                return redirect()->back();
        }

    //Eliminación Lógica
            public function ELEditorial($IdEditorial){
                editoriales::find($IdEditorial)->delete();

                return redirect()->back();
            }
            
    //Activación
        public function AEditorial($IdEditorial){
            editoriales::withTrashed()->where('IdEditorial',$IdEditorial)->restore();

            return redirect()->back();
        }
    
    //Eliminación Física
        public function EFEditorial($IdEditorial){
            editoriales::withTrashed()->where('IdEditorial',$IdEditorial)->forceDelete();
            
            return redirect()->back();
        }

    //Modificación
        public function MEditorial($IdEditorial){
            $editorial = editoriales::where('IdEditorial', '=', $IdEditorial)
                                    ->get();

                                    if(Session::get('sesionidu')!="")
                return view ("Biblioteca.MEditorial")
                ->with('editorial', $editorial[0]);
                 else{
                     Session::flash('error', 'Debe iniciar sesion');
                     return redirect()->route('login');
                 }   

        }

        public function GEditorial(Request $request){
            $IdEditorial = $request->IdEditorial;        
            $Editorial   = $request->Editorial;	 


                $this->validate($request,[
                    'IdEditorial'   => 'required|numeric',
                    'Editorial'    =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/']
                ]);

                $Edi = editoriales::find($IdEditorial);
                $Edi->IdEditorial=$request->IdEditorial;
                $Edi->Editorial=$request->Editorial;
                $Edi->save();

            return redirect('AltasE');
        }
    }
