<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class formAcademicas extends Model{
        use SoftDeletes;

        protected $table = 'formAcademicas';
        protected $primaryKey = 'IdFAc';
        protected $fillable = ['IdFAc','IdAlumno','IdCEs','IdTurno','IdPeriodo','IdGrupo'];

        protected $data = ['deleted_at'];
    }
