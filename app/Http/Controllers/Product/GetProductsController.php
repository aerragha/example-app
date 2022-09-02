<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\BaseController;
use App\Http\Requests\ProductRequest;
use App\Services\Product\ProductService;

class GetProductsController extends BaseController
{

    public function __construct(private ProductService $productService) {
    }

    public function __invoke()
    {
        try {
            return $this->productService->getAll();
        } catch (\Throwable $th) {
            // You can add logger here
            return $this->sendError('Something went wrong', 500);
        }
    }
}