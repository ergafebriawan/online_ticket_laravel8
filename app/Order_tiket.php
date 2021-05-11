<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_tiket extends Model
{
    //
    protected $table = 'order_tiket';

    protected $fillable = [
        'id_order','nama_tiket', 'nama_user', 'alamat', 'email', 'no_wa', 'jml_tiket', 'harga', 'potongan', 'total',
    ];
}
