<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Paldi\PHP\MVC\App\Router;
use Paldi\PHP\MVC\Controller\HomeController;


Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/hi', HomeController::class, 'hi');
Router::run();