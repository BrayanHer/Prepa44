<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class maestros extends Model{
        use SoftDeletes;

        protected $table = 'maestros';
        protected $primaryKey = 'IdMaestro';
        protected $fillable = ['IdMaestro','Matricula','NombreM','APaterno','AMaterno','Correo','Telefono'];

        protected $data = ['deleted_at'];
    }
