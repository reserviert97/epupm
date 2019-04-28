<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operasional extends Model
{
    protected $table = 'operasional';
    protected $guarded = [];

    public function giling()
    {
        return $this->hasOne(Giling::class);
    }

    public function transport()
    {
        return $this->hasOne(Transport::class);
    }

    public function plastik()
    {
        return $this->hasOne(Plastik::class);
    }

    public function sortir()
    {
        return $this->hasOne(Sortir::class);
    }

    public function bongkarMuat()
    {
        return $this->hasOne(BongkatMuat::class);
    }
}