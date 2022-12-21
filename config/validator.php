<?php

use Illuminate\Validation\DatabasePresenceVerifier;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Translation\Translator;
use Illuminate\Translation\FileLoader;
use Illuminate\Validation\Factory;

$loader = new FileLoader((new Filesystem()), realpath(__DIR__ . '/../resources/lang'));
$translator = new Translator($loader, 'en');
$validator = new Factory($translator);

/** @var \Illuminate\Database\Capsule\Manager $capsule */
$databasePresenceVerifier = new DatabasePresenceVerifier($capsule->getDatabaseManager());
$validator->setPresenceVerifier($databasePresenceVerifier);

function validator()
{
    global $validator;

    return $validator;
}