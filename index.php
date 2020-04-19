<?php

use Slim\Factory\AppFactory;
use Slim\Middleware\ErrorMiddleware;

require 'vendor/autoload.php';

$app = AppFactory::create();

$errorMiddleware = new ErrorMiddleware(
    $app->getCallableResolver(),
    $app->getResponseFactory(),
    true,
    false,
    false
);
$app->add($errorMiddleware);

$app->run();
