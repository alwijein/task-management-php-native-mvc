<?php

require_once __DIR__ . '/../vendor/autoload.php';

use AlwiJaya\TugasBesarWeb\App\Router;
use AlwiJaya\TugasBesarWeb\Controller\AuthController;
use AlwiJaya\TugasBesarWeb\Controller\HomeController;
use AlwiJaya\TugasBesarWeb\Controller\TaskController;
use AlwiJaya\TugasBesarWeb\Middleware\AuthMiddleware;

Router::add('GET', '/',AuthController::class,'index');
Router::add('POST','/storeLogin',AuthController::class,'login');
Router::add('GET','/register',AuthController::class,'register');
Router::add('POST','/storeRegister',AuthController::class,'storeRegister');

Router::add('GET','/home',HomeController::class,'index');
Router::add('GET','/create-task',HomeController::class,'create');
Router::add('GET','/show-task',HomeController::class,'showTask');
Router::add('GET','/show-user',HomeController::class,'showUser');

Router::add('POST','/storeCreateTask', TaskController::class, 'create');


Router::run();