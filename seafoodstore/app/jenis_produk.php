<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis_produk extends Model
{
    protected $fillable = [
        'nama',
        'deskripsi',     
    ];
    protected $table = 'jenis_produk';

}
