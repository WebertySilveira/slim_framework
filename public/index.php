<?php

use app\controllers\HomeController;
use app\controllers\UserController;
use app\controllers\BookController;

require __DIR__ . "/../bootstrap.php";

$app->get("/", HomeController::class . ':index');

$app->get("/user", UserController::class . ':index');
$app->get("/user/add", UserController::class . ':create');
$app->get("/user/update/{id}", UserController::class . ':update');
$app->get("/user/delete/{id}", UserController::class . ':delete');

$app->get("/book", BookController::class . ':index');
$app->get("/book/add", BookController::class . ':create');
$app->get("/book/update/{id}", BookController::class . ':update');
$app->get("/book/delete/{id}", BookController::class . ':delete');

$app->run();