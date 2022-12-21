<?php

session_start();

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/blade.php';
require_once __DIR__ . '/../config/router.php';
require_once __DIR__ . '/../config/validator.php';

/**
 * @var Illuminate\Routing\Router $router
 */


/**
 * @var Illuminate\Http\Request $request
 */



$responce = $router->dispatch($request);
echo $responce->getContent();


/** @var $blade */

echo $blade->make('pages/index')->render();
