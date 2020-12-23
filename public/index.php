<?php

require_once __DIR__ . "/../vendor/autoload.php";

use app\Router;
use app\controllers\MainController;

$router = new Router();

$router->get("/", [MainController::class, "index"]);
$router->get("/create", [MainController::class, "create"]);
$router->post("/create", [MainController::class, "create"]);
$router->post("/delete", [MainController::class, "delete"]);


$router->resolve();
