<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class aluCur extends Model
{
    use SoftDeletes;

        protected $table = 'aluCur';
        protected $primaryKey = 'aluCru';
        protected $fillable = ['aluCru','IdAlumno','IdCurso'];
    
        protected $data = ['deleted_at'];
}
