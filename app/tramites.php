<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class tramites extends Model{
        use SoftDeletes;
        
        protected $table = 'tramites';
        protected $primaryKey = 'IdTramite';
        protected $fillable = ['IdTramite','Tramite'];

        protected $data = ['deleted_at'];
    }
