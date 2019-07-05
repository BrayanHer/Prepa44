<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class prestamoLibros extends Model{
        use SoftDeletes;
        
        protected $table = 'prestamoLibros';
        protected $primaryKey ='IdPrestamo';
        protected $fillable=['IdPrestamo','IdAlumno','IdLibro','FechaPrestamo','FechaEntrega'];

        protected $data = ['deleted_at'];
    }
