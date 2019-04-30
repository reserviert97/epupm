<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    protected $guarded = [];
    protected $table = 'pengiriman';


    public function toko()
    {
        return $this->belongsTo(Toko::class);
    }
}
