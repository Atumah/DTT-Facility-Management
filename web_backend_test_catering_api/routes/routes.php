<?php

/** @var Bramus\Router\Router $router */

// Define routes here
$router->get('/test', App\Controllers\IndexController::class . '@test');
$router->get('/', App\Controllers\IndexController::class . '@test');
$router->post('/facility/create', App\Controllers\FacilityController::class . '@createFacility');
$router->get('/facility/{id}', App\Controllers\FacilityController::class . '@getFacility');
$router->get('/facilities', App\Controllers\FacilityController::class . '@getFacilities');
$router->patch('/facility/{id}', App\Controllers\FacilityController::class . '@updateFacility');
$router->delete('/facility/{id}', App\Controllers\FacilityController::class . '@deleteFacility');
$router->get('/facilities/search', App\Controllers\SearchController::class . '@searchFacilities');

