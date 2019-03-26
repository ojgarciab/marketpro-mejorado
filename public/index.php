<?php

require '../vendor/autoload.php';

$app = new \Slim\App();
$app->get('/{nombre}', function (\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Message\ResponseInterface $response) {
    $response->getBody()->write(
        "Hola, ". htmlspecialchars($request->getAttribute('nombre'))
    );

    return $response;
});
$app->run();
