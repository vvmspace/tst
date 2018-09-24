<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

class Post extends Model
{

    protected $fillable = ['title', 'body'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag')
            ->withTimestamps();
    }

    public function attachTagsFromString($string){
        $tags_list = explode(', ', $string);
        foreach ($tags_list as $tag_name){
            $tag = Tag::CreateOrGet($tag_name);
            $this->tags()->save($tag);
        };
    }
}
