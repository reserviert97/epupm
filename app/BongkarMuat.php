<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BongkarMuat extends Model
{
    protected $table = 'bongkar_muat';
    protected $guarded = [];

    public function operasional()
    {
        return $this->belongsTo(Operasional::class);
    }
}
