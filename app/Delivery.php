<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{ 
    protected $table = 'deliverys';
    protected $fillable = [
        'id_produk','id_user','nama_produk', 'alamat', 'jml', 'status'
    ];
}
