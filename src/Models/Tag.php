<?php

namespace Hillel\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Tag extends Model
{
    use SoftDeletes;
    public function post()
    {
        return $this->belongsToMany(Post::Class , 'post_tag')->withTimestamps();
    }

}
