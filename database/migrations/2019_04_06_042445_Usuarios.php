<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class Usuarios extends Migration{
        public function up(){
            Schema::create('usuarios', function (Blueprint $table) {
                $table->increments('idu');
                $table->string('nombre',100);
                $table->string('correo',100);
                $table->string('usuario',100);
                $table->string('password',100);
                $table->string('tipo',100);
                $table->string('Registro',100);
            
                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('usuarios');
        }
    }
