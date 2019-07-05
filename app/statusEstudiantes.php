<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class statusEstudiantes extends Model{
        use SoftDeletes;

        protected $table = 'statusEstudiantes';
        protected $primaryKey = 'IdStatus';
        protected $fillable = ['IdStatus','IdAlumno','IdTipoBaja','FechaBaja','Observacion'];

        protected $data = ['deleted_at'];
    }
