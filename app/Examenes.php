<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class examenes extends Model{
        use SoftDeletes;

        protected $table = 'examenes';
        protected $primaryKey = 'IdExam';
        protected $fillable = ['IdExam','IdCurso','Archivo'];

        protected $data = ['deleted_at'];
    }
