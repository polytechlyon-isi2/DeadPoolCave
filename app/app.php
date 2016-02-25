<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;
use DeadPoolCave\DAO;

// Register global error and exception handlers
ErrorHandler::register();
ExceptionHandler::register();

// Register service providers.
$app->register(new Silex\Provider\DoctrineServiceProvider());

// Register services.
$app['dao.article'] = $app->share(function ($app) {
    return new DeadPoolCave\DAO\ArticleDAO($app['db']);
});