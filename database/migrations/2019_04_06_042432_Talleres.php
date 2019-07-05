<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class Talleres extends Migration{
        public function up(){
            Schema::create('talleres', function (Blueprint $table) {
                $table->increments('IdTaller');

                $table->integer('IdATaller')->unsigned();
                $table->foreign('IdATaller')->references('IdATaller')->on('areaTalleres');
                
                $table->string('Descripcion',400);
                $table->string('Imagen',100);
            
                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('talleres');
        }
    }
