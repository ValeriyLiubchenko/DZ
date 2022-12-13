<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/blade.php';
require_once __DIR__ . '/../config/router.php';

/**
 * @var Illuminate\Routing\Router $router
 */

/**
 * @var Illuminate\Http\Request $request
 */


$responce = $router->dispatch($request);
echo $request->getContent();





//$app = new \Hillel\Base\Application();
//echo $app->run();

//$title = 'Home page';
//
///** @var $blade */
//
//echo $blade->make('pages/index', compact('title',))->render();
