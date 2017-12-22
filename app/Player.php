<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['name', 'nicName', 'birthDate','country_id', 'height', 'position'];

    public function awards()
    {
        return $this->hasMany(Award::class);
    }

    public function clubs()
    {
        return $this->belongsToMany(Club::class, 'player_club', 'player_id', 'club_id')->withTimestamps();
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function cups()
    {
        return $this->belongsToMany(Cup::class, 'player_cup', 'player_id', 'cup_id')->withTimestamps();
    }

    public function prizes()
    {
        return $this->belongsToMany(Prize::class, 'player_prize', 'player_id', 'prize_id')->withTimestamps();
    }

    public function stats()
    {
        return $this->hasMany(Stat::class);
    }

    public function seasons()
    {
        return $this->belongsToMany(Player::class, 'player_season', 'player_id', 'season_id')->withTimestamps();
    }

    public function titles()
    {
        return $this->hasMany(Title::class);
    }
}
