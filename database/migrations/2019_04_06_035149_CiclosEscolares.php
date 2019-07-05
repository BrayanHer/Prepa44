<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class CiclosEscolares extends Migration{
        public function up(){
            Schema::create('ciclosEscolares', function (Blueprint $table) {
                $table->increments('IdCEs');
                $table->string('CicloEscolar',50);

                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }  

        public function down(){
            Schema::drop('ciclosEscolares');
        }
    }
