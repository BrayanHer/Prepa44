<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class ListasGrupos extends Migration{
        public function up(){
            Schema::create('listasGrupos', function (Blueprint $table) {
                $table->increments('IdLGrup');
                
                $table->integer('IdCEs')->unsigned();
                $table->foreign('IdCEs')->references('IdCEs')->on('ciclosEscolares');
                
                $table->integer('IdTurno')->unsigned();
                $table->foreign('IdTurno')->references('IdTurno')->on('turnos');

                $table->integer('IdPeriodo')->unsigned();
                $table->foreign('IdPeriodo')->references('IdPeriodo')->on('periodos');
                
                $table->integer('IdGrupo')->unsigned();
                $table->foreign('IdGrupo')->references('IdGrupo')->on('grupos');

                $table->string('Archivo',100);

                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('listasGrupos');
        }
    }
