<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class Grupos extends Migration{
        public function up(){
            Schema::create('grupos', function (Blueprint $table) {
                $table->increments('IdGrupo');
                $table->string('Grupo',10);

                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('grupos');
        }
    }
