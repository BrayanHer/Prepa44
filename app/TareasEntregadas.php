<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class tareasEntregadas extends Model{
        use SoftDeletes;
        
        protected $table = 'tareasEntregadas';
        protected $primaryKey = 'IdTEnt';
        protected $fillable = ['IdTEnt','IdTarea','IdAlumno','Archivo','Calificacion'];

        protected $data = ['deleted_at'];
    }
