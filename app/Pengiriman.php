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

    public function scopePresentase()
    {
        return $this->sum('volume') / 60000 * 100;
    }

    public function scopeTotalBeras()
    {
        return $this->sum('volume');
    }

    public function scopeStok()
    {
        return Giling::totalBeras() - $this->totalBeras() ;
    }

    public function scopeTotalUang()
    {
        return $this->sum('total');
    }
}
