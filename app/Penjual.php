<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjual extends Model
{
    protected $table = 'penjual';
    protected $guarded = [];


    public function pembelian()
    {
        return $this->hasMany(Pembelian::class);
    }
}
