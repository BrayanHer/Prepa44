<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class PagosTramites extends Migration{
        public function up(){
            Schema::create('pagoTramites', function (Blueprint $table) {
                $table->increments('IdPTra');

                $table->integer('IdAlumno')->unsigned();
                $table->foreign('IdAlumno')->references('IdAlumno')->on('alumnos');        

                $table->integer('IdTramite')->unsigned();
                $table->foreign('IdTramite')->references('IdTramite')->on('tramites');
                
                $table->integer('IdCEs')->unsigned();
                $table->foreign('IdCEs')->references('IdCEs')->on('ciclosEscolares');
                
                $table->integer('IdTurno')->unsigned();
                $table->foreign('IdTurno')->references('IdTurno')->on('turnos');

                $table->integer('IdPeriodo')->unsigned();
                $table->foreign('IdPeriodo')->references('IdPeriodo')->on('periodos');
                
                $table->integer('IdGrupo')->unsigned();
                $table->foreign('IdGrupo')->references('IdGrupo')->on('grupos');

                $table->date('Fecha');
                $table->string('Fotos',100);
                $table->string('Baucher',15);

                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('pagoTramites');
        }
    }
