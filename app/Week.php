<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    protected $fillable = ['name'];

    public function game ()
    {
        $this->hasMany(Game::class);
    }

    public function statistics()
    {
        return $this->hasMany(Statistic::class);
    }
}
