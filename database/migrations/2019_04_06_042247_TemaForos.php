<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class TemaForos extends Migration{
        public function up(){
            Schema::create('temaForos', function (Blueprint $table) {
                $table->increments('IdTForo');
                $table->string('Tema',100);
                $table->string('Descripcion',400);
                $table->string('Archivo',100);
                $table->dateTime('FechaHoraInicio');
                $table->dateTime('FechaHoraFin');

                $table->integer('IdCurso')->unsigned();
                $table->foreign('IdCurso')->references('IdCurso')->on('cursos');

                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('temaForos');            
        }
    }
