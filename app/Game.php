<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['host', 'guest', 'day', 'timeResult', 'week_id'];

    public function week ()
    {
        $this->belongsTo(Week::class);
    }

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
