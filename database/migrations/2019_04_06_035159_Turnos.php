<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class Turnos extends Migration{
        public function up(){
            Schema::create('turnos', function (Blueprint $table) {
                $table->increments('IdTurno');
                $table->string('Turno',50);

                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('turnos');
        }
    }
