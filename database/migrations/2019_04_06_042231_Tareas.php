<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class Tareas extends Migration{
        public function up(){
            Schema::create('tareas', function(Blueprint $table) {
                $table->increments('IdTarea');
                $table->string('Tema',100);
                $table->string('Descripcion',400);
                $table->dateTime('FechaHoraInicio');
                $table->dateTime('FechaHoraFin');
                $table->string('TipoTarea',25);

                $table->integer('IdCurso')->unsigned();
                $table->foreign('IdCurso')->references('IdCurso')->on('cursos');

                $table->rememberToken();
                $table->timestamps(); 
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('tareas');
        }
    }
