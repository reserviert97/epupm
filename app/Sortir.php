<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sortir extends Model
{
    protected $table = 'sortir';
    protected $guarded = [];

    public function operasional()
    {
        $this->belongsTo(Operasional::class);
    }
}
