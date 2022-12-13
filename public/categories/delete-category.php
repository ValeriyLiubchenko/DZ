<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/blade.php';

if (!isset($_GET['id'])) {
    throw new Error('not found');
}
$category = \Hillel\Models\Category::find($_GET['id']);
$category->delete();
header('Location: list-categories.php');

/** @var $blade */

echo $blade->make('pages/categories/delete-category', [
    'title' => 'delete-category'
])->render();