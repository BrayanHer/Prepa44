<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class planeaciones extends Model{
        use SoftDeletes;

        protected $table = 'planeaciones';
        protected $primaryKey = 'IdPlane';
        protected $fillable = ['IdPlane','IdCurso','Archivo'];

        protected $data = ['deleted_at'];
    }
