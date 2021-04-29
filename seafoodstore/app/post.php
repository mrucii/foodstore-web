<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'title',
        'author',
        'isi',
        'created_at',
        'updated_at'       
    ];
}
