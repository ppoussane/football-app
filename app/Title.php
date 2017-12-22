<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    public function cup()
    {
        return $this->belongsTo(Cup::class);
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function Season()
    {
        return $this->belongsTo(Season::class);
    }
}