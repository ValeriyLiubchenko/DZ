<?php

namespace Hillel\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use SoftDeletes;
    public function category()
    {
        return $this->belongsTo(Category::Class);
    }
    public function tags()
    {
        return$this->belongsToMany(Tag::Class , 'post_tag')->withTimestamps();
    }
}
