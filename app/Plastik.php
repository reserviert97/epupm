<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plastik extends Model
{
    protected $table = 'plastik';
    protected $guarded = [];

    public function operasional()
    {
        return $this->belongsTo(Operasional::class);
    }

    public function scopeTotalUang()
    {
        return $this->sum('total');
    }
}
