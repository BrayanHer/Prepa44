<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class FormAcademicas extends Migration{
        public function up(){
            Schema::create('formAcademicas', function (Blueprint $table) {
                $table->integer('IdFAc');

                $table->integer('IdAlumno')->unsigned();
                $table->foreign('IdAlumno')->references('IdAlumno')->on('alumnos');  
                
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
            Schema::drop('formAcademicas');
        }
    }
