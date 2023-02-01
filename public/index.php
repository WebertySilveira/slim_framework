<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require __DIR__ . "/../bootstrap.php";

$app->get("/{id}", function (Request $request, Response $response, array $args) {
   dd($args);
});

$app->run();