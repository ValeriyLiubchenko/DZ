<?php

namespace Hillel\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;

    public function orders()
    {
        return $this->hasMany(Order::Class);
    }
}