<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

class Post extends Model
{
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag')
            ->withTimestamps();
    }
}
