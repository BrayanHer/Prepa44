<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class StatusEstudiante extends Migration{
        public function up(){
            Schema::create('statusEstudiantes', function (Blueprint $table) {
                $table->increments('IdStatus');

                $table->integer('IdAlumno')->unsigned();
                $table->foreign('IdAlumno')->references('IdAlumno')->on('alumnos');

                $table->integer('IdTipoBaja')->unsigned();
                $table->foreign('IdTipoBaja')->references('IdTipoBaja')->on('tipoBajas');
                
                $table->date('FechaBaja');
                $table->string('Observacion',250);

                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('statusEstudiantes');
        }
    }
