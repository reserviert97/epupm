<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{ 
    protected $table = 'transport';
    protected $guarded = [];
    
    public function operasional()
    {
        return $this->belongsTo(Operasional::class);
    }
}
