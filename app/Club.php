<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    public function awards()
    {
        return $this->hasMany(Award::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function games()
    {
        return $this->hasMany(Game::class);
    }

    public function leagues()
    {
        return $this->belongsToMany(League::class, 'club_leagues', 'club_id', 'league_id')->withTimestamps();
    }

    public function players()
    {
        return $this->belongsToMany(Player::class, 'player_club', 'club_id', 'player_id')->withTimestamps();
    }

    public function stadium()
    {
        return $this->hasOne(Stadium::class);
    }

    public function standings()
    {
        return $this->hasMany(Standing::class);
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