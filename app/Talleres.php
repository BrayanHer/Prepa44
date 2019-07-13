<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class talleres extends Model{
        use SoftDeletes;

        protected $table = 'talleres';
        protected $primaryKey = 'IdTaller';
        protected $fillable = ['IdTaller','IdATaller','Descripcion','Imagen'];

        protected $data = ['deleted_at'];
    }
