<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class Libros extends Migration{
        public function up(){
            Schema::create('libros', function (Blueprint $table) {
                $table->increments('IdLibro');
                $table->string('Titulo', 40);

                $table->integer('IdAutor')->unsigned();
                $table->foreign('IdAutor')->references('IdAutor')->on('autores');
                
                $table->integer('IdEditorial')->unsigned();
                $table->foreign('IdEditorial')->references('IdEditorial')->on('editoriales');

                $table->string('Edicion', 30);
                $table->date('AnioPublicacion');

                $table->integer('IdCategoria')->unsigned();
                $table->foreign('IdCategoria')->references('IdCategoria')->on('categorias');
                
                $table->string('Imagen', 50);
                $table->integer('Existencia');
                
                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('libros');
        }
    }
