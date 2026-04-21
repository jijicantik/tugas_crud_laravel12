<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pembeli',
        'produk_id',
        'jumlah',
        'harga',
        'total',
        'tanggal'
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}