<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    public static function last_season_stats()
    {
        //return static::Season('season_id', 'desc')->first();
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

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
}