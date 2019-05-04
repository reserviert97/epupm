<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Giling extends Model
{
    protected $table = 'giling';
    protected $guarded = [];


    public function operasional()
    {
        return $this->belongsTo(Operasional::class);
    }

    public function scopeTotalGiling()
    {
        return $this->sum('volume_gkg');
    }

    public function scopeTotalBeras()
    {
        return $this->sum('volume_beras');
    }

    public function scopeTotalUang()
    {
        return $this->sum('total');
    }
}
