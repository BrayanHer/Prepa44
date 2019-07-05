<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class Examenes extends Migration{
        public function up(){
            Schema::create('examenes', function (Blueprint $table) {
                $table->increments('IdExam');
                
                $table->integer('IdCurso')->unsigned();
                $table->foreign('IdCurso')->references('IdCurso')->on('cursos');

                $table->string('Archivo',100);
            
                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('examenes');
        }
    }
