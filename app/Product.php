<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [

        'id_produk','id_user','nama_produk', 'deskripsi', 'gambar', 'jml_produk', 'produk_jual', 'produk_beli'

    ];
    
}
