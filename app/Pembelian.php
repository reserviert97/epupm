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

    public function scopeTotalPadi()
    {
        return $this->sum('volume');
    }

    public function scopeStok()
    {
        return $this->totalPadi() - Giling::totalGiling();
    }

    public function scopeTotalUang()
    {
        return $this->sum('total');
    }
}
