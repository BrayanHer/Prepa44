<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class registrosForos extends Model{
        use SoftDeletes;

        protected $table = 'registrosForos';
        protected $primaryKey = 'IdRForo';
        protected $fillable = ['IdRForo','IdTForo','Archivo'];

        protected $data = ['deleted_at'];
    }
