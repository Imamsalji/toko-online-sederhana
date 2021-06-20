<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'id_produk','id_user','nama_produk', 'alamat', 'noreq', 'jml', 'status'
    ];
}
