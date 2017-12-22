<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standing extends Model
{
    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
