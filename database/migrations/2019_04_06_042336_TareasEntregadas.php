<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class TareasEntregadas extends Migration{
        public function up(){
            Schema::create('tareasEntregadas', function (Blueprint $table) {
                $table->increments('IdTEnt');

                $table->integer('IdTarea')->unsigned();
                $table->foreign('IdTarea')->references('IdTarea')->on('tareas');

                $table->integer('IdAlumno')->unsigned();
                $table->foreign('IdAlumno')->references('IdAlumno')->on('alumnos');
                
                $table->string('Archivo',100);

                $table->string('Calificacion');
            
                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('tareasEntregadas');
        }
    }
