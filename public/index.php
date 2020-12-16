<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/api/clients', function (Request $request, Response $response, $args) {
    $response->getBody()->write(file_get_contents('https://jsonplaceholder.typicode.com/users'));

    return $response->withAddedHeader('Content-Type', 'application/json');
});

$app->any('/{any:.*}', function (Request $request, Response $response, $args) {
    $response->getBody()->write(file_get_contents(__DIR__ . '/index.html'));

    return $response;
});


$app->run();



