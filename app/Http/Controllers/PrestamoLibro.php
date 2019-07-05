<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Http\Requests;
 use App\Http\Controllers\Controller;

 use App\libros;
 use App\autores;
 use App\editoriales;
 use App\categorias;
 use App\prestamoLibros;
 use App\alumnos;
 use Session;

    class PrestamoLibro extends Controller
    {
    //Alta
        public function AltasP(){
            $clavequesigueP = prestamoLibros::withTrashed()->orderBy('IdPrestamo', 'desc')
                                                                ->take(1)
                                                                ->get();
                if(count($clavequesigueP)==0){
                    $IdPrestamo = 1;
                }
                else{
                    $IdPrestamo = $clavequesigueP[0]->IdPrestamo + 1;
                }
                $Libros = libros::withTrashed()->orderBy('Titulo')
                                                    ->get();
                $Alumnos = alumnos::withTrashed()->orderBy('IdAlumno')
                                          ->get();
            
             //Consulta
                $Prestamo =\DB::select("SELECT p.IdPrestamo, CONCAT(a.Matricula,' - ',a.Nombre,' ',a.APaterno,' ',a.AMaterno) AS 'Alumno' , l.Titulo, p.FechaPrestamo, p.FechaEntrega, p.deleted_at
                FROM prestamoLibros AS p
                INNER JOIN alumnos AS a ON a.IdAlumno = p.IdAlumno
                INNER JOIN libros AS l ON l.IdLibro = p.IdLibro");


if(Session::get('sesionidu')!="")
return view ("Biblioteca.PrestamoLibros")
->with('IdPrestamo', $IdPrestamo)
->with('Libros', $Libros)
->with('Alumnos', $Alumnos)
->with('Prestamo', $Prestamo);
								  else{
									  Session::flash('error', 'Debe iniciar sesion');
									  return redirect()->route('login');
								  }
                                                          
               
            }
       
            public function GPrestamos(Request $request){
                $IdPrestamo=$request->IdPrestamo;        
                $IdAlumno=$request->IdAlumno;
                $IdLibro=$request->IdLibro;        
                $FechaPrestamo=$request->FechaPrestamo;
                $FechaEntrega=$request->FechaEntrega;
                    
                $this->validate($request,[
                    'IdPrestamo'   => 'required|numeric',
                    'IdAlumno'    =>'required|numeric',
                    'IdLibro'   => 'required|numeric',
                    'FechaPrestamo'    => 'required|date',
                    'FechaEntrega'   => 'required|date',                        
                ]);

                    $Lib=new prestamoLibros;
                    $Lib->IdPrestamo=$request->IdPrestamo;
                    $Lib->IdAlumno=$request->IdAlumno;
                    $Lib->IdLibro=$request->IdLibro;
                    $Lib->FechaPrestamo=$request->FechaPrestamo;
                    $Lib->FechaEntrega=$request->FechaEntrega;
                    $Lib->save();
                    return redirect()->back();
            }

         //Eliminación Lógica
             public function ELPrestamo($IdPrestamo){
                prestamoLibros::find($IdPrestamo)->delete();

                return redirect()->back();
            }

        //Activación
            public function APrestamo($IdPrestamo){
                prestamoLibros::withTrashed()->where('IdPrestamo',$IdPrestamo)->restore();

                return redirect()->back();
            }

        //Eliminación Física
            public function EFPrestamo($IdPrestamo){
                prestamoLibros::withTrashed()->where('IdPrestamo',$IdPrestamo)->forceDelete();
                
                return redirect()->back();
            }
        
        //Modificación
            public function MPrestamo($IdPrestamo){
                $prestamo = prestamoLibros::where('IdPrestamo', '=', $IdPrestamo)
                                                ->get();
                $IdLibro = $prestamo[0]->IdLibro;
                    $Libro = libros::where('IdLibro','=', $IdLibro)
                                        ->get();
                    $Libros = libros::where('IdLibro','!=',$IdLibro)
                                        ->get();


                                        if(Session::get('sesionidu')!="")
                                        return view ("Biblioteca.MPrestamo")
                                        ->with('prestamo', $prestamo[0])
                                        ->with('IdLibro', $IdLibro)
                                        ->with('Libro', $Libro[0]->Titulo)
                                        ->with('Libros', $Libros);
								  else{
									  Session::flash('error', 'Debe iniciar sesion');
									  return redirect()->route('login');
								  }
                    
            }

            public function GPrestamo(Request $request){
                $IdPrestamo=$request->IdPrestamo;        
                $IdAlumno=$request->IdAlumno;
                $IdLibro=$request->IdLibro;        
                $FechaPrestamo=$request->FechaPrestamo;
                $FechaEntrega=$request->FechaEntrega;
                    
                $this->validate($request,[
                    'IdPrestamo'   => 'required|numeric',
                    'IdAlumno'    =>'required|numeric',
                    'IdLibro'   => 'required|numeric',
                    'FechaPrestamo'    => 'required|date',
                    'FechaEntrega'   => 'required|date',                        
                ]);

                    $Lib = prestamoLibros::find($IdPrestamo);
                    $Lib->IdPrestamo=$request->IdPrestamo;
                    $Lib->IdAlumno=$request->IdAlumno;
                    $Lib->IdLibro=$request->IdLibro;
                    $Lib->FechaPrestamo=$request->FechaPrestamo;
                    $Lib->FechaEntrega=$request->FechaEntrega;
                    $Lib->save();
                    return redirect('AltasP');
            }
    }