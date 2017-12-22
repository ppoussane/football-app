<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
    public function awards()
    {
        return $this->hasMany(Award::class);
    }

    public function players()
    {
        return $this->belongsToMany(Player::class, 'player_prize', 'prize_id', 'player_id')->withTimestamps();
    }
}
