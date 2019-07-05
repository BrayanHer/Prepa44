<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class alumnos extends Model{
        use SoftDeletes;

        protected $table = 'alumnos';
        protected $primaryKey = 'IdAlumno';
        protected $fillable = ['IdAlumno','Matricula','Nombre','APaterno','AMaterno','Edad','Sexo','FechaNac','Celular','TelFijo',
                                'Email','Calle','NumInt','NumExt','CodigoPostal','Estado','IdMun','IdLoc','Curp','ActNacimiento',
                                'FolioAsignado','SecProcedencia','CertificadoSec','NombrePadre','APPadre','AMPadre','CelularPadre',
                                'NombreMadre','APMadre','AMMadre','CelularMadre'];
    
        protected $data = ['deleted_at'];
    }
