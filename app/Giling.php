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
}
