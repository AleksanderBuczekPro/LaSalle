<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;



// Register global error and exception handlers
ErrorHandler::register();
ExceptionHandler::register();



// Register service providers.
$app->register(new Silex\Provider\DoctrineServiceProvider());

// Twig 
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

// Bootstrap
$app->register(new Silex\Provider\AssetServiceProvider(), array(
    'assets.version' => 'v1'
));

// Register services.
$app['dao.contact'] = function ($app) {
    return new LaSalle\DAO\ContactDAO($app['db']);
};