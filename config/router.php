<?php

use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
use Hillel\Controllers\PageController;
use Hillel\Controllers\CategoryController;
use Hillel\Controllers\TagController;

$request = Request::createFromGlobals();

function request() {
    global $request;

    return $request;
}

$router = new Router(new Dispatcher(), (new Container()));

function router() {
    global $router;

    return $router;
}

$router->get('', [PageController::class, 'index']);

$router->get('/category', [CategoryController::class, 'index']);
$router->get('/category/{id}/show', [CategoryController::class, 'show']);
$router->get('/category/create', [CategoryController::class, 'create']);
$router->post('/category/store', [CategoryController::class, 'store']);
$router->get('/category/{id}/edit', [CategoryController::class, 'edit']);
$router->post('/category/update', [CategoryController::class, 'update']);
$router->get('/category/{id}/delete', [CategoryController::class, 'destroy']);

$router->get('/tag', [TagController::class, 'index']);
$router->get('/tag/{id}/show', [TagController::class, 'show']);
$router->get('/tag/create', [TagController::class, 'create']);
$router->post('/tag/store', [TagController::class, 'store']);
$router->get('/tag/{id}/edit', [TagController::class, 'edit']);
$router->post('/tag/update', [TagController::class, 'update']);
$router->get('/tag/{id}/delete', [TagController::class, 'destroy']);