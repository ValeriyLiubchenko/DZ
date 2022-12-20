<?php

use Illuminate\View\Engines\EngineResolver;
use Illuminate\Filesystem\Filesystem;
use Illuminate\View\FileViewFinder;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\View\Factory;
use Illuminate\Http\Response;

$engineResolver = new EngineResolver();
$fileSystem = new Filesystem();
$fileViewFinder = new FileViewFinder(
    $fileSystem, [__DIR__ . '/../resources/views']
);

$compiler = new BladeCompiler($fileSystem, __DIR__ . '/../resources/cache');
$engineResolver->register('blade', function () use ($compiler) {
    return new CompilerEngine($compiler);
});
$dispatcher = new Dispatcher((new Container()));

$blade = new Factory(
    $engineResolver,
    $fileViewFinder,
    $dispatcher
);
function view($view, $data = [], $mergeData = [])
{
    global $blade;

    return new Response(
        $blade->make($view, $data, $mergeData)->render()
    );
}
