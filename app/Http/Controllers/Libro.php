<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Http\Requests;
 use App\Http\Controllers\Controller;

 use App\Libros;
 use App\Autores;
 use App\Editoriales;
 use App\Categorias;
 use Session;
 
    class Libro extends Controller
    {
    //Alta
        public function AltasL(){
            $clavequesigueL = libros::withTrashed()->orderBy('IdLibro', 'desc')
                                        ->take(1)
                                        ->get();
                if(count($clavequesigueL)==0){
                    $IdLibro = 1;
                }
                else{
                    $IdLibro = $clavequesigueL[0]->IdLibro + 1;
                }
                $Autores = autores::withTrashed()->orderBy('Nombre', 'asc')->orderBy('APaterno', 'asc')
                                          ->get();
                $Editoriales = editoriales::withTrashed()->orderBy('Editorial', 'asc')
                                          ->get();
                $Categorias = categorias::withTrashed()->orderBy('Categoria', 'asc')
                                          ->get();
            //Consulta
                //$Libros = libros::withTrashed()->orderBy('IdLibro', 'asc') //withTrashed -> todos ->eliminados (lógico) o no
                                                        // ->get();
                $Libros =\DB::select("SELECT l.IdLibro, l.Titulo, CONCAT(a.Nombre,' ',a.APaterno,' ',a.AMaterno) AS 'Autor' , e.Editorial, c.Categoria, l.Edicion, l.AnioPublicacion, l.Imagen, l.Existencia, l.deleted_at

FROM libros AS l
                INNER JOIN editoriales AS e ON e.IdEditorial = l.IdEditorial
                INNER JOIN categorias AS c ON c.IdCategoria = l.IdCategoria
                INNER JOIN autores AS a ON a.IdAutor = l.IdAutor");



if(Session::get('sesionidu')!="")
return view ("Biblioteca.Libros")
->with('IdLibro', $IdLibro)
->with('Autores', $Autores)
->with('Editoriales', $Editoriales)
->with('Categorias', $Categorias)
->with('Libros', $Libros);
								  else{
									  Session::flash('error', 'Debe iniciar sesion');
									  return redirect()->route('login');
								  }

                

 
           
            }
       
            public function Glibros(Request $request){
                $IdLibro=$request->IdLibro;        
                $Titulo=$request->Titulo;
                $IdAutor=$request->IdAutor;        
                $IdEditorial=$request->IdEditorial;
                $Edicion=$request->Edicion;        
                $AnoPublicacion=$request->AnoPublicacion;
                $IdCategoria=$request->IdCategoria;
                    
                $this->validate($request,[
                    'IdLibro'   => 'required|numeric',
                    'Titulo'    =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
                    'IdAutor'   => 'required|numeric',
                    'IdEditorial'  => 'required|numeric',
                    'Edicion'  =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
                    'AnoPublicacion'    => 'required|date',
                    'IdCategoria'   => 'required|numeric',                        
                ]);

                    $Lib=new libros;
                    $Lib->IdLibro=$request->IdLibro;
                    $Lib->Titulo=$request->Titulo;
                    $Lib->IdAutor=$request->IdAutor;
                    $Lib->IdEditorial=$request->IdEditorial;
                    $Lib->Edicion=$request->Edicion;
                    $Lib->AnoPublicacion=$request->AnoPublicacion;
                    $Lib->IdCategoria=$request->IdCategoria;
                    $Lib->save();
                    return redirect()->back();
            }

        //Eliminación Lógica
            public function ELLibro($IdLibro){
                libros::find($IdLibro)->delete();

                return redirect()->back();
            }
        
        //Activación
            public function ALibro($IdLibro){
                libros::withTrashed()->where('IdLibro',$IdLibro)->restore();

                return redirect()->back();
            }

        //Eliminación Física
            public function EFLibro($IdLibro){
                libros::withTrashed()->where('IdLibro',$IdLibro)->forceDelete();
                
                return redirect()->back();
            }
        
        //Modificación
            public function MLibro($IdLibro){
                $libro = libros::where('IdLibro', '=', $IdLibro)
                                                ->get();
                
                $IdAutor = $libro[0]->IdAutor; 

                    $Autor = autores::where('IdAutor','=', $IdAutor)
                                        ->get();
                                        
                    $Autores = autores::where('IdAutor','!=',$IdAutor)
                                        ->get();

                $IdCategoria = $libro[0]->IdCategoria;
                    $Categoria = categorias::where('IdCategoria','=', $IdCategoria)
                                                ->get();
                    $Categorias = categorias::where('IdCategoria', '!=', $IdCategoria)
                                                ->get();
                    
                $IdEditorial = $libro[0]->IdEditorial;
                    $Editorial = editoriales::where('IdEditorial','=', $IdEditorial)
                                                ->get();
                    $Editoriales = editoriales::where('IdEditorial', '!=', $IdEditorial)
                                                ->get();

                                                if(Session::get('sesionidu')!="")
                                                return view('Biblioteca.MLibro')
                                                ->with('libro',$libro[0])
                                                ->with('IdAutor',$IdAutor)
                                                ->with('Autor',$Autor[0]->Nombre)
                                                ->with('Autores',$Autores)
                                                ->with('IdEditorial',$IdEditorial)
                                                ->with('Editorial',$Editorial[0]->Editorial)
                                                ->with('Editoriales', $Editoriales)
                                                ->with('IdCategoria',$IdCategoria)
                                                ->with('Categoria',$Categoria[0]->Categoria)
                                                ->with('Categorias',$Categorias);
                                                                          else{
                                                                              Session::flash('error', 'Debe iniciar sesion');
                                                                              return redirect()->route('login');
                                                                          }


                 

            }

            public function GLibro(Request $request){
                $IdLibro=$request->IdLibro;        
                $Titulo=$request->Titulo;
                $IdAutor=$request->IdAutor;        
                $IdEditorial=$request->IdEditorial;
                $Edicion=$request->Edicion;        
                $AnoPublicacion=$request->AnoPublicacion;
                $IdCategoria=$request->IdCategoria;
                    
                $this->validate($request,[
                    'IdLibro'   => 'required|numeric',
                    'Titulo'    =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
                    'IdAutor'   => 'required|numeric',
                    'IdEditorial'  => 'required|numeric',
                    'Edicion'  =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
                    'AnoPublicacion'    => 'required|date',
                    'IdCategoria'   => 'required|numeric',                        
                ]);

                $Lib = libros::find($IdLibro);
                $Lib->IdLibro=$request->IdLibro;
                $Lib->Titulo=$request->Titulo;
                $Lib->IdAutor=$request->IdAutor;
                $Lib->IdEditorial=$request->IdEditorial;
                $Lib->Edicion=$request->Edicion;
                $Lib->AnoPublicacion=$request->AnoPublicacion;
                $Lib->IdCategoria=$request->IdCategoria;
                $Lib->save();
                return redirect('AltasL');
            }

    }