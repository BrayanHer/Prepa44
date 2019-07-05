<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class editoriales extends Model{
        use SoftDeletes;

        protected $table = 'editoriales';
        protected $primaryKey = 'IdEditorial';
        protected $fillable = ['IdEditorial','Editorial'];

        protected $data = ['deleted_at'];
    }
