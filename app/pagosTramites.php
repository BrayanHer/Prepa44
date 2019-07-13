<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class pagosTramites extends Model{
        use SoftDeletes;

        protected $table = 'pagosTramites';
        protected $primaryKey = 'IdPTra';
        protected $fillable = ['IdPTra','IdAlumno','IdTramite','IdCEs','IdTurno','IdPeriodo','IdGrupo','Fecha','Fotos','Baucher'];

        protected $data = ['deleted_at'];
    }
