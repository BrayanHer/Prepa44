<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class Avisos extends Migration{
        public function up(){
            Schema::create('avisos', function (Blueprint $table) {
                $table->increments('IdAviso');
                $table->string('Imagen',100);
                $table->string('Descripcion',500);
            
                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('avisos');
        }
    }
