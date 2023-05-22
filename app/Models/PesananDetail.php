<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    public function barang()
    {
        return $this->belongsTo('app\barang', 'barang_id', 'id');
    }

    public function pesanan()
    {
        return $this->belongsTo('app\pesanan', 'pesanan_id', 'id');
    }
}
