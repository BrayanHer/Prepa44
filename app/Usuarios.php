<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class usuarios extends Model{
        use SoftDeletes;

        protected $table = 'usuarios';
        protected $primaryKey = 'idu';
        protected $fillable = ['idu','nombre','correo','usuario','password','tipo'];
        
        protected $date = ['delete_at'];
    }
