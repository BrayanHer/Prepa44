<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class tipoBajas extends Model{
        use SoftDeletes;
        
        protected $table = 'tipoBajas';
        protected $primaryKey = 'IdTipoBaja';
        protected $fillable = ['IdTipoBaja','Tipo'];

        protected $data = ['deleted_at'];
    }
