<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Http\Requests;
 use App\alumnos;
 use App\municipios;
 use App\localidades;
 use App\usuarios;
 use App\tareasEntregadas;
 use Session;

	class Alumno extends Controller{
		public function Alumnos(){
			$clavequesigueA = alumnos::withTrashed()->orderBy('IdAlumno', 'desc')
                                        ->take(1)
                                        ->get();
                if(count($clavequesigueA)==0){
                    $IdAlumno = 1;
                }
                else{
                    $IdAlumno = $clavequesigueA[0]->IdAlumno + 1;
                }
			$Municipios = municipios::withTrashed()->orderBy('IdMun', 'asc')
										->get();
			$Localidades = localidades::withTrashed()->orderBy('IdLoc', 'asc')
										->get();

			if (Session::get('sesionidu') != "")
				return view("Alumnos.Registro")
						->with('IdAlumno', $IdAlumno)
						->with('Municipios', $Municipios)
						->with('Localidades', $Localidades);
			else {
				Session::flash('error', 'Debe iniciar sesión');
					return redirect()->route('login');
			}
		}

		public function GAlumnos(Request $request){
			$IdAlumno		= $request->IdAlumno;
			$Matricula 		= $request->Matricula;
			$Nombre 		= $request->Nombre;
			$APaterno	    = $request->APaterno;
			$AMaterno	    = $request->AMaterno;
			$Edad 			= $request->Edad;
			$Sexo 			= $request->Sexo;
			$FechaNac 		= $request->FechaNac;
			$Celular 		= $request->Celular;
			$TelFijo 		= $request->TelFijo;
			$Email 			= $request->Email;
			$Calle 			= $request->Calle;
			$NumInt 		= $request->NumInt;
			$NumExt 		= $request->NumExt;
			$CodigoPostal 	= $request->CodigoPostal;
			$Estado 		= $request->Estado;
			$IdMun 			= $request->IdMun;
			$IdLoc 			= $request->IdLoc;
			$Curp 			= $request->Curp;
			$ActNacimiento  = $request->ActNacimiento;
			$FolioAsignado  = $request->FolioAsignado;
			$SecProcedencia = $request->SecProcedencia;
			$CertificadoSec = $request->CertificadoSec;
			$NombrePadre 	= $request->NombrePadre;
			$APPadre 	  	= $request->APPadre;
			$AMPadre 	  	= $request->AMPadre;
			$CelularPadre	= $request->CelularPadre;
			$NombreMadre  	= $request->NombreMadre;
			$APMadre 	  	= $request->APMadre;
			$AMMadre 	  	= $request->AMMadre;
			$CelularMadre 	= $request->CelularMadre;
		
		// ------------se utiliza para el login-----
			$User_name = $request->Nombre . ' ' . $request->APaterno;

				$this->validate($request, [
					'IdAlumno'		 => 'required|numeric',
					'Matricula'      => 'required|numeric',
					'Nombre'    	 => 'required', ['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
					'APaterno'    	 => 'required', ['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
					'AMaterno'    	 => 'required', ['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
					'Edad'    		 => 'required|integer|min:14',
					'Sexo'    		 => 'required', ['regex:/^[A-Z]'],
					'FechaNac'    	 => 'required|date',
					'Celular'    	 => 'required', ['regex:/^[0-9]{10}$/'],
					'TelFijo'    	 => 'required', ['regex:/^[0-9]{10}$/'],
					'Email'   		 => 'required|email',
					'NumInt'    	 => 'required', ['regex:/^[A-Z,a-z, ,ñ,é,ó,á,í,ú,0-9]+$/'],
					'NumExt'    	 => 'required', ['regex:/^[A-Z,a-z, ,ñ,é,ó,á,í,ú,0-9]+$/'],
					'CodigoPostal'   => 'required', ['regex:/^[0-9]{5}$/'],
					'Estado'    	 => 'required', ['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
					'IdMun'    		 => 'required|numeric',
					'IdLoc'    		 => 'required|numeric',
					'Curp'    		 => 'required', ['regex:/^[A-Z]{4}[0-9]{6}[A-Z]{6}+$/'],
					'ActNacimiento'  => 'required', 'image|mimes:jpeg,png,gif',
					'FolioAsignado'  => 'required', ['regex:/^[0-9]{10}$/'],
					'CertificadoSec' => 'image|mimes:jpeg,png,gif',
					'NombrePadre'    => 'required', ['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
					'APPadre'    	 => 'required', ['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
					'AMPadre'    	 => 'required', ['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
					'CelularPadre'   => 'required', ['regex:/^[0-9]{10}$/'],
					'NombreMadre'    => 'required', ['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
					'APMadre'     	 => 'required', ['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
					'AMMadre'     	 => 'required', ['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
					'CelularMadre'   => 'required', ['regex:/^[0-9]{10}$/']
				]);

			$Per = new alumnos;
			$Per->IdAlumno		 = $request->IdAlumno;
			$Per->Matricula 	 = $request->Matricula;
			$Per->Nombre 		 = $request->Nombre;
			$Per->APaterno 		 = $request->APaterno;
			$Per->AMaterno 		 = $request->AMaterno;
			$Per->Edad 			 = $request->Edad;
			$Per->Sexo 			 = $request->Sexo;
			$Per->FechaNac 		 = $request->FechaNac;
			$Per->Celular 		 = $request->Celular;
			$Per->TelFijo 		 = $request->TelFijo;
			$Per->Email 		 = $request->Email;
			$Per->Calle 		 = $request->Calle;
			$Per->NumInt 		 = $request->NumInt;
			$Per->NumExt 		 = $request->NumExt;
			$Per->CodigoPostal   = $request->CodigoPostal;
			$Per->Estado 		 = $request->Estado;
			$Per->IdMun 		 = $request->IdMun;
			$Per->IdLoc 		 = $request->IdLoc;
			$Per->Curp 			 = $request->Curp;
			$Per->ActNacimiento  = $request->ActNacimiento;
			$Per->FolioAsignado  = $request->FolioAsignado;
			$Per->SecProcedencia = $request->SecProcedencia;
			$Per->CertificadoSec = $request->CertificadoSec;
			$Per->NombrePadre    = $request->NombrePadre;
			$Per->APPadre 		 = $request->APPadre;
			$Per->AMPadre 		 = $request->AMPadre;
			$Per->CelularPadre   = $request->CelularPadre;
			$Per->NombreMadre    = $request->NombreMadre;
			$Per->APMadre 		 = $request->APMadre;
			$Per->AMMadre 		 = $request->AMMadre;
			$Per->CelularMadre   = $request->CelularMadre;
			$Per->save();

			$login = new usuarios;
			$login->nombre   = $User_name;
			$login->correo   = $request->Email;
			$login->usuario  = $request->Matricula;
			$login->password = $request->Matricula;
			$login->tipo     = 'Alumno';
			$login->Registro = 'si';
			$login->save();

			Session::flash('mensaje', 'Tu usuario para ingresar es:  ' . $Matricula . ' y Tu contraseña sera  ' . $Matricula);
				return redirect()->back();
		}

		public function C_alumno(){
			$Alumnos = alumnos::withTrashed()->orderBy('IdAlumno', 'asc')->get();

			if (Session::get('sesionidu') != "")
				return view('Alumnos.Consulta')
						->with('Alumnos', $Alumnos);
			else {
				Session::flash('error', 'Debe iniciar sesión');
					return redirect()->route('login');
			}
		}

		public function Des_Alumno($IdAlumno){
			alumnos::find($IdAlumno)->delete();

			return redirect()->back();
		}

	//Activación
		public function Act_Alumno($IdAlumno){
			alumnos::withTrashed()->where('IdAlumno', $IdAlumno)->restore();

			return redirect()->back();
		}
	
	//Eliminación Física
		public function Del_Alumno($IdAlumno){
			alumnos::withTrashed()->where('IdAlumno', $IdAlumno)->forceDelete();
	
			return redirect()->back();
		}

		public function RegistroP(){
			$clavequesigueA = tareasEntregadas::withTrashed()->orderBy('IdTEnt', 'desc')
                                        ->take(1)
                                        ->get();
                if(count($clavequesigueA)==0){
                    $IdTEnt = 1;
                }
                else{
                    $IdTEnt = $clavequesigueA[0]->IdTEnt + 1;
                }
            $Usuario = Session::get('sesionuser');
            $Consulta =\DB::SELECT("SELECT c.IdCurso, a.IdAlumno, a.Matricula,ac.aluCru,t.TipoTarea, m.Materia, t.`Tema`, t.`Descripcion`, t.`FechaHoraInicio`, t.`FechaHoraFin`, te.`Archivo`, t.IdTarea
			FROM cursos AS c
				   INNER JOIN alumnos AS a
				   INNER JOIN aluCur AS ac ON ac.`IdCurso` = c.`IdCurso`
				   INNER JOIN tareas AS t ON t.IdCurso = c.`IdCurso`
				   INNER JOIN materias AS m ON m.IdMateria = c.`IdMateria`
				   INNER JOIN tareasEntregadas AS te ON te.`IdAlumno` = ac.`IdAlumno`
				   WHERE Matricula = (SELECT u.usuario
																			FROM usuarios AS u 
																				INNER JOIN alumnos AS ma ON ma.Matricula = u.usuario
																					WHERE u.usuario LIKE $Usuario)
																					GROUP BY aluCru");
                                         
				return view('Alumnos.RecibeAL')
				->with('IdTEnt',$IdTEnt)
                        ->with('Consulta', $Consulta);
		}
		
		public function GTarea(Request $request){
            $IdTEnt  = $request->IdTEnt;        
			$IdAlumno   = $request->IdAlumno;
			$IdTEnt  = $request->IdTEnt;
			$Archivo = $request->Archivo;		 
                $this->validate($request,[
                    'IdTEnt'   => 'required|numeric',
                    'IdTarea'    => 'required|numeric'
                ]);

            $Aut = new tareasEntregadas;
            $Aut->IdTEnt  = $request->IdTEnt;
			$Aut->IdTarea   = $request->IdTarea; 
			$Aut->IdAlumno  = $request->IdAlumno;       
            $Aut->Archivo = $request->Archivo;       
            $Aut->Calificacion = 0;
            $Aut->save();

                return redirect()->back();
        }
	}