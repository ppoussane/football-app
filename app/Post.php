<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'image','category_id', 'ordinary'];

    public static function ordinary()
    {
        return static::where('ordinary', 1)->orderBy('id', 'desc');
    }

    public static function main_post()
    {
        return static::where('ordinary', 0)->orderBy('id', 'desc')->get();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes', 'post_id', 'user_id')->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
        $user_id = auth()->id();
        $this->comments()->create(compact('body', 'user_id'));
    }

    public function taggings()
    {
        return $this->hasMany(Tagging::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id')->withTimestamps();
    }
}
