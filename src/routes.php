<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Controllers\User\UserController;
use App\Middleware\roleCheck as RoleCheck;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});


//Sample Custom Route with middlewear

//$app->group('/api',
//    function () {
//        $this->put('/users/{id}', UserController::class . ':update')->add( new RoleCheck() );//role check is a middlewear
//});




