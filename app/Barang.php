<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $fillable=[
    'nama_barang',
    'harga_jual',
    'harga_beli',
    'satuan',
    'kategori'];
    protected $table="barang";
    
    public function penjualan(){
        return $this->belongsTo(App\Penjualan::class);
    }
}
