<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'nama_product',
        'deskripsi',
        'isi',
        'jenis',
        'created_at',
        'updated_at'       
    ];
}
