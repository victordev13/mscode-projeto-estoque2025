<?php

use App\Controller\AppController;
use App\Controller\Error\ErrorController;
use App\Controller\Error\NotFoundController;
use App\Controller\Login\LoginController;

$router = [
    'routes' => [
        '/' => AppController::class,
        '/error' => ErrorController::class,
        'login' => LoginController::class
    ],
    'default' => NotFoundController::class
];
