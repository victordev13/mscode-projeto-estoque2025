<?php

require_once __DIR__ . '/../vendor/autoload.php';
$routes = require __DIR__ . '/routes.php';

if (!isset($routes['routes'], $routes['default'])) {
    throw new RuntimeException('Configuração de rotas ausente.');
}

$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
$uri = rtrim($uri, '/');

foreach ($routes['routes'] as $route => $controller) {
    if ($uri === $route || ($uri === '' && $route === '/')) {
        $controller = new $controller();
        $controller->index($_REQUEST);
        exit;
    }
}

$defaultController = new $routes['default']();
$defaultController->index($_REQUEST);
