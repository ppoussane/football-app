<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    public function clubs()
    {
        return $this->belongsToMany(Club::class, 'club_leagues', 'league_id', 'club_id')->withTimestamps();
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function stat()
    {
        return $this->hasOne(Stat::class);
    }

    public function statistics()
    {
        return $this->hasMany(Statistic::class);
    }
}
