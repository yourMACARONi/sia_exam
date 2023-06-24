<?php

    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;

    class Author extends Model{
        protected $table = 'authortbl';
        protected $fillable = [
            'id',
        ];

        public $timestamps = false;
        protected $primaryKey = 'id';
    }

