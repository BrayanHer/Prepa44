<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class temaForos extends Model{
        use SoftDeletes;
        
        protected $table = 'temaForos';
        protected $primaryKey = 'IdTForo';
        protected $fillable = ['IdTForo','Tema','Descripcion','Archivo','FechaHoraInicio','FechaHoraFin','IdCurso'];

        protected $data = ['deleted_at'];
    }
