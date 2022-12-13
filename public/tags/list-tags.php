<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/blade.php';

use Hillel\Models\Tag;

$title = 'list-tags';
$tags = Tag::all();

/** @var $blade */

echo $blade->make('pages/tags/list-tags', compact('title', 'tags'))->render();