<?php

namespace Hillel\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function post()
    {
        return $this->belongsToMany(Post::Class , 'post_tag')->withTimestamps();
    }

}
