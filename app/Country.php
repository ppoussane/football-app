<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function club()
    {
        return $this->hasOne(Club::class);
    }

    public function league()
    {
        return $this->hasMany(League::class);
    }

    public function player()
    {
        return $this->hasMany(Player::class);
    }
}
