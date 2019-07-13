<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class turnos extends Model{
        use SoftDeletes;
        
        protected $table = 'turnos';
        protected $primaryKey = 'IdTurno';
        protected $fillable = ['IdTurno','Turno'];

        protected $data = ['deleted_at'];
    }
