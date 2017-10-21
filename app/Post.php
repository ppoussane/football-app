<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'image'];

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
}
