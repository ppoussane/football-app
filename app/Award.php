<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function prize()
    {
        return $this->belongsTo(Prize::class);
    }

    public function Season()
    {
        return $this->belongsTo(Season::class);
    }
}
