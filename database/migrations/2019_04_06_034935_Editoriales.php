<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class Editoriales extends Migration{
        public function up(){
            Schema::create('editoriales', function (Blueprint $table) {
                $table->increments('IdEditorial');
                $table->string('Editorial',50);

                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('editoriales');
        }
    }
