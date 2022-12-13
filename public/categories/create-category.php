<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/blade.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category = new \Hillel\Models\Category();
    $category->title = $_POST['title'];
    $category->slug = $_POST['slug'];
    $category->save();
    header('Location: list-categories.php');
}

/** @var $blade */

echo $blade->make('pages/categories/create-category', [
    'title' => 'create-category'
])->render();