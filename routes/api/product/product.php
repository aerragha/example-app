<?php

use App\Http\Controllers\Product\DeleteProductController;
use App\Http\Controllers\Product\CreateProductController;
use App\Http\Controllers\Product\GetProductsController;
use App\Http\Controllers\Product\GetSingleProductController;
use App\Http\Controllers\Product\UpdateProductController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;


Route::prefix('products')->name('.products.')->group(function (Router $router) {
    $router->post('/', CreateProductController::class);
    $router->put('/{id}', UpdateProductController::class);
    $router->delete('/{id}', DeleteProductController::class);
    $router->get('/{id}', GetSingleProductController::class);
    $router->get('/', GetProductsController::class);
});
