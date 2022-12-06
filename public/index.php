<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';


use Hillel\Models\Category;
use Hillel\Models\Tag;
use Hillel\Models\Post;

// Створення категорій

//$category = new Category();
//$category->title = 'First Category';
//$category->slug = 'SMT';
//$category->save();
//
//$category = new Category();
//$category->title = 'Second Category';
//$category->slug = 'SMT';
//$category->save();
//
//$category = new Category();
//$category->title = 'Third Category';
//$category->slug = 'SMT';
//$category->save();
//
//$category = new Category();
//$category->title = 'Fourth Category';
//$category->slug = 'SMT';
//$category->save();
//
//$category = new Category();
//$category->title = 'Fifth Category';
//$category->slug = 'SMT';
//$category->save();

//Апдейт категорії

//$category = Category::find(1);
//$category->title = 'New Title';
//print_r($category->title);
//$category->save();

//Видалення категорій

//$category = Category::find(3);
//print_r($category->id);
//$category->delete();
//$category->save();

//Створення постів та присвоєння їм довільних категорій

//$category = Category::find(1);
//$post = new Post();
//$post->title = 'Post 1 title';
//$post->slug = 'SMT1';
//$post->body = 'BODY1';
//$post->category_id = $category->id;
//$post->save();
//
//$category = Category::find(2);
//$post = new Post();
//$post->title = 'Post 2 title';
//$post->slug = 'SMT2';
//$post->body = 'BODY2';
//$post->category_id = $category->id;
//$post->save();
//
//$category = Category::find(4);
//$post = new Post();
//$post->title = 'Post 3 title';
//$post->slug = 'SMT3';
//$post->body = 'BODY3';
//$post->category_id = $category->id;
//$post->save();
//
//$category = Category::find(5);
//$post = new Post();
//$post->title = 'Post 4 title';
//$post->slug = 'SMT4';
//$post->body = 'BODY4';
//$post->category_id = $category->id;
//$post->save();
//
//$category = Category::find(1);
//$post = new Post();
//$post->title = 'Post 5 title';
//$post->slug = 'SMT5';
//$post->body = 'BODY5';
//$post->category_id = $category->id;
//$post->save();
//
//$category = Category::find(2);
//$post = new Post();
//$post->title = 'Post 6 title';
//$post->slug = 'SMT6';
//$post->body = 'BODY6';
//$post->category_id = $category->id;
//$post->save();
//
//$category = Category::find(4);
//$post = new Post();
//$post->title = 'Post 7 title';
//$post->slug = 'SMT7';
//$post->body = 'BODY7';
//$post->category_id = $category->id;
//$post->save();
//
//$category = Category::find(5);
//$post = new Post();
//$post->title = 'Post 8 title';
//$post->slug = 'SMT8';
//$post->body = 'BODY8';
//$post->category_id = $category->id;
//$post->save();
//
//$category = Category::find(1);
//$post = new Post();
//$post->title = 'Post 9 title';
//$post->slug = 'SMT9';
//$post->body = 'BODY9';
//$post->category_id = $category->id;
//$post->save();
//
//$category = Category::find(2);
//$post = new Post();
//$post->title = 'Post 10 title';
//$post->slug = 'SMT10';
//$post->body = 'BODY10';
//$post->category_id = $category->id;
//$post->save();

//$category = Category::find(2);
//$post = new Post();
//$post->title = 'Post 100 title';
//$post->slug = 'SMT100';
//$post->body = 'BODY100';
//$category->posts()->save($post);