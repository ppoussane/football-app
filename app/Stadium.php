<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
