<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resep extends Model
{
    protected $fillable = [
        'nama',
        'isi',
        'link_youtube',
        'created_at',
        'updated_at'       
    ];
}
