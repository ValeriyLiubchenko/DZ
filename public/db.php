<?php

require_once '../vendor/autoload.php';
require_once '../config/database.php';

/** @var $capsule */

$blueprint = new Illuminate\Database\Schema\Blueprint('categories');
$blueprint->id();
$blueprint->string('title');
$blueprint->string('slug');
$blueprint->timestamps();
$blueprint->create();
$blueprint->build($capsule->getConnection(), new Illuminate\Database\Schema\Grammars\MySqlGrammar());

$blueprint = new Illuminate\Database\Schema\Blueprint('posts');
$blueprint->id();
$blueprint->string('title');
$blueprint->string('slug');
$blueprint->text('body');
$blueprint->foreignId('category_id');
$blueprint->timestamps();
$blueprint->create();
$blueprint->foreign('category_id')->references('id')->on('categories');
$blueprint->build($capsule->getConnection(), new Illuminate\Database\Schema\Grammars\MySqlGrammar());

$blueprint = new Illuminate\Database\Schema\Blueprint('tags');
$blueprint->id();
$blueprint->string('title');
$blueprint->string('slug');
$blueprint->timestamps();
$blueprint->create();
$blueprint->build($capsule->getConnection(), new Illuminate\Database\Schema\Grammars\MySqlGrammar());

$blueprint = new Illuminate\Database\Schema\Blueprint('post_tag');
$blueprint->id();
$blueprint->foreignId('post_id');
$blueprint->foreignId('tag_id');
$blueprint->timestamps();
$blueprint->create();
$blueprint->foreign('post_id')->references('id')->on('posts');
$blueprint->foreign('tag_id')->references('id')->on('tags');
$blueprint->build($capsule->getConnection(), new Illuminate\Database\Schema\Grammars\MySqlGrammar());