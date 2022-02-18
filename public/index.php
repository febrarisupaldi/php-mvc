<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Paldi\PHP\MVC\App\Router;
use Paldi\PHP\MVC\Controller\HomeController;
use Paldi\PHP\MVC\Controller\ProductController;
use Paldi\PHP\MVC\Middleware\AuthMiddleware;


Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello', [AuthMiddleware::class]);
Router::add('GET', '/hi', HomeController::class, 'hi');
Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');
Router::run();