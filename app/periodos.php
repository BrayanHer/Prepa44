<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class periodos extends Model{
        use SoftDeletes;

        protected $table = 'periodos';
        protected $primaryKey = 'IdPeriodo';
        protected $fillable = ['IdPeriodo','Periodo'];

        protected $data = ['deleted_at'];
    }
