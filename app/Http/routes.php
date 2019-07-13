<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
// **************** P A G I N A   W E B ****************************
Route::get('Home','Vistas@Home','Home')->name('Home');
Route::get('Inicio','Vistas@Inicio','Inicio')->name('Inicio');
Route::get('Acerca','Vistas@Acerca','Acerca')->name('Acerca');
Route::get('Tramites','Vistas@Tramites','Tramites')->name('Tramites');
Route::get('Talleres','Vistas@Talleres','Talleres')->name('Talleres');
Route::get('Inscripciones','Vistas@Inscripciones','Inscripciones')->name('Inscripciones');
Route::get('Reinscripciones','Vistas@Reinscripciones','Reinscripciones')->name('Reinscripciones');
Route::get('Monto','Vistas@Monto','Monto')->name('Monto');
Route::get('Ubicacion','Vistas@Ubicacion','Ubicacion')->name('Ubicacion');
Route::get('Muser','Vistas@Muser','Muser')->name('Muser');

// **************** S I S T E M A ****************************

// Login
Route::get('/login','login@login')->name('login');
Route::POST('/iniciasesion','login@iniciasesion')->name('iniciasesion');
Route::get('/principal','login@principal')->name('principal');
Route::get('/cerrarsesion','login@cerrarsesion')->name('cerrarsesion');
Route::get('/Login','Vistas@V_Login')->name('Login');


//Maestros
Route::get('/ConsultaPE','Maestro@ConsultaPE')->name('ConsultaPE');
    Route::get('/RegistroE','Maestro@RegistroE')->name('RegistroE');
    Route::POST('/GPlane','Maestro@GPlane')->name('GPlane');
    Route::get('/APlaneacion','Maestro@APlaneacion')->name('APlaneacion');
    Route::get('/AExamenes','Maestro@AExamenes')->name('AExamenes');
      Route::POST('/GExamen','Maestro@GExamen')->name('GExamen');
    Route::get('/RegistroP','Maestro@RegistroP')->name('RegistroP');
      //ADMIN
    Route::get('/ConsultaA','Maestro@ConsultaA')->name('ConsultaA');
    Route::get('/ConsultaE','Maestro@ConsultaE')->name('ConsultaE');
    Route::get('/ConsultaP','Maestro@ConsultaP')->name('ConsultaP');
   //Alta
Route::get('/Maestros','Maestro@Maestros')->name('Maestros');
Route::POST('/G_Maestro','Maestro@G_Maestro')->name('G_Maestro');
   //Consulta
Route::get('/C_Maestros','Maestro@C_Maestros')->name('C_Maestros');
   //Eliminación Lógica
Route::get('/Des_Maestro/{IdMaestro}','Maestro@Des_Maestro')->name('Des_Maestro');
   //Activación
Route::get('/Act_Maestro/{IdMaestro}','Maestro@Act_Maestro')->name('Act_Maestro');
   //Eliminación Física
Route::get('/Del_Categoria/{IdMaestro}','Maestro@Del_Categoria')->name('Del_Categoria');


//Alumnos
Route::get('/Alumnos','Alumno@Alumnos')->name('Alumnos');
Route::POST('/GAlumnos','Alumno@GAlumnos')->name('GAlumnos');
Route::get('/C_alumno','Alumno@C_alumno')->name('C_alumno');
Route::get('/RegistroP','Alumno@RegistroP')->name('RegistroP');
Route::POST('/GTarea','Alumno@GTarea')->name('GTarea');



//Administrador
Route::get('/Administrador','Vistas@V_Admin')->name('Administrador');
Route::get('/Administracion','Vistas@Administracion')->name('Administracion');
Route::get('/Listas','Vistas@S_Listas')->name('Listas');
   //Alumnos
      //Eliminación Lógica
        Route::get('/Des_Alumno/{IdMatricula}','Alumno@Des_Alumno')->name('Des_Alumno');
      //Activación
        Route::get('/Act_Alumno/{IdMatricula}','Alumno@Act_Alumno')->name('Act_Alumno');
      //Eliminación Física
        Route::get('/Del_Alumno/{IdMatricula}','Alumno@Del_Alumno')->name('Del_Alumno');

   //Materias
        Route::get('/AMaterias','Materia@AMateria')->name('AMaterias');
        Route::POST('/GMaterias','Materia@GMaterias')->name('GMaterias');
      //Eliminación Lógica
        Route::get('/ELMateria/{IdMateria}','Materia@ELMateria')->name('ELMateria');
      //Activación
        Route::get('/AcMateria/{IdMateria}','Materia@AcMateria')->name('AcMateria');
      //Eliminación Física
        Route::get('/EFMateria/{IdMateria}','Materia@EFMateria')->name('EFMateria');
      //Modificación
        Route::get('/MMateria/{IdMateria}','Materia@MMateria')->name('MMateria');
        Route::POST('/GMateria','Materia@GMateria')->name('GMateria');



//||________________________________ RUTAS DE TAREAS__________________________||
Route::get('/TareasD','Tarea@TareasD')->name('TareasD');
Route::POST('/Gtarea','Tarea@Gtarea')->name('Gtarea');
//Eliminación Lógica
Route::get('/Eltarea/{IdTarea}','Tarea@Eltarea')->name('Eltarea');
//Activación
Route::get('/aTarea/{IdTarea}','Tarea@aTarea')->name('aTarea');
//Eliminación Física
Route::get('/EFTarea/{IdTarea}','Tarea@EFTarea')->name('EFTarea');
Route::get('/CalTarea','Tarea@CalTarea')->name('CalTarea');
Route::get('/ModCalificacion/{IdTEnt}','Tarea@ModCalificacion')->name('ModCalificacion');
Route::POST('/GCali','Tarea@GCali')->name('GCali');
//||________________________________ RUTAS DE ADMINISTRADORES________________||
Route::get('/C_Usuarios','Administrador@C_Usuarios')->name('C_Usuarios');

//Eliminación Lógica
Route::get('/ElUsuario/{idu}','Administrador@ElUsuario')->name('ElUsuario');
//Activación
Route::get('/ActUsuario/{idu}','Administrador@ActUsuario')->name('ActUsuario');
//Eliminación Física
Route::get('/EFUsuario/{idu}','Administrador@EFUsuario')->name('EFUsuario');

//Modificacion
Route::get('/ModUsuario/{idu}','Administrador@ModUsuario')->name('ModUsuario');
Route::POST('/GUsuario','Administrador@GUsuario')->name('GUsuario');

//||________________________________ RUTAS DE PAGINA WEB________________||

Route::get('/ContServicios','PaginaWeb@ContServicios')->name('ContServicios');
Route::get('/PageServicios','PaginaWeb@PageServicios')->name('PageServicios');
Route::get('/MFecha/{IdFRIR}','PaginaWeb@MFecha')->name('MFecha');
Route::POST('/GFecha','PaginaWeb@GFecha')->name('GFecha');
Route::POST('/GDescripcion','PaginaWeb@GDescripcion')->name('GDescripcion');
//********************************L O G I N   U P D A T E************************************************/
Route::get('/logUpdate','LoginUp@logUpdate')->name('logUpdate');
Route::get('/Muser/{idu}','LoginUp@Muser')->name('Muser');
Route::POST('/MUser','Editorial@MUser')->name('MUser');
