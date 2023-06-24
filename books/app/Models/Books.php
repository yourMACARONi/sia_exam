<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model {

    protected $table = 'booktbl';
        protected $fillable = [
            'bookname','yearpublished','author_id'
        ];

        public $timestamps = false;
        protected $primaryKey = 'id';
}