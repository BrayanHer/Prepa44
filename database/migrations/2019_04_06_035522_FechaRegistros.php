<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class FechaRegistros extends Migration{
        public function up(){
            Schema::create('fechaRegistros', function (Blueprint $table) {
                $table->increments('IdFRIR');
                $table->string('LApellido',5);
                $table->date('Fecha');
            
                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('fechaRegistros');
        }
    }
