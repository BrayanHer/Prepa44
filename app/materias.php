<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class materias extends Model{
        use SoftDeletes;

        protected $table = 'materias';
        protected $primaryKey = 'IdMateria';
        protected $fillable = ['IdMateria','Materia','IdPeriodo'];

        protected $data = ['deleted_at'];
    }
