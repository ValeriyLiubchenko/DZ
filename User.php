<?php

abstract class Model
{
    public static function find($id)
    {
        $tablename = strtolower(static::class);
        $sql = 'SELECT * FROM ' . $tablename . ' WHERE id = :id';
        return $sql;
    }

    public function create()
    {
        $tablename = strtolower(static::class);
        $data = get_object_vars($this);
        $property = array_keys($data);
        $property2 = array_map(function ($item) {
            return ':' . $item;
        }, $property);
        $sql = 'INSERT ' . $tablename . ' (' . implode(',', $property) . ') VALUES (' . implode(',', $property2) . ')';
        return $sql;
    }

    public function update()
    {
        $tablename = strtolower(static::class);
        $data = get_object_vars($this);
        $property = array_keys($data);
        $property2 = array_map(function ($item) {
            return ':' . $item;
        }, $property);
        $sql = 'UPDATE ' . $tablename . ' (' . implode(',', $property) . ') VALUES (' . implode(',', $property2) . ')
        WHERE id = : '.$this->id.' ';
        return $sql;

    }

    public function delete()
    {
        $tablename = strtolower(static::class);
        $data = get_object_vars($this);
        $sql = 'DELETE * FROM ' . $tablename . ' WHERE id = :id';
        return $sql;
    }
    public function save()
    {
        if(self::find()==true)
        {
            $this->update();
        }
        else $this->create();
    }
}


final class User extends Model
{
    public $id;
    public $name;
    public $email;
}

$user = User::find(1);
var_dump($user); // SELECT * FROM user WHERE id = :id

$user = new User();
$user->id = 1;
$user->name = 'John';
$result = $user->save();
var_dump($result); // UPDATE user SET name = :name, email = 'email' WHERE id = :id

$result = $user->delete();
var_dump($result); // DELETE FROM user WHERE id = :id

$user = new User;
$user->name = 'John';
$user->email = 'some@gmail.com';
$result = $user->save();
var_dump($result); // INSERT INTO user (id, name, email) VALUES (:id, :name, :email)