<?php
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/blade.php';

if (!isset($_GET['id'])) {
    throw new Error('not found');
}
$tag = \Hillel\Models\Tag::find($_GET['id']);
$tag->delete();
header('Location: list-tags.php');

/** @var $blade */

echo $blade->make('pages/tags/delete-tag', [
    'title' => 'delete-tag'
])->render();