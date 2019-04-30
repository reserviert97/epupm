<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $table = "toko";
    protected $guarded = [];

    public function pengiriman()
    {
        return $this->hasMany(Pengiriman::class);
    }
}
