<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class Categorias extends Migration{
        public function up(){
            Schema::create('categorias', function (Blueprint $table) {
                $table->increments('IdCategoria');
                $table->string('Categoria',50);

                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('categorias');
        }
    }
