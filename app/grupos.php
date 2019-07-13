<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class grupos extends Model{
        use SoftDeletes;

        protected $table = 'grupos';
        protected $primaryKey = 'IdGrupo';
        protected $fillable = ['IdGrupo','Grupo'];

        protected $data = ['deleted_at'];
    }
