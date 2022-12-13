<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/blade.php';


$title = 'Home page';

/** @var $blade */

echo $blade->make('pages/index', compact('title',))->render();
