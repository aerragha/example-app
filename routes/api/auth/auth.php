<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

Route::prefix('/')->group(function (Router $router) {
    $router->post('register', RegisterController::class);
    $router->post('login', LoginController::class);
    $router->post('logout', LogoutController::class)->middleware('auth:sanctum');
});
