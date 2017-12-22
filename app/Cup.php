<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cup extends Model
{
    public function players()
    {
        return $this->belongsToMany(Player::class, 'player_cup', 'cup_id', 'player_id')->withTimestamps();
    }

    public function titles()
    {
        return $this->hasMany(Title::class);
    }
}
