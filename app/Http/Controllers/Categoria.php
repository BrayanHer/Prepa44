<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Http\Requests;
 use App\Http\Controllers\Controller;

 use App\categorias;
 use Session;

    class Categoria extends Controller    {
    //Alta
        public function AltasC(){
            $clavequesigue = categorias::withTrashed()->orderBy('IdCategoria', 'desc')
                                                        ->take(1)
                                                        ->get();
                if(count($clavequesigue)==0){
                    $IdCategoria = 1;
                }
                else{
                    $IdCategoria = $clavequesigue[0]->IdCategoria + 1;
                }
                
    //Consulta
                $Categorias = categorias::withTrashed()->orderBy('IdCategoria', 'asc')
                                                         ->get();

                                                         if(Session::get('sesionidu')!="")
                                                         return view ("Biblioteca.Categorias")
                                                         ->with('IdCategoria', $IdCategoria)
                                                         ->with('Categorias', $Categorias);
                                      else{
                                          Session::flash('error', 'Debe iniciar sesion');
                                          return redirect()->route('login');
                                      }
              
            }

            public function Gcategorias(Request $request){
                    $IdCategoria=$request->IdCategoria;        
                    $Categoria=$request->Categoria;

                    $this->validate($request,[
                        'IdCategoria'   => 'required|numeric',
                        'Categoria'    =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/']
                    ]);

                        $Cat=new categorias;
                        $Cat->IdCategoria=$request->IdCategoria;
                        $Cat->Categoria=$request->Categoria;
                        $Cat->save();	

                    return redirect()->back(); 
            }

        //Eliminación Lógica
            public function ELCategoria($IdCategoria){
                categorias::find($IdCategoria)->delete();

                return redirect()->back();
            }
        
        //Activación
            public function ACategoria($IdCategoria){
                categorias::withTrashed()->where('IdCategoria',$IdCategoria)->restore();

                return redirect()->back();
            }
        
        //Eliminación Física
            public function EFCategoria($IdCategoria){
                categorias::withTrashed()->where('IdCategoria',$IdCategoria)->forceDelete();
                
                return redirect()->back();
            }

        //Modificación
            public function MCategoria($IdCategoria){
                $categoria = categorias::where('IdCategoria', '=', $IdCategoria)
                                        ->get();

                                        if(Session::get('sesionidu')!="")
                                        return view ("Biblioteca.MCategoria")
                    ->with('categoria', $categoria[0]);
                     else{
                         Session::flash('error', 'Debe iniciar sesion');
                         return redirect()->route('login');
                     }

                   
            }

            public function GCategoria(Request $request){
                $IdCategoria = $request->IdCategoria;        
                $Categoria   = $request->Categoria;	 


                    $this->validate($request,[
                        'IdCategoria'   => 'required|numeric',
                        'Categoria'    =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/']
                    ]);

                    $Cat = categorias::find($IdCategoria);
                    $Cat->IdCategoria=$request->IdCategoria;
                    $Cat->Categoria=$request->Categoria;
                    $Cat->save();

                return redirect('AltasC');
            }
   }