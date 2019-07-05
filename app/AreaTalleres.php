<?php

 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class areaTalleres extends Model{
        use SoftDeletes;

        protected $table = 'areaTalleres';
        protected $primaryKey = 'IdATaller';
        protected $fillable = ['IdATaller','AreaTaller'];

        protected $data = ['deleted_at'];
    }
