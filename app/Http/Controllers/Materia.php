<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;

 use App\Http\Requests;
 use App\Http\Controllers\Controller;
 use App\materias;
 use App\periodos;
 use Session;

    class Materia extends Controller{
        public function AMateria(){
            $clavequesigueM = materias::withTrashed()->orderBy('IdMateria', 'desc')
                                                        ->take(1)
                                                        ->get();
                if(count($clavequesigueM)==0){
                    $IdMateria = 1;
                }
                else{ 
                    $IdMateria = $clavequesigueM[0]->IdMateria + 1;
                }

                $Periodos = periodos::withTrashed()->orderBy('Periodo', 'asc')
                                                       ->get();
                
                $Materias =\DB::select("SELECT m.IdMateria, m.Materia, p.Periodo, m.deleted_at
                                            FROM materias AS m
                                            INNER JOIN periodos AS p ON p.IdPeriodo = m.IdPeriodo");

                    return view ("V_admin.Materias")
                    ->with('IdMateria', $IdMateria)
                    ->with('Periodos', $Periodos)
                    ->with('Materias', $Materias);
        }

        public function GMaterias(Request $request){
            $IdMateria = $request->IdMateria;        
            $Materia   = $request->Materia;
            $IdPeriodo = $request->IdPeriodo;
                
            $this->validate($request,[
                'IdMateria'   => 'required|numeric',
                'Materia'     => 'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
                'IdPeriodo'   => 'required|numeric',                      
            ]);

                $Mat = new materias;
                $Mat->IdMateria = $request->IdMateria;
                $Mat->Materia   = $request->Materia;
                $Mat->IdPeriodo = $request->IdPeriodo;
                $Mat->save();

                return redirect()->back();
        }

        public function ELMateria($IdMateria){
            materias::find($IdMateria)->delete();

            return redirect()->back();
        }

        public function AcMateria($IdMateria){
            materias::withTrashed()->where('IdMateria',$IdMateria)->restore();

            return redirect()->back();
        }

        public function EFMateria($IdMateria){
            materias::withTrashed()->where('IdMateria',$IdMateria)->forceDelete();
            
            return redirect()->back();
        }
    
        public function MMateria($IdMateria){
            $Materia = materias::where('IdMateria', '=', $IdMateria)
                                    ->get();
            
            $IdPeriodo = $Materia[0]->IdPeriodo; 

                $Periodo1 = periodos::where('IdPeriodo','=', $IdPeriodo)
                                    ->get();
                                    
                $Periodos = periodos::where('IdPeriodo','!=',$IdPeriodo)
                                    ->get();

                return view('V_admin.MMateria')
                    ->with('Materia',$Materia[0])
                    ->with('IdPeriodo',$IdPeriodo)
                    ->with('Periodo1',$Periodo1[0]->Periodo)
                    ->with('Periodos',$Periodos);
        }

        public function GMateria(Request $request){
            $IdMateria = $request->IdMateria;        
            $Materia   = $request->Materia;
            $IdPeriodo = $request->IdPeriodo;
                
            $this->validate($request,[
                'IdMateria'   => 'required|numeric',
                'Materia'     => 'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
                'IdPeriodo'   => 'required|numeric',                      
            ]);

                $Mat = materias::find($IdMateria);
                $Mat->IdMateria = $request->IdMateria;
                $Mat->Materia   = $request->Materia;
                $Mat->IdPeriodo = $request->IdPeriodo;
                $Mat->save();

            return redirect('AMaterias');
        }
    }
