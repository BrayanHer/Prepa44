<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class avisos extends Model{
        use SoftDeletes;

        protected $table = 'avisos';
        protected $primaryKey = 'IdAviso';
        protected $fillable = ['IdAviso','Imagen','Descripcion'];

        protected $data = ['deleted_at'];
    }
