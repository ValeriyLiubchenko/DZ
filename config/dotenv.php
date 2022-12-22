<?php

$repository = Dotenv\Repository\RepositoryBuilder::createWithNoAdapters()
    ->addAdapter(Dotenv\Repository\Adapter\EnvConstAdapter::class)
    ->addWriter(Dotenv\Repository\Adapter\PutenvAdapter::class)
    ->immutable()
    ->make();

$dotenv = Dotenv\Dotenv::create($repository, __DIR__ . '/../');
$dotenv->load();
$dotenv->required('DATABASE_NAME')->notEmpty();
$dotenv->required('DATABASE_DRIVER')->notEmpty();
$dotenv->required('DATABASE_HOST')->notEmpty();
$dotenv->required('DATABASE_USERNAME')->notEmpty();
$dotenv->required('DATABASE_PASSWORD')->notEmpty();