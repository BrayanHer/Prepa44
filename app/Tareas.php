<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class tareas extends Model{
        use SoftDeletes;
        
        protected $table = 'tareas';
        protected $primaryKey = 'IdTarea';
        protected $fillable = ['IdTarea','Tema','Descripcion','FechaHoraInicio','FechaHoraFin','TipoTarea','IdCurso'];

        protected $data = ['deleted_at'];
    }
