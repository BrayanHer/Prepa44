<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class RegistrosForos extends Migration{
        public function up(){
            Schema::create('registrosForos', function (Blueprint $table) {
                $table->increments('IdRForo');

                $table->integer('IdTForo')->unsigned();
                $table->foreign('IdTForo')->references('IdTForo')->on('temaForos');

                $table->string('Archivo',100);

                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('registrosForos');
        }
    }
