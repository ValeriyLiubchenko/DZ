<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/blade.php';

$title = 'update-category';

if (!isset($_GET['id'])) {
    throw new Error('not found');
}
$category = \Hillel\Models\Category::find($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category->title = $_POST['title'];
    $category->slug = $_POST['slug'];
    $category->save();
    header('Location: list-categories.php');
}

/** @var $blade */

echo $blade->make('pages/categories/update-category', compact('category', 'title'))->render();