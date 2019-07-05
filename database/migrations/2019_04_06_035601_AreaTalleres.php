<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class AreaTalleres extends Migration{
        public function up(){
            Schema::create('areaTalleres', function (Blueprint $table) {
                $table->increments('IdATaller');
                $table->string('AreaTaller',10);

                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('areaTalleres');
        }
    }
