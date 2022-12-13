<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/blade.php';

use Hillel\Models\Category;

$title = 'list-categories';
$categories = Category::all();

/** @var $blade */

echo $blade->make('pages/categories/list-categories', compact('title', 'categories'))->render();