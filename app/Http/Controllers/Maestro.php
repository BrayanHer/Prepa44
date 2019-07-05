<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use Session;
 use App\maestros;
 use App\usuarios;
 use App\periodos;
 use App\turnos;
 use App\ciclosEscolares;
 use App\planeaciones;
 use App\examenes;
 use App\materias;
 use App\Http\Requests;

    class Maestro extends Controller{
        public function Maestros(){
            $clavequesigueM = maestros::withTrashed()->orderBy('IdMaestro', 'desc')
                                                        ->take(1)
                                                        ->get();
                if(count($clavequesigueM)==0){
                    $IdMaestro = 1;
                }
                else{
                    $IdMaestro = $clavequesigueM[0]->IdMaestro + 1;
                }

            if(Session::get('sesionidu')!="")
                return view('Maestros.Registro')
                        ->with('IdMaestro',$IdMaestro);
            else{
                Session::flash('error', 'Debe iniciar sesión');
                    return redirect()->route('login');
            }
        }

        public function C_Maestros(){
            $Maestros = maestros::withTrashed()->orderBy('IdMaestro', 'asc')
                                                    ->get();

            if(Session::get('sesionidu')!="")
                return view('Maestros.Consulta')
                        ->with('Maestros',$Maestros);
            else{
                Session::flash('error', 'Debe iniciar sesion');
                    return redirect()->route('login');
          }
        }

        public function G_Maestro(Request $request){
            $IdMaestro = $request->IdMaestro;
            $Matricula = $request->Matricula;
            $NombreM   = $request->NombreM;
            $APaterno  = $request->APaterno;
            $AMaterno  = $request->AMaterno;
            $Correo    = $request->Correo;
            $Telefono  = $request->Telefono;

            $this->validate($request,[
                'IdMaestro' => 'required|numeric',
                'Matricula' => 'required|numeric',
                'NombreM'   => 'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
                'APaterno'  => 'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
                'AMaterno'  => 'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
                'Correo'    => 'required|email',
                'Telefono'  => 'required|numeric'
            ]);

            $User_name=$request->NombreM.' '.$request->APaterno;
        
            $Mar = new maestros;
            $Mar->IdMaestro = $request->IdMaestro;
            $Mar->Matricula = $request->Matricula;
            $Mar->NombreM   = $request->NombreM;
            $Mar->APaterno  = $request->APaterno;
            $Mar->AMaterno  = $request->AMaterno;
            $Mar->Correo    = $request->Correo;
            $Mar->Telefono  = $request->Telefono;
            $Mar->save();

            $login = new usuarios;
			$login->nombre   = $User_name;
			$login->correo   = $request->Correo;
			$login->usuario  = $request->Matricula;
			$login->password = $request->Matricula;
            $login->tipo     = 'Maestro';
            $login->Registro = 'si';
            $login->save();
            
            Session::flash('mensaje','Tu usuario para ingresar es: '.$Matricula.'  y Tu contraseña será: '.$Matricula.'');	
            return redirect()->back();
        }

    //Eliminación Lógica
        public function Des_Maestro($IdMaestro){
            maestros::find($IdMaestro)->delete();
            
            return redirect()->back();
        }

    //Activación
        public function Act_Maestro($IdMaestro){
            maestros::withTrashed()->where('IdMaestro',$IdMaestro)->restore();

            return redirect()->back();
        }

    //Eliminación Física
        public function Del_Categoria($IdMaestro){
            maestros::withTrashed()->where('IdMaestro',$IdMaestro)->forceDelete();
        
            return redirect()->back();
        }

    //Planeaciones y Exámenes
        public function ConsultaPE(){
            return view('Maestros.Planeacion');
        }
        //Planeaciones
        public function APlaneacion(){
            $clavequesigueP = planeaciones::withTrashed()->orderBy('IdPlane', 'desc')
                                                            ->take(1)
                                                            ->get();
                if(count($clavequesigueP)==0){
                    $IdPlane = 1;
                }
                else{
                    $IdPlane = $clavequesigueP[0]->IdPlane + 1;
                }

            $year = date('Y'); 
            $Usuario = Session::get('sesionuser');
            $Curso =\DB::SELECT("SELECT c.IdCurso, ce.CicloEscolar, p.Periodo , m.Materia, ma.Matricula
                                    FROM cursos AS c
                                        INNER JOIN maestros AS ma ON ma.IdMaestro = c.IdMaestro
                                        INNER JOIN ciclosEscolares AS ce ON ce.IdCEs = c.IdCEs
                                        INNER JOIN materias AS m ON m.IdMateria = c.`IdMateria`
                                        INNER JOIN periodos AS p ON p.IdPeriodo = c.IdPeriodo
                                        WHERE CicloEscolar LIKE '%$year%'
                                            AND Matricula = (SELECT u.usuario
                                                                    FROM usuarios AS u 
                                                                        INNER JOIN maestros AS ma ON ma.Matricula = u.usuario
                                                                            WHERE u.usuario LIKE $Usuario)");
            return view('Maestros.APlaneacion')
            ->with('IdPlane',$IdPlane)
            ->with('Curso',$Curso);
        }

        public function GPlane(Request $request){
            $IdPlane  = $request->IdPlane;        
            $IdCurso   = $request->IdCurso;
            $Archivo = $request->Archivo;		 

                $this->validate($request,[
                    'IdPlane'   => 'required|numeric',
                    'IdCurso'    => 'required|numeric',
                    'Archivo'  => 'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/']
                ]);

            $Aut = new planeaciones;
            $Aut->IdPlane  = $request->IdPlane;
            $Aut->IdCurso   = $request->IdCurso;        
            $Aut->Archivo = $request->Archivo;
            $Aut->save();

                return redirect()->back();
        }

        public function RegistroP(){
            $Usuario = Session::get('sesionuser');
            $Consulta =\DB::SELECT("SELECT e.IdPlane, c.IdCurso, ce.CicloEscolar, p.Periodo , m.Materia, ma.Matricula, e.updated_at, e.Archivo, ma.Matricula
                                        FROM cursos AS c
                                            INNER JOIN maestros AS ma ON ma.IdMaestro = c.IdMaestro
                                            INNER JOIN ciclosEscolares AS ce ON ce.IdCEs = c.IdCEs
                                            INNER JOIN materias AS m ON m.IdMateria = c.`IdMateria`
                                            INNER JOIN periodos AS p ON p.IdPeriodo = c.IdPeriodo
                                            INNER JOIN planeaciones AS e ON e.IdCurso  = c.IdCurso 
                                                WHERE Matricula = (SELECT u.usuario
                                                                        FROM usuarios AS u 
                                                                            INNER JOIN maestros AS ma ON ma.Matricula = u.usuario
                                                                                WHERE u.usuario LIKE $Usuario)");
                                         
                return view('Maestros.RegistroP')
                        ->with('Consulta', $Consulta);
        }

        //Examenes
        public function AExamenes(){
            $clavequesigueE = examenes::withTrashed()->orderBy('IdExam', 'desc')
                                                            ->take(1)
                                                            ->get();
                if(count($clavequesigueE)==0){
                    $IdExam = 1;
                }
                else{
                    $IdExam = $clavequesigueE[0]->IdExam + 1;
                }

            $year = date('Y'); 
            $Usuario = Session::get('sesionuser');
            $Curso =\DB::SELECT("SELECT c.IdCurso, ce.CicloEscolar, p.Periodo , m.Materia, ma.Matricula
                                    FROM cursos AS c
                                        INNER JOIN maestros AS ma ON ma.IdMaestro = c.IdMaestro
                                        INNER JOIN ciclosEscolares AS ce ON ce.IdCEs = c.IdCEs
                                        INNER JOIN materias AS m ON m.IdMateria = c.`IdMateria`
                                        INNER JOIN periodos AS p ON p.IdPeriodo = c.IdPeriodo
                                        WHERE CicloEscolar LIKE '%$year%'
                                            AND Matricula = (SELECT u.usuario
                                                                    FROM usuarios AS u 
                                                                        INNER JOIN maestros AS ma ON ma.Matricula = u.usuario
                                                                            WHERE u.usuario LIKE $Usuario)");
            return view('Maestros.AExamenes')
            ->with('IdExam',$IdExam)
            ->with('Curso',$Curso);
        }

        public function GExamen(Request $request){
            $IdExam  = $request->IdExam;        
            $IdCurso   = $request->IdCurso;
            $Archivo = $request->Archivo;		 

                $this->validate($request,[
                    'IdExam'   => 'required|numeric',
                    'IdCurso'    => 'required|numeric',
                    'Archivo'  => 'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/']
                ]);

            $Aut = new examenes;
            $Aut->IdExam  = $request->IdExam;
            $Aut->IdCurso   = $request->IdCurso;        
            $Aut->Archivo = $request->Archivo;
            $Aut->save();

                return redirect()->back();
        }

        public function RegistroE(){
            $Usuario = Session::get('sesionuser');
            $Consulta =\DB::SELECT("SELECT e.IdExam, c.IdCurso, ce.CicloEscolar, p.Periodo , m.Materia, ma.Matricula, e.updated_at, e.Archivo, ma.Matricula
                                        FROM cursos AS c
                                            INNER JOIN maestros AS ma ON ma.IdMaestro = c.IdMaestro
                                            INNER JOIN ciclosEscolares AS ce ON ce.IdCEs = c.IdCEs
                                            INNER JOIN materias AS m ON m.IdMateria = c.`IdMateria`
                                            INNER JOIN periodos AS p ON p.IdPeriodo = c.IdPeriodo
                                            INNER JOIN examenes AS e ON e.IdCurso = c.`IdCurso`
                                                WHERE Matricula = (SELECT u.usuario
                                                                        FROM usuarios AS u 
                                                                            INNER JOIN maestros AS ma ON ma.Matricula = u.usuario
                                                                                WHERE u.usuario LIKE $Usuario)");
                                                
                return view('Maestros.RegistroE')
                        ->with('Consulta', $Consulta);
        }
        

        //Consulta Admin
        public function ConsultaA(){
            return view('Maestros.ConsultaA');
        }

        public function ConsultaP(){
            $Consulta =\DB::SELECT("SELECT e.IdPlane, c.IdCurso, ce.CicloEscolar, p.Periodo ,concat(ma.NombreM,' ',ma.APaterno,' ',ma.AMaterno)as Maestro, m.Materia, ma.Matricula, e.updated_at, e.Archivo, ma.Matricula
                                        FROM cursos AS c
                                            INNER JOIN maestros AS ma ON ma.IdMaestro = c.IdMaestro
                                            INNER JOIN ciclosEscolares AS ce ON ce.IdCEs = c.IdCEs
                                            INNER JOIN materias AS m ON m.IdMateria = c.`IdMateria`
                                            INNER JOIN periodos AS p ON p.IdPeriodo = c.IdPeriodo
                                            INNER JOIN planeaciones AS e ON e.IdCurso  = c.IdCurso");
                                         
                return view('Maestros.ConsultaP')
                        ->with('Consulta', $Consulta);
        }

        

        public function ConsultaE(){
            $Consulta =\DB::SELECT("SELECT e.IdExam, c.IdCurso, ce.CicloEscolar, p.Periodo ,concat(ma.NombreM,' ',ma.APaterno,' ',ma.AMaterno)as Maestro, m.Materia, ma.Matricula, e.updated_at, e.Archivo, ma.Matricula
                                        FROM cursos AS c
                                            INNER JOIN maestros AS ma ON ma.IdMaestro = c.IdMaestro
                                            INNER JOIN ciclosEscolares AS ce ON ce.IdCEs = c.IdCEs
                                            INNER JOIN materias AS m ON m.IdMateria = c.`IdMateria`
                                            INNER JOIN periodos AS p ON p.IdPeriodo = c.IdPeriodo
                                            INNER JOIN examenes AS e ON e.IdCurso = c.`IdCurso`");
                                                
                return view('Maestros.ConsultaE')
                        ->with('Consulta', $Consulta);
        }
    }






