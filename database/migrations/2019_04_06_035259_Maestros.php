<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class Maestros extends Migration{
        public function up(){
            Schema::create('maestros', function (Blueprint $table) {
                $table->increments('IdMaestro');
                $table->string('Matricula',50); 
                $table->string('NombreM',50);
                $table->string('APaterno',50);
                $table->string('AMaterno',50); 
                $table->string('Correo',50); 
                $table->string('Telefono',10);
                
                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('maestros');
        }
    }
