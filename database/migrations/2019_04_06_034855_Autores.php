<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class Autores extends Migration{
        public function up(){
            Schema::create('autores', function (Blueprint $table) {
                $table->increments('IdAutor');
                $table->string('Nombre',50);
                $table->string('APaterno',50);
                $table->string('AMaterno',50);

                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('autores');
        }
    }
