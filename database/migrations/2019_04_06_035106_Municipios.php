<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class Municipios extends Migration{
        public function up(){
            Schema::create('municipios', function (Blueprint $table) {
                $table->increments('IdMun');
                $table->string('Municipios',40);

                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('municipios');
        }
    }
