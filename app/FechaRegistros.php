<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class fechaRegistros extends Model{
        use SoftDeletes;

        protected $table = 'fechaRegistros';
        protected $primaryKey = 'IdFRIR';
        protected $fillable = ['IdFRIR','LApellido','Fecha'];

        protected $data = ['deleted_at'];
    }
