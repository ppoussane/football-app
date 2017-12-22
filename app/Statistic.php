<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    public function league()
    {
        return $this->belongsTo(League::class);
    }

    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function week()
    {
        return $this->belongsTo(Week::class);
    }
}
