<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class Cursos extends Migration{
        public function up(){
            Schema::create('cursos', function (Blueprint $table) {
                $table->increments('IdCurso');

                $table->integer('IdMateria')->unsigned();
                $table->foreign('IdMateria')->references('IdMateria')->on('materias');

                $table->integer('IdMaestro')->unsigned();
                $table->foreign('IdMaestro')->references('IdMaestro')->on('maestros');

                $table->integer('IdCEs')->unsigned();
                $table->foreign('IdCEs')->references('IdCEs')->on('ciclosEscolares');

                $table->integer('IdTurno')->unsigned();
                $table->foreign('IdTurno')->references('IdTurno')->on('turnos');

                $table->integer('IdPeriodo')->unsigned();
                $table->foreign('IdPeriodo')->references('IdPeriodo')->on('periodos');
                
                $table->integer('IdGrupo')->unsigned();
                $table->foreign('IdGrupo')->references('IdGrupo')->on('grupos');

                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('cursos');
        }
    }
