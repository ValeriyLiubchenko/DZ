<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/blade.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tag = new \Hillel\Models\Tag();
    $tag->title = $_POST['title'];
    $tag->slug = $_POST['slug'];
    $tag->save();
    header('Location: list-tags.php');
}

/** @var $blade */

echo $blade->make('pages/tags/create-tag', [
    'title' => 'create-tag'
])->render();