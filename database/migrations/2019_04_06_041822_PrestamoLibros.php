<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class PrestamoLibros extends Migration{
        public function up(){
            Schema::create('prestamoLibros', function (Blueprint $table) {
                $table->increments('IdPrestamo');

                $table->integer('IdAlumno')->unsigned();
                $table->foreign('IdAlumno')->references('IdAlumno')->on('alumnos');
                
                $table->integer('IdLibro')->unsigned();
                $table->foreign('IdLibro')->references('IdLibro')->on('libros');
                
                $table->date('FechaPrestamo');
                $table->date('FechaEntrega');
            
                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('prestamoLibros');
        }
    }
