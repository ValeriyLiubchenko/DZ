<?php

namespace Hillel\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;

    public function orders()
    {
        return $this->hasMany(Order::Class);
    }
}
