<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sortir extends Model
{
    protected $table = 'sortir';
    protected $guarded = [];

    public function operasional()
    {
        return $this->belongsTo(Operasional::class);
    }

    public function scopeTotalUang()
    {
        return $this->sum('harga');
    }
}
