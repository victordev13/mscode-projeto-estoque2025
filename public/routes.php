<?php

use App\Controller\AppController;
use App\Controller\Error\ErrorController;
use App\Controller\Error\NotFoundController;

$router = [
    'routes' => [
        '/' => AppController::class,
        '/error' => ErrorController::class,
    ],
    'default' => NotFoundController::class
];
