<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $fillable = ['name', 'slug'];

    static function CreateOrGet($tag_text){
        $tag = Tag::where('name', 'like', $tag_text)->first();
        if(empty($tag)){
            $slug = str_slug($tag_text, '-');
            if(!empty(Tag::where('slug', $slug)->first())){
                // Slug был лишним для 2х-часовой задачи, можно ещё допилить транслитерацию
                $slug .= '-' . time();
            }
            $tag = Tag::create(['name' => $tag_text, 'slug' => $slug]);
        }
        return $tag;
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tag');
    }

}
