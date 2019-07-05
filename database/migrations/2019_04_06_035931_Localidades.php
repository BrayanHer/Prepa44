<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class Localidades extends Migration{
        public function up(){
            Schema::create('localidades', function (Blueprint $table) {
                $table->increments('IdLoc');
                $table->string('Localidad',40);

                $table->integer('IdMun')->unsigned();
                $table->foreign('IdMun')->references('IdMun')->on('municipios');
                
                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('localidades');
        }
    }
