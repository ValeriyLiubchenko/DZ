<?php

namespace Hillel\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function category()
    {
        return $this->belongsTo(Category::Class);
    }
    public function tags()
    {
        return$this->belongsToMany(Tag::Class , 'post_tag')->withTimestamps();
    }
}
