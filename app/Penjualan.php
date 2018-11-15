<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    //
    protected $table="penjualan";

    public function barang(){
        return $this->hasMany(App\Barang::class);
    }
    public function customer(){
        return $this->hasMany(App\Customer::class);
    }
}
