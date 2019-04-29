<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = 'pembelian';
    protected $guarded = [];

    public function penjual()
    {
        return $this->belongsTo(Penjual::class);
    }
}
