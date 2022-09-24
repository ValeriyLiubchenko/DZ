<?php

abstract class Model
{

    public static function create()
    {

    }

    public static function read()
    {

    }

    public static function update()
    {

    }

    public static function delete()
    {

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