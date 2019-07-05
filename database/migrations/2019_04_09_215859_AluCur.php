<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AluCur extends Migration
{
    public function up(){
        Schema::create('aluCur', function (Blueprint $table) {
            $table->increments('aluCru');

            $table->integer('IdAlumno')->unsigned();
            $table->foreign('IdAlumno')->references('IdAlumno')->on('alumnos');

            $table->integer('IdCurso')->unsigned();
            $table->foreign('IdCurso')->references('IdTipoBaja')->on('tipoBajas');
          
            $table->rememberToken();
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    public function down(){
        Schema::drop('aluCur');
    }
}
