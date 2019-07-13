<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class ciclosEscolares extends Model{
        use SoftDeletes;

        protected $table = 'ciclosEscolares';
        protected $primaryKey = 'IdCEs';
        protected $fillable = ['IdCEs','CicloEscolar'];

        protected $data = ['deleted_at'];
    }
