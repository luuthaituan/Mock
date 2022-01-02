<?php
spl_autoload_register(function ($class){
    $root = dirname(__DIR__);
    $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
    if(file_exists($file)){
        require_once $file;
    }
});
use app\controllers\HomeController;
$route = new libs\Router();
$route->register('GET', '/todo/{id}', [HomeController::class, 'deletePost']);
$route->register('GET', '/todo/home', [HomeController::class, 'showPost']);
$route->register('GET', '/todo/add', [HomeController::class, 'showViewAdd']);
$route->register('POST', '/todo/edit', [HomeController::class, 'addPost']);
$route->dispatch();

