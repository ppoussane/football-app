<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    public function awards()
    {
        return $this->hasMany(Award::class);
    }

    public function players()
    {
        return $this->belongsToMany(Player::class, 'player_season', 'season_id', 'player_id')->withTimestamps();
    }

    public function stats()
    {
        return $this->hasMany(Stat::class);
    }

    public function statistics()
    {
        return $this->hasMany(Statistic::class);
    }

    public function titles()
    {
        return $this->hasMany(Title::class);
    }
}
